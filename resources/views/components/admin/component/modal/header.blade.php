<div class="title-wrapper mb-3">
    <h5 class="text-capitalize">{{ $lang ? __('common.'.$lang) : $title }}</h5>
    <button type="button" class="close" aria-label="Close"
            onclick="$(this).closeModal()"
    >
        <span aria-hidden="true">&times;</span>
    </button>
</div>

@if(isset($nav) && $nav)
    <ul class="nav nav-tabs separator-tabs mb-0" role="tablist">
        @foreach($nav as $key => $item)
            <li class="nav-item">
                <a class="nav-link {{$key == 0 ? 'active' : ''}}" id="{{$item}}-tab" data-toggle="tab" href="#{{$item}}-tab-content" role="tab" aria-selected="true">{{ __('label.'.$item) }}</a>
            </li>
        @endforeach
    </ul>
@endif
