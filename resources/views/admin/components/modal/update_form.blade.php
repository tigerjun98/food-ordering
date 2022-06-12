<div class="top-right-button-container">
    <button type="button" class="{{$formNew ?? ''}} btn btn-primary btn-lg top-right-button mr-1"
            data-toggle="modal"
            data-target="#{{ $modalID ?? 'rightModal' }}"
            onclick="$.isCreateFunction(true)">
        {{$formTitle ?? 'ADD NEW'}}
    </button>

{{--    <div class="modal fade modal-right" id="rightModal" tabindex="-1" role="dialog"--}}
    <div class="modal fade modal-right" id="{{ $modalID ?? 'rightModal' }}" role="dialog"
         aria-labelledby="rightModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{$formTitle ?? 'ADD NEW'}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p> {{ $formDescription ?? '' }}</p>


{{--                    <form class="tooltip-right-top" id="modalForm"  novalidate>--}}
                    <form class="tooltip-right-top" id="{{ $formID ?? 'modalForm' }}"  novalidate>
                        {{ $formLayout ?? '' }}

{{--                        <div class="modal-footer {{ $footerClass ?? '' }}">--}}
{{--                            <button type="button" class="btn btn-outline-primary" data-dismiss="modal" onclick="{{ $resetFunction ?? 'resetForm()' }}">Cancel</button>--}}
{{--                            <button type="submit" id="{{ $submitID ?? 'submitBtn' }}" class="btn btn-primary">Submit</button>--}}
{{--                        </div>--}}

                        {{ $formAction ?? '' }}
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal" onclick="{{ $resetFunction ?? 'resetForm()' }}">Cancel</button>
                    <a class="btn btn-primary btn-multiple-state white" id="{{ $submitID ?? 'submitBtn' }}">
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
                        <span class="label">Done</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var $submitButton = $("#{{ $submitID ?? 'submitBtn' }}").stateButton();
    var $submitForm = $("#{{ $formID ?? 'modalForm' }}");
    var $modalForm = $("#{{ $modalID ?? 'rightModal' }}");

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

    {{--$("#{{ $modalID ?? 'rightModal' }}").on('shown.bs.modal', function (e) {--}}
        {{ $formValidator ?? '' }}
    // })

    $submitButton.on("click", function (event) {

        if ($submitForm.valid()) {
            $submitButton.showSpinner();
            $submitButton.addClass("disabled");
            $.ajax({
                url: submitFormUrl,
                type: "POST",
                data: $submitForm.serialize(),
                success: function(response) {
                    if(response.success){
                        $.formSubmitSuccessFunction(response);
                        return;
                    }
                    $submitButton.showFail(true);
                    setTimeout(() => {
                        $submitButton.removeClass("disabled");
                        $submitButton.reset();
                    }, 2500);
                    if(response.errors){
                        if($.isArray(response.errors) == true)
                            $.each( response.errors, function( key, value ) {
                                $.ajaxAlert("top", "right", "danger", "Error", value, "target");
                            });
                        else
                            $.ajaxAlert("top", "right", "danger", "Error", response.errors, "target");
                        $.formSubmitFailedFunction();
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

                    $submitButton.showFail(true);
                    setTimeout(() => {
                        $submitButton.removeClass("disabled");
                        $submitButton.reset();
                    }, 2500);

                }
            });


        }
    });

</script>
