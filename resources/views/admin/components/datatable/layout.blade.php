<div class="card" id="hide_table">
    <div class="card-body">
{{--        <table class="data-table data-table-scrollable responsive nowrap"></table>--}}
        <table class="table" id="dataTable">
            <thead>
            <tr>
                @foreach($option['column'] as $item)
                    <th>{{ __('common.'.$item) }}</th>
                @endforeach
            </tr>
            </thead>
            <tbody id="post-data">
            @foreach($data as $key => $d)
                @include($option['data_path'])
            @endforeach
            </tbody>
        </table>

{{--        <table class="data-table responsive nowrap backend-table" id="dataTable">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                @foreach($column as $item)--}}
{{--                    <th>{{$item}}</th>--}}
{{--                @endforeach--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody id="post-data">--}}
{{--                @foreach($data as $key => $d)--}}
{{--                    @include($data_path)--}}
{{--                @endforeach--}}
{{--            </tbody>--}}
{{--        </table>--}}
    </div>
</div>

<div class="ajax-load ds">
    <img class="list-thumbnail small list-tsm x_center" src="{{asset('images/admin/loading.gif')}}">
    <p class="text-center ajax-load-text text-capitalize">{{ __('common.loading_more_data') }}</p>
</div>
<div class="ajax-max ds mt-5">
    <p class="text-center ajax-load-text text-capitalize">{{ __('common.no_more_records_found') }}</p>
</div>

<script defer>

    var page = 1;
    var loading = false;
    // $(window).scroll(function() {
    //     console.log($(window).scrollTop(), $(window).height(), $(document).height());
    //     if($(window).scrollTop() + $(window).height() >= $(document).height()) {
    //         page++;
    //         loadMoreData(page);
    //     }
    // });


    $(document).ready(function(){
        $('.dataTables_scrollBody').on('scroll', function() {
            if($('.dataTables_scrollBody').scrollTop() + $('#updateTable').height() >= $('#dataTable').height()) {
                if(!loading){
                    loading = true;
                    page++;
                    loadMoreData(page);
                }
            }
        });
    });

   function loadMoreData(page){
        if($('.ajax-max').hasClass('ds')){
            let params = new URLSearchParams($('#filterForm').serialize());
            $.ajax({
                url: '{{route(Route::current()->getName())}}?'+params.toString()+'&return=table&page=' + page,
                type: "post",
                beforeSend: function() {
                    $('.ajax-load').removeClass('ds');
                }
            }).done(function(data) {
                if(data.html == " "){
                    $('.ajax-load').addClass('ds');
                    $('.ajax-max').removeClass('ds');
                    return;
                }
                $('.ajax-load').addClass('ds');
                $("#post-data").append(data.html);
                loading = false;
                lazyLoadInstance.update();
            }).fail(function(jqXHR, ajaxOptions, thrownError) {
                $.latestNotif('danger', 'Errors','Server not responding...', null, null, 2000);
            });
        }
    }
    {{$script ?? ''}}
</script>
