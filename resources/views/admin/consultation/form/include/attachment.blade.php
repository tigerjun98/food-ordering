<div class="card mb-3">
    <div class="card-body">
        <h3 class="mb-3">{{ trans('common.attachments') }}</h3>
        <input type="hidden" class="dropzone-sending-data" name="type" value="{{ $patient->id }}">
        <x-admin.form.dropzone
            :id="$consultation ? $consultation->id : null"
            :submitUrl="route('admin.attachment.store')"
            :deleteUrl="route('admin.attachment.destroy', ':id')"
            :sendingData="['type' => 'consultations']"
        >
            @if($consultation)
                @slot('data')
                    @foreach($consultation->attachments as $key => $attachment)
                        <x-admin.form.dropzone-preview
                            :id="$consultation->id"
                            :refId="$attachment->id"
                            :src="$attachment->url"
                        />
                    @endforeach
                @endslot
            @endif
        </x-admin.form.dropzone>
    </div>
</div>
