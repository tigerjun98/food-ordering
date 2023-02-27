{{--<div class="app-alert" id="app-alert"></div>--}}
@php
    $id = new_id();
@endphp
<div class="modal-header pb-0 alert-box">
    <x-admin.component.modal.header
        :lang="$lang ?? false"
        :title="$title"
        :nav="$nav ?? null"
    />
</div>

<div class="modal-body {{ $modalBodyClass ?? '' }}" id="modal-body-{{$id}}">
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
                    :onclick="'$(this).closeModal({closeLatestModal: true})'"
                />

                @if(isset($delete))
                    <x-admin.component.button
                        :class="'btn-danger'"
                        :lang="'confirm_delete'"
                        :type="'submit'"
                        :disabled="!$delete"
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
                {{ $script ?? '' }}
                refreshDataTable()
            @endslot
        </x-admin.form>
    @else
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
    @endif

</div>

@if(isset($footer))
    <div class="modal-footer justify-content-right">
        {{ $footer ?? '' }}
    </div>
@endif

<script type="module">
    $('#modal-body-{{ $id }}').initialiseScrollbar()
</script>



