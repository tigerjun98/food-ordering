@foreach($data as $key => $d)
    <div class="blog-wrap mb-20">
        <div class="blog-img">
            <a href="">
                <img src="{{ asset('storage/promotions/'.$d->{'image_'.App::getLocale()}) }}" alt="blog">
            </a>
        </div>
        <div class="blog-content-4 blog-no-sidebar">
            <div class="blog-tag">
                <a href="#">{{ $d->{'label_'.App::getLocale()} }}</a>
            </div>
            <h3><a href="blog-details.html">{{ $d->{'title_'.App::getLocale()} }}</a></h3>
            <div class="blog-meta-4">
                <ul>
                    <li><a href="#">Expiry on {{ date("M d, Y", strtotime($d->end_at))}}</a></li>
                    <li>Left {{ date_diff(new \DateTime($d->end_at), new \DateTime())->format("%d days") }}</li>
                </ul>
            </div>
            <p>{{ $d->{'desc_'.App::getLocale()} }}</p>
            @if($d->url)
                <div class="blog-btn-3">
                    <a href="{{$d->url}}">More</a>
                </div>
            @endif
        </div>
    </div>
@endforeach
