<div class="card">
    <div class="position-absolute card-top-buttons">
        <button
            onclick="deleteQueue({{ $queue->id }})"
            class="btn btn-header-light icon-button text-danger">
            <i class="simple-icon-trash"></i>
        </button>
    </div>
    <div class="card-body">

        <div class="justify-content-between">
            <div class="">
                <a href="#">
                    <p class="font-weight-medium mb-1">
                        <span class="mr-1 font-weight-semibold">#{{ $queue->sorting }}</span>
                        {{ $queue->patient->full_name }}
                    </p>
                    <p class="text-muted mb-0 text-small">
                        {{ get_time_ago( strtotime($queue->created_at) ) }}
                    </p>
                </a>
                <div class="">
                    @if($queue->doctor)
                        <span class="badge badge-pill badge-outline-secondary mr-1 mt-2">{{ $queue->doctor ? $queue->doctor->full_name : '' }}</span>
                    @endif
{{--                    @if($queue->priority > 0)--}}
{{--                        <span class="badge badge-pill badge-danger mr-1 mt-2">--}}
{{--                            <i class="simple-icon-star"></i>--}}
{{--                            {{ $queue->priority ?? '' }}--}}
{{--                        </span>--}}
{{--                    @endif--}}
                </div>

                <p class="mt-3 mb-0 text-small text-semi-muted">
                    {{ $queue->consultation ? $queue->consultation->symptom : $queue->remark }}
                </p>
            </div>
        </div>
        <div class="mt-2 border-top pt-3 footer">

            @if(request()->role != \App\Models\Queue::PHARMACY)
                <x-admin.component.button
                    :openModal="'{ header: `EDIT`, url: `'.route('admin.queue.edit', $queue->id).'` }'"
                    :lang="'edit'"
                    :class="'btn-outline-primary'"
                />
            @endif

            @if(request()->role == \App\Models\Queue::RECEPTIONIST)
                <x-admin.component.button
                    :onclick="'servePatient('.$queue->id.')'"
                    :lang="'serve'"
                    :class="'btn-primary show-when-first '"
                />
            @endif


            @if(request()->role == \App\Models\Queue::DOCTOR)
                @if( $queue->status == \App\Models\Queue::HOLDING )
                    <x-admin.component.button
                        :redirect="route('admin.consultation.edit', $queue->consultation_id)"
                        :lang="'continue'"
                        :class="'btn-primary show-when-first '"
                    />
                @else
                    <x-admin.component.button
                        :redirect="route('admin.consultation.edit', $queue->user_id)"
                        :lang="'consult'"
                        :class="'btn-primary show-when-first '"
                    />
                @endif
            @endif

            @if(request()->role == \App\Models\Queue::PHARMACY)
                <x-admin.component.button
                    :onclick="'servePatient('.$queue->id.')'"
                    :lang="'completed'"
                    :class="'btn-outline-primary show-when-first '"
                />
                <x-admin.component.button
                    :onclick="'viewMedicine('.$queue->consultation_id.')'"
                    :lang="'medicine'"
                    :class="'btn-primary show-when-first '"
                />
            @endif
        </div>
    </div>
</div>
