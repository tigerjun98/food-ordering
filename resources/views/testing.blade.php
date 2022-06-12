<script>
    $(document).ready(function(){
        console.log('do');
    });

    $("#id").updateOption({
        id: '123',
    });

    $("#app-alert").showAlert({
        status : 'success',
        response: null,
        message: 'Saved', // can be array
        delay: 6000 // < 1000 fixed
    });

    try {
        let response = await $("#cart").sendRequest({
            data: {
                type: 'addCart',
                ref: activeVariant,
            },
            loading:{
                fullScreen: true,
            },
        });

        $('#cart').hide().html(response.html).fadeIn();
    } catch(err) {
        console.log(err, 'user.include.layouts.cart');
    }
</script>

<?php

// array_push
$arr = ['user_id' => $userID];
$arr['quantity'] = $qty;

Request::segment(1) == 'admin'
?>


