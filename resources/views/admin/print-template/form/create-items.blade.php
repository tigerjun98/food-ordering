<div class="row mb-2">
    <x-admin.form.text
        :col="'md-6'"
        :name="'name_en'"
        :data="$data"
        :label="'Title (EN)'"
        :class="'reset-print-option'"
    />
    <x-admin.form.text
        :col="'md-6'"
        :name="'name_cn'"
        :data="$data"
        :required="false"
        :label="'Title (CN)'"
        :class="'reset-print-option'"
    />
</div>

<x-admin.form.textarea
    :data="$data"
    :name="'remark'"
    :required="false"
    :class="'reset-print-option'"
/>

<h6 class="mt-4">Print items</h6>
<div class="separator mb-3"></div>
<div class="row">
    @foreach(Lang::get('prints') as $section => $items)
        <div class="col-md-4 mb-4">
            <div class="custom-control custom-checkbox mb-2">
                <input type="checkbox"
                       name="category[{{$section}}]"
                       class="custom-control-input"
                       id="check-{{ $section }}"
                       value="1"
                       onchange="checkedAll('{{ $section }}')"
                >
                <label class="text-capitalize custom-control-label font-weight-bold" for="check-{{ $section }}">{{ $section }}</label>
            </div>
            @foreach($items as $name => $lang)
                <div class="custom-control custom-checkbox mb-1">
                    <input type="checkbox"
                           name="value[{{$section}}][{{$name}}]"
                           class="custom-control-input role-{{ $section }}"
                           value="1"
                           id="check-{{ $section }}-{{ $name }}"
                           onchange="uncheckRole('{{ $section }}')"
                    >
                    <label class="custom-control-label" for="check-{{ $section }}-{{ $name }}">{{ $lang }}</label>
                </div>

            @if(isset($data) && str_contains( $data->value, $section.'-'.$name.',') )
                <script>
                    document.getElementById("check-{{ $section }}-{{ $name }}").checked = true;
                    uncheckRole('{{ $section }}')
                </script>
            @endif
            @endforeach
        </div>
    @endforeach
</div>

<script type="text/javascript">
    function monitorChildCheckbox(section){
        let allChecked = true;
        const refs = document.getElementsByClassName(`role-${section}`);
        Array.prototype.forEach.call(refs, function (el) { // loop classes
            if(!$(el).prop('checked')) allChecked = false
        });

        return allChecked;
    }

    function uncheckRole(section){
        $(`#check-${section}`).prop('checked',
            monitorChildCheckbox(section) ? 'checked' : false
        )
    }

    function checkedAll(section){
        const refs = document.getElementsByClassName(`role-${section}`);
        if (document.getElementById(`check-${section}`).checked) {
            Array.prototype.forEach.call(refs, function (el) { // loop classes
                $(el).prop('checked', 'checked')
            });
        } else{
            Array.prototype.forEach.call(refs, function (el) { // loop classes
                $(el).prop('checked', false)
            });
        }
    }

    function uncheckAll(){
        const refs = document.getElementsByClassName(`custom-control-input`);
        Array.prototype.forEach.call(refs, function (el) { // loop classes
            $(el).prop('checked', false)
        });
    }
</script>

