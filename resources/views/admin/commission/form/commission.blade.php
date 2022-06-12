@if(isset($data->commission) && count($data->commission) > 0)
    @foreach($data->commission as $key => $item)
        <div class="row commission">
            <div class="col-3 pb-0 mb-0">
                @component('admin.components.form.text',[ 'id' => 'min_'.$key,
                  'label' => 'min_sales', 'required' => false, 'class' => 'min_sales'
                ])
                    @slot('name')
                        min[{{$key}}]
                    @endslot

                        @slot('value')
                            {{$item->min_sales}}
                        @endslot

                    @slot('disabled') true @endslot
                @endcomponent
            </div>
            <div class="col-3 pb-0 mb-0">
                @component('admin.components.form.text',[
                   'label' => 'max_sales', 'required' => false, 'id' => 'max_'.$key, 'class' => 'max_sales'
               ])
                    @slot('name')
                        max[{{$key}}]
                    @endslot
                        @slot('value')
                        {{$item->max_sales}}
                        @endslot

                        @if($key >= 3)
                            @slot('disabled') true @endslot
                            @slot('value') {{$item->min_sales}} & Above @endslot
                        @endif
                @endcomponent
            </div>
            <div class="col-6 pb-0 mb-0">
                @component('admin.components.form.text',[
                  'label' => 'commission_rate_in_percent'
                ])
                    @slot('name')
                        commission[{{$key}}]
                    @endslot
                        @slot('value')
                {{$item->percent}}
                        @endslot
                @endcomponent
            </div>
        </div>
    @endforeach
@else
    @for ($key = 0; $key < 4; $key++)
        <div class="row commission">
            <div class="col-3">
                @component('admin.components.form.text',[ 'id' => 'min_'.$key,
                  'label' => 'min_sales', 'required' => false, 'class' => 'min_sales'
                ])
                    @slot('name')
                        min[{{$key}}]
                    @endslot
                        @if($key == 0) @slot('value') 0 @endslot @endif
                        @slot('disabled') true @endslot
                @endcomponent
            </div>
            <div class="col-3">
                @component('admin.components.form.text',[
                   'label' => 'max_sales', 'required' => false, 'id' => 'max_'.$key, 'class' => 'max_sales'
               ])
                    @slot('name')
                        max[{{$key}}]
                    @endslot
                        @if($key == 3)
                            @slot('disabled') true @endslot
                        @endif

                @endcomponent
            </div>
            <div class="col-6">
                @component('admin.components.form.text',[
                  'label' => 'commission_rate_in_percent'
                ])
                    @slot('name')
                        commission[{{$key}}]
                    @endslot

                @endcomponent
            </div>
        </div>
    @endfor
@endif
<script>
    $('.max_sales').change(function () {
        let key = parseInt($(this).attr('id').split("_")[1])+1;
        let min = parseInt($(this).val()) + 1;
        if(key == 3){
            $('#max_3').val(min +' & Above');
        }
        $('#min_'+key).val(min)
    });
</script>
<style>
    .commission .has-float-label{
        margin-bottom: 1rem !important;
    }
</style>


