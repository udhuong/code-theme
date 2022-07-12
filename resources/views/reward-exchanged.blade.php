@extends('master')
@section('heading')
    <div class="title">
        <h1>参加賞 </h1>
    </div>
@endsection
@section('content')
    <div class="container px-3 pt-5 pb-36 text-center max-w-tab">
        <h2 class="font-bold text-[48px] leading-[1.1em] mb-10">参加賞は<br/>交換済です。</h2>
        <img src="{{ asset('images/check.png') }}" class="mx-auto mb-3">
    </div>
@stop
