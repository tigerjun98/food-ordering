<div class="tab-content h-100">
    @foreach($navs as $key => $item)
        <div class="tab-pane show {{$key == 0 ? 'active' : ''}}"
             id="{{$item}}-tab-content"
             role="tabpanel"
        >
            <div class="scroll">
                {{ ${$item} ?? '' }}
            </div>
        </div>
    @endforeach
</div>
