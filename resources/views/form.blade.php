@extends('master')
@section('content')
    <div class="title">
        <h1>クリア賞</h1>
    </div>
    <div class="container px-3 pt-5 pb-36 max-w-tab">
        <h2 class="text-[22px] font-bold mb-5">下記全てを記入してご応募ください。</h2>
        <form method="post" action="">
            <div class="border-b-2 pb-3 mb-3 border-dashed">
                <x-input-text label="賞品をお選びください。" name=""/>
                <x-input-text label="お名前" name=""/>
                <x-input-text label="フリガナ" name=""/>
                <label class="block mb-3">
                    <span class="text-gray-700 font-bold text-lg flex items-center"><img src="{{ asset('images/arrow-down.png') }}" class="mr-1"/>郵便番号</span>
                    <div class="flex items-center">
                        <input type="text" name="" class="mt-1 block w-full" placeholder="">
                        <span class="whitespace-nowrap pl-3 pr-5">住所検索</span>
                    </div>
                </label>
                <label class="block mb-3">
                    <span class="text-gray-700 font-bold text-lg flex items-center"><img src="{{ asset('images/arrow-down.png') }}" class="mr-1"/>住所</span>
                    <input type="text" name="" class="mt-1 block w-full" placeholder="">
                    <input type="text" name="" class="mt-1 block w-full" placeholder="">
                </label>
                <x-input-text label="電話番号" name=""/>
                <x-input-text label="年齢" name=""/>
                <x-input-text label="性別" name=""/>
                <x-input-text label="参加方法" name=""/>
            </div>
            <div>
                <h2 class="text-[22px] font-bold mt-5">アンケート</h2>
                @php
                    $q1 = ['Osaka Metro／大阪シティバス', 'JR／その他私鉄', '公共交通機関を利用していない' ];
                    $q2 = ['定期券','１日乗車券','PiTaPa','PiTaPa以外のIC乗車券','きっぷ','利用していない'];
                    $q3 = ['１人', '２人', '３人', '４人', '５人以上'];
                    $q4 = ['同行者なし', '集めていた', '集めていない'];
                @endphp
                <x-input-radio label="Ｑ１　今回、ご参加にあたり、ご利用された交通手段をお聞かせください。"
                               name="q1" :items="$q1"/>
                <x-input-radio label="Ｑ２　Osaka Metro／大阪シティバスをご利用された方は、どの乗車券を利用されましたか。"
                               name="q2" :items="$q2"/>
                <x-input-radio label="Ｑ３　ご本人を含め、何人でご参加されましたか。"
                               name="q3" :items="$q3"/>
                <x-input-radio label="Ｑ４　同行者の方は、スタンプを集めておられましたか。"
                               name="q4" :items="$q4"/>
            </div>
            <button type="submit" class="btn btn-red mt-5 mx-auto !block">応募する</button>
        </form>
    </div>
@stop
