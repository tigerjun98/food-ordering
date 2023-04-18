@php
    use App\Models\Queue;
@endphp
<li ondblclick="dbClickQueueBox(this)"
    class="mb-2 queue-list" data-id="{{ $queue->id }}" id="queueBox-{{ $queue->id }}">
    <div class="card">
        <div class="position-absolute card-top-buttons">
            @if($queue->role == Queue::RECEPTIONIST)
                <button
                    onclick="deleteQueue({{ $queue->id }})"
                    class="btn btn-header-light icon-button text-danger">
                    <i class="simple-icon-trash"></i>
                </button>
            @endif
        </div>
        <div class="card-body">
            <div class="justify-content-between">
                <div class="">
                    <div>
                        <a href="{{ $queue->consultation_id ? 'javascript:viewMedicine('.$queue->consultation_id.')' : 'javascript:viewMedicine('.$queue->consultation_id.')'}}"
                            class="font-weight-medium mb-1" >
                            <span class="mr-1 font-weight-semibold">#{{ $queue->sorting }}</span>
                            {{ $queue->patient->full_name ?? '-' }}
                        </a>
                        <p class="text-muted mb-0 text-small">
                            {{ get_time_ago( strtotime($queue->created_at) ) }}
                        </p>
                    </div>
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

                    <p
                        data-toggle="tooltip"
                        data-placement="left"
                        title="{{ trans('label.remark') }}"
                        data-original-title="{{ trans('label.remark') }}"
                        class="mt-3 mb-0 text-small text-semi-muted"
                    >
                        {{ $queue->remark }}
                    </p>

                    @if($queue->consultation && $queue->consultation->internal_remark)
                        <p
                            data-toggle="tooltip"
                            data-placement="left"
                            title="{{ trans('label.internal_remark') }}"
                            data-original-title="{{ trans('label.internal_remark') }}"
                            class="mt-2 mb-0 text-small text-danger font-weight-bold"
                        >
                            {{ $queue->consultation->internal_remark }}
                        </p>
                    @endif

                </div>
            </div>
            <div class="mt-2 border-top pt-3 footer">

                @if($queue->role == Queue::RECEPTIONIST)
                    <x-admin.component.button
                        :openModal="'{ header: `EDIT`, url: `'.route('admin.queue.edit', $queue->id).'` }'"
                        :lang="'edit'"
                        :class="'btn-outline-primary'"
                    />
                    <x-admin.component.button
                        :onclick="'servePatient('.$queue->id.')'"
                        :lang="'serve'"
                        :class="'btn-primary show-when-first '"
                    />
                @endif

                @if($queue->role == Queue::DOCTOR)
                    <x-admin.component.button
                        :onclick="'revertPatient('.$queue->id.')'"
                        :lang="'revert'"
                        :class="'btn-outline-primary show-when-first '"
                    />
                    <x-admin.component.button
                        :redirect="route('admin.consultation.edit', $queue->consultation ?? $queue->user_id)"
                        :lang="$queue->status == \App\Models\Queue::SERVING ? 'consult' : 'continue'"
                        :class="'btn-primary show-when-first '"
                    />
                @endif

                @if($queue->role == Queue::PHARMACY)
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

                @if($queue->role == Queue::CASHIER)
                    <x-admin.component.button
                        :onclick="'servePatient('.$queue->id.')'"
                        :lang="'completed'"
                        :class="'btn-outline-primary show-when-first '"
                    />
                    <x-admin.component.button
                        :onclick="'sendToPosSystem('.$queue->id.')'"
                        :text="trans('button.send')"
                        :class="'btn-primary show-when-first '"
                    />
                @endif

            </div>
        </div>
    </div>
</li>


