<div class="review-wrapper">
    <h2>Review for {{$data->product_name_en}}</h2>
    @foreach($data->reviews as $review)
        @if($review->rating && $review->rating > 0)
            <div class="single-review">
                <div class="review-img">
                    <img src="{{asset('assets/user/images/product-details/client-1.jpg')}}" alt="">
                </div>
                <div class="review-content" style="width: 100%;">
                    <div class="review-top-wrap">
                        <div class="review-name">
                            <h5><span>{{$review->user->name ?? 'Guest'}}</span> - {{date("F d, Y", strtotime($review->updated_at))}}</h5>
                        </div>
                        <div class="review-rating">
                            @for ($i = 0; $i < $review->rating; $i++)
                                <i class="yellow fa fa-star mr-1"></i>
                            @endfor
                            @for ($i = 0; $i < 5-$review->rating; $i++)
                                <i class=" fa fa-star mr-1"></i>
                            @endfor
                        </div>
                    </div>
                    <p>{{$review->comment}}</p>
                </div>
            </div>
        @endif
    @endforeach
</div>

<style>
    .single-review {
        margin: 0 0 20px;
    }
</style>
