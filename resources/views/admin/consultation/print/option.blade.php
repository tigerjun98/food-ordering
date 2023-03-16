@php
    $data = $data ?? null;
@endphp
<x-admin.component.modal
    :title="'Print details'"
    :nav="['print', 'details']"
    :submit="route('admin.print-template.store')"
>

    @slot('print')
        @foreach($templates as $template)
            <div class="d-flex flex-row mb-3 pb-3 border-bottom justify-content-between align-items-center">
                <div>
                    <h5 class="text-capitalize mb-1">{{ $template->full_name }}</h5>
                    <p class="text-muted mb-0 text-small">{{ $template->remark }}</p>
                </div>
                <div>
                    <a class="btn btn-outline-primary btn-xs" href="javascript:print({{ $template->id }})">PRINT</a>
                </div>
            </div>
        @endforeach


        <script>
            function print(id){
                let printUrl = `{{ route('admin.consultation.print.index', $consultation->id) }}?print_template_id=${id}`;
                $(this).printConsultation({url: printUrl})
                $(this).closeModal({closeLatestModal: true})
            }
        </script>
    @endslot

    @slot('details')
        <input type="hidden" value="consultation" name="type">
        <div class="row mb-2">
            <x-admin.form.select
                :col="'md-12'"
                :name="'name'"
                :selectJs="true"
                :label="trans('template')"
            >
                @slot('customOption')
                    @foreach($templates as $template)
                        <option class="text-capitalize" value="{{ $template->id }}">{{ ucfirst($template->full_name) }}</option>
                    @endforeach
                    <option value="new">{{ trans('common.new_template') }}</option>
                @endslot
            </x-admin.form.select>

            <script type="text/javascript">
                $(document).on('change', '#name', async function (event){
                    var $this = $(this);
                    if( $this.val() === 'new' ) return true;
                    let url = `{{ route('admin.print-template.edit', ':id') }}`.replace(':id', $this.val())
                    $('#optionSection').setHtml({url});
                });
            </script>
        </div>

        <div id="optionSection">
            @include('admin.print-template.form.edit')
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
