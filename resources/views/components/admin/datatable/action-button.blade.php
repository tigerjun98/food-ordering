@if(isset($icon))
        <?php ?>
@elseif($type == 'delete')
        <?php $icon = 'folder-close' ?>
@elseif($type == 'edit')
        <?php $icon = 'folder-edit' ?>
@endif

<a
    class="dropdown-item @if($type == 'delete')text-danger @endif text-capitalize"

    @if(isset($action)) href="javascript:{{$action}}" @endif
    @if(isset($link) && $link)
        href="
            @if($type == 'edit') javascript:refreshModal('{{$link}}')
            @elseif($type == 'delete') javascript:confirmModal('{{$link}}')
            @else {{$link}}
            @endif
       ">
    @endif

    <i class="iconsminds-{{ $icon }} pr-2"></i>

    {{ __('common.'.$label ?? $type) }}
</a>
