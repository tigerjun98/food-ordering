@if(isset($data->reviews) && (!$data->reviews->isEmpty()))
    @foreach($data->reviews as $key => $item)

        <div class="row">
            <div class="col-4">
                <a href="#">
                    <p class="font-weight-medium mb-0 ">{{$item->product->{'product_name_'.App::getLocale()} }}</p>
                    <p class="cc text-muted mb-0 text-extra-small">{{ __('common.product_name') }}</p>
                </a>
            </div>
            <div class="col-4">
                <div class="form-group mb-1">
                    <label class="d-block">{{ __('common.rating') }}</label>
                    <select class="rating" data-current-rating="{{$item->rating ?? -1}}"
                            name="rating[{{$item->id}}]"
                            id="rating_{{$item->id}}">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>
            <div class="col-4">
                <label class="d-block mb-1">{{ __('common.status') }}</label>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="status_{{$item->id}}" name="status[{{$item->id}}]" {{$item->status == 1 ? 'checked' : ''}}>
                    <label class="custom-control-label" for="status_{{$item->id}}">{{ __('common.publish') }}</label>
                </div>
            </div>
        </div>
        @component('admin.components.form.textarea',[
                         'label' => 'comment', 'required' => false, 'style' => 'mt-0'
                      ])
            @slot('name')
                comment[{{$item->id}}]
            @endslot
            @slot('value'){{$item->comment}}@endslot
        @endcomponent
        <div class="separator mb-4"></div>




        {{--        @component('admin.components.form.select',[--}}
{{--          'label' => 'rating', 'option'=> [1,2,3,4,5],--}}
{{--        ])--}}
{{--            @slot('name')--}}
{{--                rating[{{$item->id}}]--}}
{{--            @endslot--}}
{{--            @slot('id')rating_{{$item->id}}@endslot--}}
{{--            @slot('value'){{$item->rating}}@endslot--}}
{{--        @endcomponent--}}
    @endforeach
@else

@endif




<script>
    $(".rating").each(function () {
        var current = $(this).data("currentRating");
        var readonly = $(this).data("readonly");
        $(this).barrating({
            theme: "bootstrap-stars",
            initialRating: current,
            readonly: readonly
        });
    });
</script>
