<div class="modal-header modal-lg pb-0">
    <div class="mb-2">
        <h1 class="text-capitalize">{{__('common.'.$title) ?? __('common.update') }}</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <ul class="nav nav-tabs separator-tabs mb-0" role="tablist">
        @foreach($nav as $key => $item)
            <li class="nav-item">
                <a class="nav-link {{$key == 0 ? 'active' : ''}}" id="{{$item}}-tab" data-toggle="tab" href="#{{$item}}" role="tab" aria-selected="true">{{ __('common.'.$item) }}</a>
            </li>
        @endforeach
    </ul>
</div>

<form id="SubmitForm">
    <div class="modal-body add_modal">
        @csrf
        <input type="hidden" value="{{$id}}" name="id">
        <div class="tab-content">
            @foreach($nav as $key => $item)
                <div class="tab-pane show {{$key == 0 ? 'active' : ''}}" id="{{$item}}" role="tabpanel">{{ ${$item} ?? '' }}</div>
            @endforeach
        </div>
    </div>
    <div class="modal-footer justify-content-center">
        <button type="submit" id="submitButton" class="btn btn-primary text-capitalize">{{ __('common.save') }}</button>
        <button type="button" class="btn btn-outline-primary closeModal text-capitalize" data-dismiss="modal">{{ __('common.close') }}</button>
    </div>
</form>

<script>
    $(".select2-single, .select2-multiple").select2({
        theme: "bootstrap",
        dir: "ltr",
        placeholder: "",
        maximumSelectionSize: 6,
        containerCssClass: ":all:"
    });

    $('#SubmitForm').on('submit',async function(e){
        e.preventDefault();
        try {
            let response = await $(this).sendRequest({
                data: $(this).serialize(),
                url: "{{$submitLink ?? ''}}",
                method: 'PUT',
                alertSuccess: true,
                modalSuccess: true,
                alertRedirect: false,
            });
            $.updateTableFunction();

        } catch(err) {
            console.log(err);
        }
    });

    {{--$('#SubmitForm').on('submit',function(e){--}}
    {{--    e.preventDefault();--}}
    {{--    $.showLoading('submitButton');--}}
    {{--    $.ajax({--}}
    {{--        url: "{{$submitLink ?? ''}}",--}}
    {{--        type:"PUT",--}}
    {{--        data: $(this).serialize(),--}}
    {{--        success:function(response){--}}
    {{--            $.hideLoading('submitButton');--}}
    {{--            $("#publicModal").modal('hide');--}}
    {{--            $.updateTableFunction();--}}
    {{--            showAlert(response, 'success');--}}
    {{--        },--}}
    {{--        error: function(response) {--}}
    {{--            $.hideLoading('submitButton');--}}
    {{--            showAlert(response);--}}
    {{--        },--}}
    {{--    });--}}
    {{--});--}}



    {{--(function ( $ ) {--}}
    {{--    $.fn.sendRequest = function( options ) {--}}
    {{--        // default options.--}}
    {{--        var settings = $.extend({--}}
    {{--            url: '{{ route('admin.selectOption') }}',--}}
    {{--            id : null,--}}
    {{--            status : 'success',--}}
    {{--            val: null,--}}
    {{--            data: {--}}
    {{--                'type': options.id,--}}
    {{--                'ref': $(this).val()--}}
    {{--            }--}}
    {{--        }, options );--}}

    {{--        $.showLoading()--}}
    {{--        var status, res;--}}

    {{--        $.ajax({--}}
    {{--            url: settings.url,--}}
    {{--            type: 'POST',--}}
    {{--            data: settings.data,--}}
    {{--            success: function( response ) {--}}
    {{--                $.hideLoading();--}}
    {{--                return ({--}}
    {{--                    'status' : 'success',--}}
    {{--                    response,--}}
    {{--                });--}}
    {{--            },--}}
    {{--            error: function(response) {--}}
    {{--                $.hideLoading();--}}
    {{--                status = 'error';--}}
    {{--                showAlert(response)--}}
    {{--                res = response;--}}
    {{--                return ({--}}
    {{--                    'status' : 'error',--}}
    {{--                });--}}
    {{--            }--}}
    {{--        });--}}
    {{--    };--}}
    {{--}( jQuery ));--}}

    {{--(function ( $ ) {--}}
    {{--    $.fn.updateOption = function( options ) {--}}
    {{--        // default options.--}}
    {{--        var settings = $.extend({--}}
    {{--            url: '{{ route('admin.selectOption') }}',--}}
    {{--            id : null,--}}
    {{--            val: null,--}}
    {{--            data: {--}}
    {{--                'type': options.id,--}}
    {{--                'ref': $(this).val()--}}
    {{--            }--}}
    {{--        }, options );--}}

    {{--        $.showLoading()--}}
    {{--        $.ajax({--}}
    {{--            url: settings.url,--}}
    {{--            type: 'POST',--}}
    {{--            data: settings.data,--}}
    {{--            success: function( result ) {--}}
    {{--                $.hideLoading();--}}
    {{--                $("#"+settings.id+" option").remove();--}}
    {{--                $("#"+settings.id).append($('<option>', {value:""}));--}}
    {{--                $.each( result, function(k, v) {--}}
    {{--                    $("#"+settings.id).append($('<option>', {value:k, text:v}));--}}
    {{--                });--}}
    {{--                if(settings.val){--}}
    {{--                    console.log(settings.val)--}}
    {{--                    $("#"+settings.id).val(settings.val).trigger('change');--}}
    {{--                }--}}
    {{--            },--}}
    {{--            error: function(res) {--}}
    {{--                $.hideLoading();--}}
    {{--                showAlert(res)--}}
    {{--            }--}}
    {{--        });--}}

    {{--        return this.css({--}}
    {{--            color: settings.color,--}}
    {{--            backgroundColor: settings.backgroundColor--}}
    {{--        });--}}
    {{--    };--}}
    {{--}( jQuery ));--}}
</script>
<style>
    label{
        text-transform: capitalize;
    }
    .select2-container .select2-selection--single, .select2-container--bootstrap .select2-results__option {
        text-transform: capitalize;
    }
    .has-float-label label, .has-float-label > span:last-of-type{
        text-transform: capitalize;
    }
    .has-float-label{
        margin-bottom: 2rem;
        margin-top: 1rem;
    }
    .modal .modal-header{
        display: block;
    }
    .nav-tabs.separator-tabs {
        border-bottom: 1px solid #fff;
    }
    .nav-tabs.separator-tabs .nav-link.active::before, .nav-tabs.separator-tabs .nav-item.show .nav-link::before {
        height: 3px;
        bottom: -2px;
    }
    .nav-tabs .nav-item {
        text-transform: uppercase;
    }

</style>
