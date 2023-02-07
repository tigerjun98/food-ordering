<?php $id = uniqid(); ?>


<script>
    var deleteUrl{{$id}} = "{{ $submitUrl }}";
    var {{ $funcName }} = (e) => {
        deleteUrl{{$id}} = deleteUrl{{$id}}.replace(':id', $(e).data("{{$attrName ?? 'id'}}"))
        $(this).openModal({
            html: `@include("public.modal.delete", ['id' => $id, 'desc' => $desc ?? ''])`, size: 'md', header: false
        });
    }

    var deleteConfirmAction{{$id}} = async (e) => {
        await $(this).sendRequest({
            method: 'DELETE',
            url: deleteUrl{{$id}}
        });
        $(this).closeModal({closeLatestModal: true})
        {{ $script ?? '' }}
    }
</script>
