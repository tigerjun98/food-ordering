<div class="modal-header pb-0">
    <x-admin.component.modal.header
        :lang="$lang ?? false"
        :title="$title"
        :nav="$nav"
    />
</div>

<div class="modal-body">

    @if(isset($submit))
        <x-admin.form
            :route="route('admin.user.store')"
        >
            @slot('body')
                <div class="tab-content">
                    @foreach($nav as $key => $item)
                        <div class="tab-pane show {{$key == 0 ? 'active' : ''}}" id="{{$item}}" role="tabpanel">{{ ${$item} ?? '' }}</div>
                    @endforeach
                </div>
            @endslot

            @slot('footer')
                <x-admin.component.button
                    :class="'btn-primary float-right'"
                    :lang="'submit'"
                    :type="'submit'"
                />
            @endslot

            @slot('script')
                $('this').closeModal({closeLatestModal: true})
                refreshDataTable()
            @endslot
        </x-admin.form>
    @else
        {{ $body ?? '' }}
    @endif

</div>

@if(isset($footer))
    <div class="modal-footer justify-content-right">
        {{ $footer ?? '' }}
    </div>
@endif



