@foreach($prescriptions as $prescription)
    <div class="mb-4 hover-box">
        <div class="row mb-2">
            <x-admin.layout.info
                :col="'md-12'"
                :value="$prescription->category_explain"
                :label="trans('label.prescription_category')"
            />
        </div>


        @if( in_array($prescription->category, array_keys(\App\Models\Medicine::getCategoryList())) && $prescription->combinations )
            <div class="row mb-2">
                <x-admin.layout.info
                    :col="'md-12'"
                    :label="trans('label.medicine')"
                >
                    @slot('value')
                        @foreach($prescription->combinations as $combination)
                            <div class="mb-1">
                                <a class="d-flex flex-row justify-content-between">
                                    <p class="font-weight-medium mb-0">{{ $combination->medicine->full_name }}</p>
                                    @if($combination->medicine)
                                        <div class="comment-likes">
                                      <span class="post-icon">
                                         {{ $combination->quantity }} {{ $prescription->metric_explain }}
                                      </span>
                                        </div>
                                    @endif
                                </a>
                            </div>
                        @endforeach
                        <div class="mt-2 mb-1 pt-2 border-top">
                            <a href="#" class="d-flex flex-row justify-content-between font-weight-bold">
                                <p class="mb-0">Total</p>
                                <div class="comment-likes">
                                      <span class="post-icon">
                                         {{ $prescription->combination_amount }} {{ $prescription->metric_explain }}
                                      </span>
                                </div>
                            </a>
                        </div>
                    @endslot
                </x-admin.layout.info>
            </div>
        @else
            <div class="row mb-2">
                <x-admin.layout.info
                    :col="'md-12'"
                    :data="$prescription"
                    :name="'remark'"
                />
            </div>
        @endif


        @if( in_array($prescription->category, array_keys(\App\Models\Medicine::getCategoryList())) && $prescription->combinations )
            <div class="row mb-2">
                <x-admin.layout.info
                    :col="'md-12'"
                    :label="trans('common.instruction')"
                >
                    @slot('value')
                        <div class="mb-1">
                            <a class="d-flex flex-row justify-content-between">
                                <p class="font-weight-medium mb-0">{{ trans('label.time_per_day') }}</p>
                                <div class="comment-likes">
                              <span class="post-icon">
                                 {{ $prescription->time_per_day }} {{ trans('label.time') }}
                              </span>
                                </div>
                            </a>
                        </div>
                        <div class="mb-1">
                            <a class="d-flex flex-row justify-content-between">
                                <p class="font-weight-medium mb-0">{{ trans('label.dose_per_time') }}</p>
                                <div class="comment-likes">
                              <span class="post-icon">
                                 {{ $prescription->dose_per_time }} {{ trans('label.time') }}
                              </span>
                                </div>
                            </a>
                        </div>
                        <div class="mt-2 mb-1 pt-2 border-top">
                            <a href="#" class="d-flex flex-row justify-content-between font-weight-bold">
                                <p class="mb-0">{{ trans('label.daily_dose') }}</p>
                                <div class="comment-likes">
                              <span class="post-icon">
                                  {{ $prescription->dose_daily }} {{ trans('label.time') }}
                              </span>
                                </div>
                            </a>
                        </div>
                    @endslot
                </x-admin.layout.info>
            </div>

            <div class="row mb-2">
                <x-admin.layout.info
                    :col="'md-12'"
                    :value="$prescription->direction_explain"
                    :label="trans('label.direction')"
                />
            </div>

        @endif

    </div>
@endforeach

