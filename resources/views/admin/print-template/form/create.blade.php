@php
    $data = $data ?? null;
@endphp
<x-admin.component.modal
    :title="'Print details'"
    :nav="['details']"
    :submit="route('admin.print-template.store')"
>
    @slot('details')
        <input type="hidden" name="name" value="{{ $data ? $data->id : 'new' }}">
        <input type="hidden" value="{{ \App\Models\PrintTemplate::CONSULTATION }}" name="type">
        <div id="optionSection">
            @include('admin.print-template.form.create-items')
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

            function uncheckAll(){
                const refs = document.getElementsByClassName(`custom-control-input`);
                Array.prototype.forEach.call(refs, function (el) { // loop classes
                    $(el).prop('checked', false)
                });
            }
        </script>
    @endslot
</x-admin.component.modal>
