@extends('user.layout')

@section('content')
    @include('user.include.layouts.popup')
    {!! \App\Models\Setting::getValue('home') !!}
@endsection
