@extends('master')
@section('content')
    <div class="title">
        <h1>賞品応募</h1>
    </div>
    <div class="container px-6 pt-5 pb-36 text-center">
        <span class="inline-flex items-center font-bold text-red-500 text-[38px]"><img src="{{ asset('images/icon-gift.png') }}" class="mr-1"> 参加賞</span>
        <p class="font-bold text-2xl">スタンプ5個で参加賞引き換え！</p>
        <a href="#" class="btn btn-red mt-1 mb-3">交換</a>
        <img src="{{ asset('images/wrap-text.png') }}" class="mx-auto mb-3">
        <div class="text-2xl mb-3">
            <p>■■■■■■■■■</p>
            <p>■■■■■■■</p>
            <p>■■■■■■■■■</p>
            <p>■■■■■■■</p>
            <p>■■■■■■■</p>
            <p>■■■■■■■■■</p>
        </div>
        <span class="inline-flex items-center font-bold text-red-500 text-[38px]"><img src="{{ asset('images/icon-gift.png') }}" class="mr-1"> クリア賞</span>
        <p class="font-bold text-3xl">スタンプ10個で応募可能!!</p>
        <a href="#" class="btn btn-red mt-1 mb-3">応募</a>
    </div>
@stop