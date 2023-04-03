<div class="col-12">
    <div class="mb-0">
        <h1 class="pr-3 text-capitalize">{{ $title ?? '' }}</h1>
        @if(isset($nav) && $nav)
            <ul class="nav nav-tabs separator-tabs mb-4" role="tablist">
                @foreach($nav as $key => $item)
                    <li class="nav-item">
                        <a class="nav-link {{$key == 0 ? 'active' : ''}}" id="{{$item}}-tab" data-toggle="tab" href="#{{$item}}-tab-content" role="tab" aria-selected="true">{{ __('label.'.$item) }}</a>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>

    <div class="card">
        <div class="card-body">
            @if(isset($submit))
                <x-admin.form
                    :route="$submit"
                    :formOption="$formOption??''"
                    :isModal="false"
                    :class="'form-content'"
                    :reloadAfterSubmit="true"
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
                            :class="'btn-primary'"
                            :lang="'submit'"
                            :type="'submit'"
                        />
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
    </div>
</div>
