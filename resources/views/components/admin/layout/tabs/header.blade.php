<ul class="nav nav-tabs separator-tabs mb-0" role="tablist">
    @foreach($navs as $key => $item)
        <li class="nav-item">
            <a class="nav-link {{$key == 0 ? 'active' : ''}}" id="{{$item}}-tab" data-toggle="tab" href="#{{$item}}-tab-content" role="tab" aria-selected="true">{{ __('label.'.$item) }}</a>
        </li>
    @endforeach
</ul>
