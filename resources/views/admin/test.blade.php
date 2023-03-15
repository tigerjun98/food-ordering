@extends('admin.layout')

@section('content')

    <select class="form-control" multiple="multiple" id="js-example-tokenizer">
        <option selected="selected">orange</option>
        <option>white</option>
        <option selected="selected">purple</option>
    </select>

    <script type="module">
        $("#js-example-tokenizer").select2({
            theme: "bootstrap",
            dir: "ltr",
            placeholder: "",
            maximumSelectionSize: 6,
            containerCssClass: ":all:",
            // tags: true,
            tokenSeparators: [','],
            allowClear: true,
        })
    </script>
@stop


