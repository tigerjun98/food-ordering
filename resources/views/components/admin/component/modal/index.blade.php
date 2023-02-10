<div class="app-alert" id="app-alert"></div>

<div class="modal-header pb-0 alert-box">
    <x-admin.component.modal.header
        :lang="$lang ?? false"
        :title="$title"
        :nav="$nav ?? null"
    />
</div>

<div class="modal-body">
    @if(isset($submit))
        <x-admin.form
            :route="$submit"
        >
            @slot('body')
                @if(isset($nav) && $nav)
                    <div class="tab-content">
                        @foreach($nav as $key => $item)
                            <div class="tab-pane show {{$key == 0 ? 'active' : ''}}"
                                 id="{{$item}}-tab-content"
                                 role="tabpanel">{{ ${$item} ?? '' }}
                            </div>
                        @endforeach
                    </div>
                @else
                    {{ $body ?? '' }}
                @endif
            @endslot

            @slot('footer')
                <x-admin.component.button
                    :class="'btn-outline-primary'"
                    :lang="'close'"
                    :data-dismiss="'modal'"
                />

                @if(isset($delete))
                    <x-admin.component.button
                        :class="'btn-danger'"
                        :lang="'confirm_delete'"
                        :type="'submit'"
                    />
                @else
                    <x-admin.component.button
                        :class="'btn-primary'"
                        :lang="'submit'"
                        :type="'submit'"
                    />
                @endif

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



