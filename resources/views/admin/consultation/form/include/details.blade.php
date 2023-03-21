<div class="card mb-3">
    <div class="card-body">
        <h3 class="mb-5">{{ trans('common.consultation') }}</h3>
        <div class="row">
            <x-admin.form.select
                :selectJs="false"
                :ajax="route('admin.consultation.get-opt', 'specialist')"
                :multiple="'multiple'"
                :col="'md-12'"
                :name="'specialists[]'"
                :lang="'specialists'"
                :required="false"
            >
                @slot('customOption')
                    @if($consultation)
                        @foreach($consultation->specialists_explain as $key => $item)
                            <option value="{{ $key }}" selected="selected"> {{ $item }}</option>
                        @endforeach
                    @endif
                @endslot

            </x-admin.form.select>
        </div>

        <div class="row">
            <x-admin.form.select
                :selectJs="false"
                :ajax="route('admin.consultation.get-opt', 'syndrome')"
                :multiple="'multiple'"
                :data="$consultation"
                :col="'md-12'"
                :name="'syndromes[]'"
                :lang="'syndromes'"
                :required="false"
            >
                @if($consultation)
                    @slot('customOption')
                        @foreach($consultation->syndromes_explain as $key => $item)
                            <option value="{{ $key }}" selected="selected"> {{ $item }}</option>
                        @endforeach
                    @endslot
                @endif
            </x-admin.form.select>
        </div>

        <div class="row">
            <x-admin.form.select
                :selectJs="false"
                :ajax="route('admin.consultation.get-opt', 'diagnose')"
                :multiple="'multiple'"
                :data="$consultation"
                :col="'md-12'"
                :name="'diagnoses[]'"
                :lang="'diagnoses'"
                :required="false"
            >
                @if($consultation)
                    @slot('customOption')
                        @foreach($consultation->diagnoses_explain as $key => $item)
                            <option value="{{ $key }}" selected="selected"> {{ $item }}</option>
                        @endforeach
                    @endslot
                @endif
            </x-admin.form.select>
        </div>

        <x-admin.form.textarea
            :data="$consultation"
            :name="'symptom'"
            :rows="10"
        />

        <x-admin.form.textarea
            :data="$consultation"
            :name="'advise'"
            :rows="5"
            :lang="'doctor_advise'"
            :required="false"
        />
    </div>
</div>
