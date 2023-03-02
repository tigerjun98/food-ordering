<div class="action-col">
    <div class="header-icons d-inline-block align-middle">
        <div class="position-relative d-inline-block">
            @foreach($actions as $type => $action)
                <x-admin.component.button
                    :class="isset($action['class']) ? 'action-icon '.$action['class'] : ' action-icon '"
                    :icon="$action['icon'] ?? 'simple-icon-eye'"
                    :tooltip="$action['text'] ?? $type"
                    :redirect="$action['redirect'] ?? ''"
                    :onclick="$action['onclick'] ?? ''"
                >
                    @if(isset($action['modal']))
                        @slot('openModal')
                            { url: '{{ $action['modal'] }}', header: '{{ $modalHeader ?? 'Edit' }}', size: '{{ isset($action['size']) ? $action['size'] : 'lg' }}' }
                        @endslot
                    @endif


                    @slot('body')
                        @if(isset($count))
                            <span class="count">{{ $count }}</span>
                        @endif
                    @endslot
                </x-admin.component.button>
            @endforeach
        </div>
    </div>
</div>

{{--<div class="btn-group" role="group" aria-label="Button group with nested dropdown">--}}
{{--    <button id="btnGroupDrop1" type="button" class="btn-xs btn btn-outline-primary dropdown-toggle"--}}
{{--            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--        <i class="simple-icon-options"></i>--}}
{{--    </button>--}}
{{--    <div class="dropdown-menu dropdown-menu-left" id='demo123' aria-labelledby="btnGroupDrop1">--}}
{{--        @foreach($actions as $type => $action)--}}
{{--            <x-admin.datatable.action-button--}}
{{--                :type="$type"--}}
{{--                :icon='$action["icon"] ?? "folder-gears"'--}}
{{--                :label='$action["label"] ?? null'--}}
{{--                :link='$action["link"] ?? null'--}}
{{--            />--}}
{{--        @endforeach--}}
{{--    </div>--}}
{{--</div>--}}

<script>
    $('.btn-group').click(function(e){
        actionBtnId = $(this).closest('.btn-group').children('.dropdown-menu').attr('id')
        $('#'+actionBtnId).addClass('show')
    })

    $(document).on("click", function(e) {
        let slides = document.getElementsByClassName("dropdown-menu");
        for (let i = 0; i < slides.length; i++) {
            $(slides.item(i)).removeClass("show");
        }
    });
</script>
