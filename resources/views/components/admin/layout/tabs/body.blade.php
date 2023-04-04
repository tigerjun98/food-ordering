<div class="tab-content">
    @foreach($navs as $key => $item)
        <div class="tab-pane show {{$key == 0 ? 'active' : ''}}"
             id="{{$item}}-tab-content"
             role="tabpanel">{{ ${$item} ?? '' }}
        </div>
    @endforeach
</div>
