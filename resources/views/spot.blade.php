@extends('master')
@section('content')
    <div class="title">
        <h1>スポット一覧</h1>
    </div>
    <h2 class="sub-title">Osaka metro全10ヵ所の<br/>駅構内に登場キャラクターが出現！</h2>
    <div class="container px-6 pb-36">
        <x-spot-item title="四つ橋線" intro="西梅田駅 "/>
        <x-spot-item title="四つ橋線" intro="肥後橋駅"/>
        <x-spot-item title="御堂筋線・四つ橋線・中央線" intro="本町駅"/>
        <x-spot-item title="御堂筋線・四つ橋線・千日前線線" intro="なんば駅"/>
        <x-spot-item title="堺筋線・長堀鶴見緑地線" intro="長堀橋駅"/>
        <x-spot-item title="中央線・長堀鶴見緑地線" intro="森ノ宮駅"/>
        <x-spot-item title="堺筋線 " intro="扇町駅"/>
        <x-spot-item title="千日前線" intro="野田阪神駅"/>
        <x-spot-item title="中央線" intro="大阪港駅"/>
        <x-spot-item title="中央線・ニュートラム" intro="クコスモスクエア駅 "/>
        <img src="{{ asset('images/phone.png') }}" class="fixed right-3 top-96"/>
    </div>
@stop
