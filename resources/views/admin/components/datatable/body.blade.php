@if(isset($option['response']) && $option['response'] == "ajax")
    <script>
        var table = $('#dataTable').DataTable();
        @foreach($data as $key => $d)
        var table_rows = `@include($option['data_path'])`
        table.rows.add($(table_rows)).draw();
        @endforeach
        @if(($data->isEmpty()))
        $('.ajax-max').removeClass('ds');
        @endif
    </script>
@else
    @component('admin.components.datatable.layout', [
        'data'      => $data,
        'option'    => $option
    ]) @endcomponent
@endif

