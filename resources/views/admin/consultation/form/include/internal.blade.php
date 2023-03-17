<div class="card mb-3">
    <div class="card-body">
        <h3 class="mb-5">{{ trans('common.internal_remark') }}</h3>

        <div class="row">
            <x-admin.form.text
                :type="'date'"
                :col="'md-12'"
                :name="'consulted_at'"
                :value="$consultation->consulted_at ?? \Carbon\Carbon::now()"
            />
        </div>

        <x-admin.form.textarea
            :data="$consultation"
            :name="'internal_remark'"
            :rows="5"
            :required="false"
        />


    </div>
</div>
