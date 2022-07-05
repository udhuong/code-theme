@extends('master')
@section('content')
    <div class="title">
        <h1>スタンプ一覧</h1>
    </div>
    <h2 class="sub-title">スタンプ5個で参加賞ゲット!!<br/>10個集めるとクリア賞に応募可能!</h2>
    <div class="container px-6 pb-28">
        <div class="relative text-center mt-[50px]">
            <a href="#" class="stamp-item active">アイナビ</a>
            <a href="#" class="stamp-item active special">野田阪神駅</a>
            <a href="#" class="stamp-item">長堀橋駅</a>
            <a href="#" class="stamp-item">肥後橋駅</a>
            <a href="#" class="stamp-item special">大阪港駅</a>
            <a href="#" class="stamp-item">森ノ宮駅</a>
            <a href="#" class="stamp-item">本町駅</a>
            <a href="#" class="stamp-item special"><span><span class="block">コスモ</span>スクエア駅</span></a>
            <a href="#" class="stamp-item">扇町駅</a>
            <a href="#" class="stamp-item !h-0"></a>
            <a href="#" class="stamp-item special">なんば駅</a>
            <a href="#" class="stamp-item !h-0"></a>
        </div>
        <div class="p-3 border border-red-500 text-red-500 font-bold text-3xl relative -mt-[50px] mb-5">
            スタンプラリーへの参加は<br/>
            1日乗車券の<br/>
            ご購入が<br/>
            おすすめ!!<br/>
            <img src="{{ asset('images/stamp-page.png') }}" class="absolute right-3 bottom-3">
        </div>
    </div>
@stop
