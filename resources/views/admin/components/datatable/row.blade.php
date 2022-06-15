@if(isset($type) && $type == 'button')
    @if(isset($action))
        <button class="dropdown-item text-capitalize" onclick="{{$action}}">
            <i class="iconsminds-{{$icon ?? 'gears'}} pr-2"></i>
            @if(isset($label))
                {{__('common.'.$label)}}
            @else
                {{__('common.edit')}}
            @endif
        </button>
    @else
        <button class="dropdown-item text-capitalize" onclick="window.location.href='{{$link}}'">
            <i class="iconsminds-{{$icon ?? 'gears'}} pr-2"></i>
            @if(isset($label))
                {{__('common.'.$label)}}
            @else
                {{__('common.edit')}}
            @endif
        </button>
    @endif
@elseif(isset($type) && $type == 'edit')
    <button class="dropdown-item text-capitalize" onclick="refreshModal('{{$link}}')">
        <i class="iconsminds-{{$icon ?? 'folder-edit'}} pr-2"></i>
        @if(isset($label))
            {{__('common.'.$label) }}
        @else
        {{ __('common.edit') }}
        @endif

    </button>
@elseif(isset($type) && $type == 'delete')
    <button class="dropdown-item text-danger text-capitalize" onclick="confirmModal('{{$link}}')">
        <i class="iconsminds-folder-close pr-2"></i>
        @if(isset($label))
            {{__('common.'.$label)}}
        @else
            {{__('common.delete')}}
        @endif
    </button>
@elseif(isset($type) && $type == 'badge')
<td>
    <span class="text-capitalize badge badge-pill badge-{{$badge ?? 'light'}}">{{$data}}</span>
</td>
@elseif(isset($type) && $type == 'datetime')
<td>
    @if($data){{ucfirst(date("M d, Y h:i A", strtotime($data)))}}
    @else -
    @endif
</td>
@elseif(isset($type) && $type == 'date')
    <td>
        @if($data){{date("M d, Y", strtotime($data))}}
        @else -
        @endif
    </td>
@elseif(isset($type) && $type == 'float')
    <td>
        @if(is_numeric($data))
             {{number_format($data, 2,'.',',')}} @if(isset($currency) && $currency) {{$currency}} @else MYR @endif
        @else
            -
        @endif
    </td>
@elseif(isset($type) && $type == 'url')
    <td>
        <a target="_blank" href="{{$data}}">{{$data}}</a>
    </td>
@elseif(isset($type) && $type == 'array')
    <td>
        @foreach(explode(",", $data) as $key => $d)
            <span class="text-capitalize badge badge-pill badge-outline-secondary">
                @if(isset($lang))
                    {{ __(''.$lang.'.'.$d) }}
                @else
                    {{$d}}
                @endif

            </span>
        @endforeach
    </td>
@else
<td class="{{$class ?? ''}}" style="{{ $style ?? '' }}">
    {{$data}}
</td>
@endif

