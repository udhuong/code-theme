@extends('master')
@section('heading')
    <div class="title">
        <h1>参加賞 </h1>
    </div>
@endsection
@section('content')
    <div class="container px-3 pt-5 pb-36 text-center max-w-tab">
        <h2 class="font-bold text-[48px] leading-[1.1em] mb-5">参加賞を<br/>交換しますか？ </h2>
        <a href="#" class="btn btn-red mt-1 mb-3">交換</a>
        <img src="{{ asset('images/icon-notice.png') }}" class="mx-auto mb-3">
        <p class="font-bold text-2xl">必ずスタッフに見せてから<br/>上記ボタンを押してください。</p>
    </div>
@stop
