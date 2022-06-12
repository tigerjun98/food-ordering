<script>
    function rating(star, id){
        var slides = document.getElementsByClassName("star-"+id);
        for (var i = 0; i < slides.length; i++) {
            $('#'+slides.item(i).id).removeClass('active')
        }
        $('#rate-'+id+'-'+star).addClass('active')
        $('#rating_'+id).val(star)
    }
</script>

@component('user.components.form.index', ['route' => route('order.submitReview')])
    @slot('body')
        @if(isset($data->reviews) && (!$data->reviews->isEmpty()))
            @foreach($data->reviews as $key => $item)
                <div class="billing-info-wrap mr-100">
                    <h3>{{$item->product->product_name_en}}</h3>
                    <div class="ratting-form-wrapper">
                        <span>Rating</span>
                        <input type="hidden" name="rating[{{$item->id}}]" id="rating_{{$item->id}}" value="{{$item->rating}}">
                        <div class="ratting-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="star-box-wrap">
                                        <div class="single-ratting-star star-{{$item->id}}" id="rate-{{$item->id}}-1" onclick="rating(1,'{{$item->id}}')">
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="single-ratting-star star-{{$item->id}}" id="rate-{{$item->id}}-2" onclick="rating(2,'{{$item->id}}')">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="single-ratting-star star-{{$item->id}}" id="rate-{{$item->id}}-3" onclick="rating(3,'{{$item->id}}')">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="single-ratting-star star-{{$item->id}}" id="rate-{{$item->id}}-4" onclick="rating(4,'{{$item->id}}')">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="single-ratting-star star-{{$item->id}}" id="rate-{{$item->id}}-5" onclick="rating(5,'{{$item->id}}')">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                </div>
                                @if($item->rating > 0)
                                    <script>
                                        rating({{$item->rating}}, '{{$item->id}}')
                                    </script>
                                @endif
                                <div class="col-md-12">
                                    <div class="rating-form-style mb-20">
                                        <label>Your review <span>*</span></label>
                                        <textarea name="comment[{{$item->id}}]">{{$item->comment}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
        <button type="submit" id="checkoutBtn" class="btn-primary btn">Submit</button>
    @endslot
@endcomponent


<style>


    .btn{
        width: 200px;
        display: block;
        margin: 10px 0 0;
        text-align: center;
        line-height: 20px;
        padding: 20px 20px 21px;
        text-transform: capitalize;
        font-size: 14px;
    }
    .ratting-form-wrapper .ratting-form {
        margin: 5px 0 0;
    }
    .ratting-form-wrapper .ratting-form .star-box-wrap .single-ratting-star.active i {
        color: #f5b223;
    }
</style>
