@php
    $data = $data ?? null;
@endphp
<x-admin.component.modal
    :title="'Print details'"
    :nav="['details']"
    :submit="route('admin.print-template.store')"
>

    @slot('script')
        let printUrl = `{{ route('admin.consultation.print.index', $consultation->id) }}?types=${res.data.types}&title=${res.data.title}`;
        $(this).printConsultation({url: printUrl})
    @endslot

    @slot('details')

        <div class="row mb-4">
            <x-admin.form.select
                :col="'md-12'"
                :name="'name'"
                :selectjs="false"
            >
                @slot('customOption')
                    @foreach($templates as $template)
                        <option value="{{ $template->id }}">{{ $template->full_name }}</option>
                        <option value="new">{{ trans('common.new_template') }}</option>
                    @endforeach
                @endslot
            </x-admin.form.select>

            <script type="text/javascript">
                $(document).on('change', '#print_template', function (event){
                    var $this = $(this);
                    var optionText = $this. val();
                    console.log(optionText)
                });
            </script>
        </div>

        <div class="row mb-4">
            <x-admin.form.text
                :col="'md-6'"
                :name="'name_en'"
            />
            <x-admin.form.text
                :col="'md-6'"
                :name="'name_cn'"
            />
        </div>


            <div class="row mb-4">
            @foreach(Lang::get('prints') as $role => $permission)
                <div class="col-md-4 mb-4">
                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox"
                               name="category[{{$role}}]"
                               class="custom-control-input"
                               id="check-{{ $role }}"
                               value="1"
                               onchange="checkAll('{{ $role }}')"
                            {{ isset($permissions) && in_array($role.'.*', $permissions) ? 'checked' : '' }}
                        >
                        <label class="custom-control-label font-weight-bold" for="check-{{ $role }}">{{ $role }}</label>
                    </div>
                    @foreach($permission as $name => $lang)
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox"
                                   name="value[{{$role}}][{{$name}}]"
                                   class="custom-control-input role-{{ $role }}"
                                   value="1"
                                   id="check-{{ $role }}-{{ $name }}"
                                   onchange="uncheckRole('{{ $role }}')"
                                {{ isset($permissions) && in_array($role.'.'.$name, $permissions) ? 'checked' : '' }}
                                {{ isset($permissions) && in_array($role.'.*', $permissions) ? 'checked' : '' }}
                            >
                            <label class="custom-control-label" for="check-{{ $role }}-{{ $name }}">{{ $lang }}</label>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>

        <script>
            const monitorChildCheckbox = (role) => {
                let allChecked = true;
                const refs = document.getElementsByClassName(`role-${role}`);
                Array.prototype.forEach.call(refs, function (el) { // loop classes
                    if(!$(el).prop('checked')) allChecked = false
                });

                return allChecked;
            }

            const uncheckRole = (role) => {
                $(`#check-${role}`).prop('checked',
                    monitorChildCheckbox(role) ? 'checked' : false
                )
            }

            const checkAll = (role) => {
                const refs = document.getElementsByClassName(`role-${role}`);
                if (document.getElementById(`check-${role}`).checked) {
                    Array.prototype.forEach.call(refs, function (el) { // loop classes
                        $(el).prop('checked', 'checked')
                    });
                } else{
                    Array.prototype.forEach.call(refs, function (el) { // loop classes
                        $(el).prop('checked', false)
                    });
                }
            }


        </script>
    @endslot
</x-admin.component.modal>
