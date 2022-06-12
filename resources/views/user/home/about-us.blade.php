@extends('user.layout')

@section('content')
    {!! \App\Models\Setting::getValue('about_us') !!}
@endsection
