<div class="modal fade bd-example-modal-lg" id="modalConfirm{{ $modalID ?? '' }}" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header {{ $modalLarge ?? ''}}">
                <h5 class="modal-title">{{ $confirmTitle ?? 'Confirmation' }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ $confirmDescription ?? 'Confirmation' }}
                <form class="tooltip-right-top" id="formConfirm{{ $modalID ?? '' }}">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    {{ $confirmForm ?? '' }}
{{--                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>--}}
{{--                    <button type="submit" id="buttonConfirm{{ $modalID ?? '' }}" class="btn btn-primary">Confirm</button>--}}
                </form>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary btn-multiple-state white {{ $formSubmitBtn ?? '' }}" id="buttonConfirm{{ $modalID ?? '' }}">

                    <div class="spinner d-inline-block">
                        <div class="bounce1"></div>
                        <div class="bounce2"></div>
                        <div class="bounce3"></div>
                    </div>

                    <span class="icon success" data-toggle="tooltip" data-placement="top"
                          title="Everything went right!">
                                                <i class="simple-icon-check"></i>
                                            </span>
                    <span class="icon fail" data-toggle="tooltip" data-placement="top"
                          title="Something went wrong!">
                                                <i class="simple-icon-exclamation"></i>
                                            </span>
                    <span class="label">Confirm</span>
                </a>
            </div>
        </div>
    </div>
</div>
<script defer>
    var $confirmForm{{ $modalID ?? '' }} = $("#formConfirm{{ $modalID ?? '' }}");
    var $confirmButton{{ $modalID ?? '' }} = $("#buttonConfirm{{ $modalID ?? '' }}").stateButton();
    var $confirmModal{{ $modalID ?? '' }} = $("#modalConfirm{{ $modalID ?? '' }}");

    var confirmURL{{ $modalID ?? '' }} = '{{ $confirmFormURL ?? '' }}';
    function confirm{{ $modalID ?? '' }}(id){
        $('#{{ $modalID ?? "" }}ID').val(id);
        confirmURL{{ $modalID ?? '' }} = confirmURL{{ $modalID ?? '' }}.replace(':id', id);
        {{ $confirmFunction ?? "" }}
    }

    function resetConfirm{{ $modalID ?? '' }}(){
        {{ $confirmResetFunction ?? "" }}
    }

    $confirmButton{{ $modalID ?? '' }}.on("click", function (event) {

        if ($confirmForm{{ $modalID ?? '' }}.valid()) {
            $confirmButton{{ $modalID ?? '' }}.showSpinner();
            $confirmButton{{ $modalID ?? '' }}.addClass("disabled");
            $.ajax({
                url : confirmURL{{ $modalID ?? '' }},
                type: "POST",
                data: $confirmForm{{ $modalID ?? '' }}.serialize(),
                success: function(response) {
                    if(response.success){
                        $confirmForm{{ $modalID ?? '' }}.validate().resetForm();
                        $confirmButton{{ $modalID ?? '' }}.removeClass("disabled");
                        $confirmButton{{ $modalID ?? '' }}.reset();

                        resetConfirm{{ $modalID ?? '' }}();

                        $confirmModal{{ $modalID ?? '' }}.modal('hide');
                        $confirmForm{{ $modalID ?? '' }}.trigger("reset");
                        $.ajaxAlert("top", "right", "success", "Success", "Saved!");
                        $.updateTableFunction();

                        {{ $confirmSuccessFunction ?? "" }}
                        return;
                    }
                    $confirmButton{{ $modalID ?? '' }}.showFail(true);
                    setTimeout(() => {
                        $confirmButton{{ $modalID ?? '' }}.removeClass("disabled");
                        $confirmButton{{ $modalID ?? '' }}.reset();
                    }, 2500);
                    if(response.errors){
                        if($.isArray(response.errors) == true)
                            $.each( response.errors, function( key, value ) {
                                $.ajaxAlert("top", "right", "danger", "Error", value, "target");
                            });
                        else
                            $.ajaxAlert("top", "right", "danger", "Error", response.errors, "target");
                        $.formSubmitFailedFunction{{ $modalID ?? '' }}();
                        return;
                    }
                    $.ajaxAlert("top", "right", "danger", "Error", "Underfined!", "target");
                },
                error: function(response) {
                    if(response.responseJSON.errors != null){
                        $.each( response.responseJSON.errors, function( key, value ) {
                            $.ajaxAlert("top", "right", "danger", response.responseJSON.message, value, "target");
                        });
                    } else{
                        $.ajaxAlert("top", "right", "danger", "Error", response.responseJSON.message, "target");
                    }

                    $confirmButton{{ $modalID ?? '' }}.showFail(true);
                    setTimeout(() => {
                        $confirmButton{{ $modalID ?? '' }}.removeClass("disabled");
                        $confirmButton{{ $modalID ?? '' }}.reset();
                    }, 2500);

                }
            });


        }
    });

    $.validator.setDefaults({
        ignore: [],
        errorElement: "div",
        errorPlacement: function (error, element) {
            if (element.attr("class").indexOf("custom-control") != -1) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });

    {{ $confirmValidator ?? '' }}

    {{--$("#formConfirm{{ $modalID ?? '' }}").validate({--}}
    {{--    submitHandler: function(form) {--}}
    {{--        $("#buttonConfirm{{ $modalID ?? '' }}").attr("disabled", true);--}}
    {{--        $.ajax({--}}
    {{--            url : confirmURL{{ $modalID ?? '' }},--}}
    {{--            type: "POST",--}}
    {{--            data: $(form).serialize(),--}}
    {{--            success: function(response) {--}}
    {{--                if(response.success){--}}
    {{--                    $("#modalConfirm{{ $modalID ?? '' }}").modal('hide');--}}
    {{--                    $.ajaxAlert("top", "right", "success", "Success", "Saved!");--}}
    {{--                    $(form).trigger("reset");--}}
    {{--                    $.updateTableFunction();--}}
    {{--                } else{--}}
    {{--                    showSuccessAlert(response);--}}
    {{--                }--}}
    {{--                $("#buttonConfirm{{ $modalID ?? '' }}").attr("disabled", false);--}}
    {{--            },--}}
    {{--            error: function(response) {--}}
    {{--                showErrorAlert(response);--}}
    {{--                $("#buttonConfirm{{ $modalID ?? '' }}").attr("disabled", false);--}}
    {{--            }--}}
    {{--        });--}}
    {{--    },--}}
    {{--    {{ $formRules ?? '' }}--}}

    {{--});--}}

</script>
