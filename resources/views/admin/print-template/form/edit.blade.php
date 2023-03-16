<div class="row mb-2">
    <x-admin.form.text
        :col="'md-6'"
        :name="'name_en'"
        :data="$data"
    />
    <x-admin.form.text
        :col="'md-6'"
        :name="'name_cn'"
        :data="$data"
        :required="false"
    />
</div>

<x-admin.form.textarea
    :data="$data"
    :name="'remark'"
    :required="false"
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
                       onchange="checkAll('{{ $section }}')"
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

