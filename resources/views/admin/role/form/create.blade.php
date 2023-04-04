@php
    $data = $data ?? null;
@endphp
<x-admin.component.modal
    :title="'Role details'"
    :navs="['details', 'permissions']"
    :submit="route('admin.role.store')"
>

    @slot('permissions')
        <div class="row mb-4">
            @foreach(Lang::get('permission') as $role => $permission)
                <div class="col-md-4 mb-4">
                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox"
                               name="role[{{$role}}]"
                               class="custom-control-input"
                               id="check-{{ $role }}"
                               value="1"
                               onchange="checkAll('{{ $role }}')"
                            {{ isset($permissions) && in_array($role.'.*', $permissions) ? 'checked' : '' }}
                        >
                        <label class="custom-control-label font-weight-bold text-capitalize" for="check-{{ $role }}">
                            {{ str_replace('-', ' ', $role) }}
                        </label>
                    </div>
                    @foreach($permission as $name => $lang)
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox"
                                   name="permission[{{$role}}][{{$name}}]"
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
    @endslot

    @slot('details')
        <input type="hidden" name="id" value="{{ $data ? $data->id : new_id() }}" />
        <input type="hidden" name="name" value="{{ $data ? $data->name : null }}" />

        <div class="row">
            <x-admin.form.text
                :data="$data"
                :col="'md-6'"
                :name="'name_en'"
            />
            <x-admin.form.text
                :data="$data"
                :col="'md-6'"
                :name="'name_cn'"
            />
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
