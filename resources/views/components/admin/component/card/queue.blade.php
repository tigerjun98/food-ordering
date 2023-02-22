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
                        <span class="badge badge-pill badge-outline-secondary mr-1 mt-2">{{ $queue->doctor->name_en ?? '' }}</span>
                    @endif
                    @if($queue->priority > 0)
                        <span class="badge badge-pill badge-danger mr-1 mt-2">
                            <i class="simple-icon-star"></i>
                            {{ $queue->priority ?? '' }}
                        </span>
                    @endif
                </div>

                <p class="mt-3 mb-0 text-small text-semi-muted">
                    {{ $queue->remark }}
                </p>
            </div>
        </div>
        <div class="mt-2 border-top pt-3 footer">
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
            <x-admin.component.button
                :redirect="route('admin.consultation.edit', $queue->user_id)"
                :lang="'consult'"
                :class="'btn-primary show-when-first '"
            />
        </div>
    </div>
</div>
