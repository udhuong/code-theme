@extends('master')
@section('content')
    <div class="xl:hidden">
        <div class="h-[calc(100vh-45px-100px)] bg-red-500">
            <img src="{{ asset('images/banner.png') }}" class="object-contain w-full h-full mx-auto" />
        </div>
    </div>
    <div class="hidden xl:block">
        @include('home_desktop')
    </div>
@stop
