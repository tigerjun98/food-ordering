<div id="paginateContent"></div>
<div class="ajax-load ds">
    <img class="list-thumbnail small list-tsm x_center" src="{{asset('images/admin/loading.gif')}}">
    <p class="text-center ajax-load-text text-capitalize">{{ __('common.loading_more_data') }}</p>
</div>
<div class="ajax-max ds mt-5">
    <p class="text-center ajax-load-text text-capitalize">{{ __('common.no_more_records_found') }}</p>
</div>
<form id="paginateForm" class="ds">{{$filter ?? ''}}</form>

<script defer>
    var page = 1;
    var loading = false;
    $(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() >= $(document).height()) {
            page++;
            loadMoreData(page);
        }
    });

    async function loadMoreData(page){
        if($('.ajax-max').hasClass('ds')){

            let params = new URLSearchParams($('#paginateForm').serialize());
            let url = '{{route(Route::currentRouteName().'indexDt')}}?'+params.toString()+'&page=' + page;
            try {
                let response = await $('#paginateContent').sendRequest({
                    method: 'GET',
                    url
                });

                if(!response.html){
                    $('.ajax-load').addClass('ds');
                    $('.ajax-max').removeClass('ds');
                    return;
                }
                $('.ajax-load').addClass('ds');

                if(page == 1){
                    $('#paginateContent').hide().html(response.html).fadeIn();
                } else{
                    $("#paginateContent").append(response.html);
                }

                loading = false;
                lazyLoadInstance.update();

            } catch(err) {
                console.log(err);
            }
        }
    }

    $(document).ready(function(){
        loadMoreData(1)
    });
</script>
