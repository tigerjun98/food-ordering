<div class="breadcrumb-area border-top-2 pt-50 pb-50">
    <div class="custom-container-6">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="/">{{ __('common.home') }} </a></li>
                <li><span> > </span></li>
                @foreach($items as $key => $item)
                    <li><a href="{{$item[1]}}">{{ __('common.'.$item[0]) }}</a></li>
                    <li><span> > </span></li>
                @endforeach
                <li><a href="#">{{$title}}</a></li>
            </ul>
        </div>
    </div>
</div>
