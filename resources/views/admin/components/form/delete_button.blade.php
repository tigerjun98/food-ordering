<button type="button" class="mt-3 btn text-danger btn-xs mb-2 d-flex remove_button"
        onclick="removeVariant('{{$id ?? '`+id+`'}}')">
    @if(isset($label))
        <span>{{__('common.'.$label ?? 'remove')}}</span>
    @else
        <span>{{__('common.remove')}}</span>
    @endif
    <i class="iconsminds-folder-close ml-2"></i>
</button>
<style>
    .remove_button{
        border: 1px solid #ffd1d5;
        border-radius: 0;
        padding: 10px 20px;
        text-transform: capitalize;
    }
</style>
