<script>
    $.showLoading = function showLoading(id){
        $('body').addClass('show-spinner');
        $('#app').css('opacity','0.8');
        if(id){
            $('#'+id).prop('disabled',true);
            $('#'+id).addClass('disabled');
        }
    }

    $.hideLoading = function hideLoading(id){
        $('body').removeClass('show-spinner');
        $('#app').css('opacity','1');
        if(id){
            $('#'+id).prop('disabled',false);
            $('#'+id).removeClass('disabled');
        }
    }
</script>
