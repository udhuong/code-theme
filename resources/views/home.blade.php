@extends('master')
@section('content')
    <div class="md:hidden">
        <div class="h-[calc(100vh-45px-100px)] bg-red-500">
            <img src="{{ asset('images/banner.png') }}" class="object-cover w-full h-full mx-auto" />
        </div>
    </div>
    <div class="hidden md:block">
        @include('home_desktop')
    </div>
@stop
