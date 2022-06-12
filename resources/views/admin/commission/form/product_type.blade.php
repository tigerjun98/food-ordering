<div class="form-group" id="allVariant">

    <div class="mt-4 mb-3 separator"></div>

    @if(isset($data->commissions))
        @foreach($data->commissions as $key => $item)
            @include('admin.commission.form.add_commission')
        @endforeach
    @endif
<?php $item = ''?>
</div>

<div class="separator mt-2 mb-4"></div>
<div class="text-center">
    <button type="button" class="btn btn-outline-primary btn-sm mb-2" onclick="addNew()">
        <i class="simple-icon-plus btn-group-icon"></i>
        {{ __('common.add_new_stage') }}
    </button>
</div>

<script>

    var id = 0;
    @if(isset($data->commissions))
    id={{count($data->commissions)}};
    @endif
    function removeVariant(param){
        if(param == 0){
            $("#app-alert").showAlert({
                status : 'danger', message: 'must at least one', delay: '1500'
            });
        } else{
            $('#'+param).remove()
            id = id - 1
        }

    }

    function addNew(){
        $("#allVariant").append(`@include('admin.commission.form.add_commission')`);
        if(id > 0){
            $('#min-'+id).val(parseInt($('#max-'+(id-1)).val())+1);
            $('#min-'+id).attr('disabled', true);
        }
        id = id + 1
        console.log(id)
    }

    function maxChange(val){
        let count = val.id
        let next = parseInt(count.split("-")[1])+1;
        $('#min-'+next).val(parseInt(val.value)+1)
    }
</script>
