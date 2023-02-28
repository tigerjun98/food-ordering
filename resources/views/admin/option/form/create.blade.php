<x-admin.component.modal
    :title="$data->type ?? request()->type.' details'"
    :nav="['details', 'description']"
    :submit="route('admin.option.store')"
>

    @slot('description')
        <x-admin.form.textarea
            :data="$data"
            :rows="6"
            :name="'desc_en'"
            :required="false"
        />

        <x-admin.form.textarea
            :data="$data"
            :rows="6"
            :name="'desc_cn'"
            :required="false"
        />
    @endslot

    @slot('details')
        <input type="hidden" name="id" value="{{ $data ? $data->id : new_id() }}" />
        <input type="hidden" name="type" value="{{ $data ? $data->type : request()->type }}" />

            <div class="row">
{{--                <x-admin.form.select--}}
{{--                    :col="'md-12'"--}}
{{--                    :name="'type'"--}}
{{--                    :options="\App\Models\Option::getTypeList()"--}}
{{--                    :value="$data ? $data->type : $type"--}}
{{--                />--}}

{{--                <script type="text/javascript" defer>--}}
{{--                    @if(!$data)--}}
{{--                    let searchParams = new URLSearchParams(window.location.search); // get query string from url--}}
{{--                    searchParams.forEach((value, key) => { // loop query string--}}
{{--                        if(key === 'type'){--}}
{{--                            console.log(value)--}}
{{--                            $('#categoryVal').val(value).trigger('change')--}}
{{--                        }--}}
{{--                    });--}}
{{--                    // console.log(queryString)--}}
{{--                    @endif--}}
{{--                </script>--}}
            </div>

        <div class="row">
            <x-admin.form.text
                :data="$data"
                :col="'md-6'"
                :name="'name_cn'"
            />
            <x-admin.form.text
                :data="$data"
                :col="'md-6'"
                :name="'name_en'"
                :required="false"
                :remark="'Leave blank to convert to Pinyin'"
            />
        </div>


{{--        <div class="row">--}}
{{--            <x-admin.form.select--}}
{{--                :data="$data"--}}
{{--                :col="'md-6'"--}}
{{--                :name="'gender'"--}}
{{--                :options="\App\Models\Admin::getGenderList()"--}}
{{--            />--}}
{{--        </div>--}}

    @endslot
</x-admin.component.modal>
