{{--<div class="app-alert" id="app-alert"></div>--}}
@php
    $id = new_id();
    $submitBtnLang = isset($submitBtnLang) ? $submitBtnLang : (isset($delete) ? 'confirm_delete' : 'submit');
@endphp
<div class="modal-header pb-0 alert-box">
    <x-admin.component.modal.header
        :lang="$lang ?? false"
        :title="$title"
        :navs="$navs ?? null"
    />
</div>

<div class="modal-body {{ $modalBodyClass ?? '' }}" id="modal-body-{{$id}}">
    @if(isset($submit))
        <x-admin.form
            :route="$submit"
            :formOption="$formOption??''"
        >
            @slot('body')
                @if(isset($navs) && count($navs) > 0)
                    <x-admin.layout.tabs.body
                        :navs="$navs"
                    >
                        @foreach($navs as $nav)
                            @slot($nav)
                                {{ ${$nav} ?? '' }}
                            @endslot
                        @endforeach
                    </x-admin.layout.tabs.body>
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
                        :lang="$submitBtnLang"
                        :type="'submit'"
                        :disabled="!$delete"
                    />
                @elseif(!isset($submitBtn) || ( isset($submitBtn) && $submitBtn === true ))
                    <x-admin.component.button
                        :class="'btn-primary'"
                        :lang="$submitBtnLang"
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
        @if(isset($navs) && count($navs) > 0)
            <x-admin.layout.tabs.body
                :navs="$navs"
            >
                @foreach($navs as $nav)
                    @slot($nav)
                        {{ ${$nav} ?? '' }}
                    @endslot
                @endforeach
            </x-admin.layout.tabs.body>
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



