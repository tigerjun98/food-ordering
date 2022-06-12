@extends('admin.layout')

@section('content')
    @component('admin.components.table', [
        'filter'    => \App\Models\Order::Filter(),
        'title'     => 'sales_management',
    ])
        @slot('moreAction')
            <button class="dropdown-item" onclick="exportToExcel()">
                <i class="iconsminds-folder-zip mr-1"></i>
                {{ __('common.export') }}
            </button>
        @endslot
    @endcomponent

    <div class="card mb-4 ds" id="export_table"></div>

    <script>
        async function exportToExcel(){
            // update db
            try {
                let response = await $("#export_table").sendRequest({
                    data: $('#filterForm').serialize(),
                    url: "{{route('admin.sales.export')}}",
                    method: 'POST',
                    alertSuccess: true,
                });

                $('#export_table').hide().html(response.html).fadeIn();
                // $("#app-alert").showAlert({
                //     status : 'success', message : 'Cart updated', delay: '2000', response
                // });
            } catch(err) {
                console.log(err, 'admin.sales.index');
            }
        }
    </script>
@endsection
