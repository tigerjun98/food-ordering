@php
    $module = isset($moduleName) ? $moduleName : 'queue';
@endphp

<x-admin.form.select
    :selectJs="false"
    :col="'md-12'"
    :name="'name_or_nric_or_passport'"
    :required="false"
></x-admin.form.select>

<script type="text/javascript">
    $(document).ready(function(){
        $('#name_or_nric_or_passport').select2({
            theme: "bootstrap",
            dir: "ltr",
            placeholder: "",
            maximumSelectionSize: 6,
            containerCssClass: ":all:",
            allowClear: false,
            minimumInputLength: 1,
            dropdownParent: $('#'+$(this).getModalId({latest: true})),
            ajax: {
                url: '{{ route('admin.get-user-opt') }}',
                dataType: 'json',
                data: function (params) {
                    var query = {
                        search: params.term,
                        page: params.page || 1
                    }
                    return query;
                },
                processResults: function (data, params) {
                    params.page = params.page || 1;
                    return {
                        results: $.map(data.data, function (item) {
                            return {
                                text: item.name + (item.nric ? (' - ' + item.nric) : ''),
                                id: item.id
                            }
                        }),
                        pagination: {
                            more: data.next_page_url != null && data.next_page_url.length > 0
                        }
                    };
                },
                cache: true
            }
        });
    })

    $(document).on('change', '#name_or_nric_or_passport', async function (event) {
        let $this = $(this)
        if ($this.val()) {
            if($this.val() === 'new-patient' || $this.val().length === 1) {
                createNewPatient()
            } else {
                let data = $this.text().trim()
                let nric = data.substring(data.indexOf('-') + 1).trim()
                searchPatient(nric)
            }
        }
    });

    function createNewPatient(){
        $(this).hideAlert()
        let url = '{{ route('admin.user.create', 'jsAction=:script') }}'
        url = url.replace(':script', 'openRelatedModal(res);');
        $(this).openModal({url, refresh: true})
    }

    function openRelatedModal(res){
        let url = '{{ route('admin.'.$module.'.create', 'user_id=:userId') }}'.replace( ':userId', res.data.id )
        $(this).openModal({ url })
    }

    async function searchPatient(param){
        try {
            let res = await $(this).sendRequest({
                method: 'GET',
                alert: false,
                url: '{{route('admin.user.search-patient', 'nric=:nric')}}'.replace(':nric', param),
            })
            if(res.status === 200){
                handlePatientExists(res.data)
            }
        } catch (e) {
            if(e.status === 502){
                $('#app-alert').showAlert({
                    message: 'Error while getting patient details. Please refresh the page.', status: 'danger', delay: 1000
                });
            }
        }
    }

    function handlePatientExists(patient) {
        $('#user_id').val(patient.id)
        $('#nric').val(patient.nric)
        $('#full_name').val(patient.full_name_with_group)
        handleQueueInfo()
    }
</script>
