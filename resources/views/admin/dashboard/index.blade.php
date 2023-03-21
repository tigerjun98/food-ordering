@extends('admin.layout')

@section('title', 'Page Title')

@section('content')

    <div id="main_row" class="row app-row">
        <div class="col-12">
            <h1>Dashboard</h1>
            {{--                <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">--}}
            {{--                    <ol class="breadcrumb pt-0">--}}
            {{--                        <li class="breadcrumb-item">--}}
            {{--                            <a href="#">Home</a>--}}
            {{--                        </li>--}}
            {{--                        <li class="breadcrumb-item">--}}
            {{--                            <a href="#">Library</a>--}}
            {{--                        </li>--}}
            {{--                        <li class="breadcrumb-item active" aria-current="page">Data</li>--}}
            {{--                    </ol>--}}
            {{--                </nav>--}}
            <div class="separator mb-5"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="jumbotron">
                        <p class="lead">Hello, {{ auth()->user()->name_en }}!</p>
                        <p>
                            @foreach (auth()->user()->getRoleNames() as $role)
                                <span class="badge badge-pill badge-outline-secondary mr-1 text-uppercase">{{ \App\Models\Role::where('name', $role)->first()->name_en }}</span>
                            @endforeach
                        </p>
                        <hr class="my-4">


                        @php
                            use App\Models\Queue;
                            $queuePermission = [ 'queue.'.Queue::RECEPTIONIST, 'queue.'.Queue::DOCTOR, 'queue.'.Queue::PHARMACY ]
                        @endphp
                        @if( auth()->user()->hasAnyPermission($queuePermission) )
                            <x-admin.component.card.dashboard.queue />
                        @endif

                        @php
                            $queuePermission = [ 'queue.create' ]
                        @endphp

                        @if( auth()->user()->hasAnyPermission($queuePermission) )
                            <hr class="my-4">
                            <p>
                                New patient coming? Create queue for them now.
                            </p>

                            <x-admin.component.button
                                :class="'btn-lg btn-primary'"
                                :text="trans('button.create')"
                                :onclick="'createQueue()'"
                            />
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')
    function createQueue(){
        $(this).openModal({ url: '{{ route('admin.queue.create') }}' })
    }
@endpush



