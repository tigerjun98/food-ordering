<h5 class="mb-3">{{ $title ?? '' }}</h5>
<div class="row">
    <div class="col-md-12 mb-4 pl-0 pr-0">
        <div class="slick-container">
            <?php $sliderID = abs( crc32( uniqid() ) ) ?>
            <div class="slick slide_box" id="{{ $sliderID }}">
                {{ $card ?? '' }}
            </div>
            <div class="slick-navs-dots slider-nav text-center">
                <a href="#" class="left-arrow">
                    <i class="simple-icon-arrow-left"></i>
                </a>
                <div class="slider-dot-container"></div>
                <a href="#" class="right-arrow">
                    <i class="simple-icon-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<script defer>
    {{ $script ?? '' }}

    function removeZero(){
        $('#{{ $sliderID }}').slick('slickFilter', function(index, elem) {
            $('#{{ $sliderID }}').slick('slickFilter', function(index, elem) {
                return $(elem).find('.zeroHide').text() > 1;
            });
            $('.slider-dot-container').empty();
        });
        $('#{{ $sliderID }}').slick('slickGoTo', 0);
    }


    $(document).ready(function(){
        $("#{{ $sliderID }}").not('.slick-initialized').slick({
            // autoplay: true,
            autoplaySpeed: 2000,
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            appendDots: $("#{{ $sliderID }}")
                .parents(".slick-container")
                .find(".slider-dot-container"),
            prevArrow: $("#{{ $sliderID }}")
                .parents(".slick-container")
                .find(".slider-nav .left-arrow"),
            nextArrow: $("#{{ $sliderID }}")
                .parents(".slick-container")
                .find(".slider-nav .right-arrow"),
            customPaging: function (slider, i) {
                return '<button role="button" class="slick-dot"><span></span></button>';
            },
            responsive: [
                {
                    breakpoint: 2000,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 5,

                    }
                },
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4,
                    }
                },
                {
                    breakpoint: 1250,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        adaptiveHeight: true
                    }
                },
                {
                    breakpoint: 500,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 400,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }
            ]
        });
    });

</script>
