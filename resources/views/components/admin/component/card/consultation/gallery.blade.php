<div class="row gallery gallery-page mb-5">
    @forelse($attachments as $attachment)
        <div class="col-6 col-lg-2 col-md-4">
            <a href="{{ $attachment->url }}" target="_blank">
                <img class="img-fluid border-radius" src="{{ $attachment->url }}" />
            </a>
        </div>
    @empty
        <x-admin.component.status-bar
            :class="'col-12 pl-4'"
            :type="'info'"
            :message="'No attachments found!'"
        />
    @endforelse
</div>
