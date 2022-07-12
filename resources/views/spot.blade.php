@extends('master')
@section('content')
    <div class="title">
        <h1>スポット一覧</h1>
    </div>
    <h2 class="sub-title">Osaka metro全10ヵ所の<br/>駅構内に登場キャラクターが出現！</h2>
    <div class="container px-3 pb-36 max-w-tab">
        <x-spot-item :map="asset('images/map/f1.png')" title="四つ橋線" intro="西梅田駅 "/>
        <x-spot-item :map="asset('images/map/f2.png')" title="四つ橋線" intro="なんば駅"/>
        <x-spot-item :map="asset('images/map/f3.png')" title="御堂筋線・長堀鶴見緑地線" intro="心斎橋駅"/>
        <x-spot-item :map="asset('images/map/f4.png')" title="長堀鶴見緑地線" intro="ドーム前千代崎駅"/>
        <x-spot-item :map="asset('images/map/f5.png')" title="千日前線" intro="野田阪神駅"/>
        <x-spot-item :map="asset('images/map/f6.png')" title="堺筋線" intro="扇町駅"/>
        <x-spot-item :map="asset('images/map/f7.png')" title="堺筋線 " intro="北浜駅"/>
        <x-spot-item :map="asset('images/map/f8.png')" title="中央線・ニュートラム" intro="コスモスクエア駅"/>
        <x-spot-item :map="asset('images/map/f9.png')" title="長堀鶴見緑地線" intro="森ノ宮駅"/>
        <x-spot-item :map="asset('images/map/f10.png')" title="長堀鶴見緑地線" intro="京橋駅 "/>
        {{--<img src="{{ asset('images/phone.png') }}" class="fixed right-3 top-96"/>--}}
    </div>
@stop
