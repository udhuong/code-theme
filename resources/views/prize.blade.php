@extends('master')
@section('content')
    <div class="title">
        <h1>賞品応募</h1>
    </div>
    <div class="container px-3 pt-5 pb-36 text-center max-w-tab">
        <span class="inline-flex items-center font-bold text-red-500 text-[38px]"><img
                src="{{ asset('images/icon-gift.png') }}" class="mr-1"> 参加賞</span>
        <p class="font-bold text-2xl">スタンプ5個で参加賞引き換え！</p>
        <a href="#" class="btn btn-red mt-1 mb-3">交換</a>
        <img src="{{ asset('images/wrap-text.png') }}" class="mx-auto mb-8">
        <div class="text-base mb-3">
            <p class="mb-5 border-b border-dashed border-gray-500 pb-5 text-left text-sm"><b class="text-base">梅田ブルク７（７階インフォメーション、シアター入場口）</b><br/>
                最寄り駅：御堂筋線・梅田駅／谷町線・東梅田駅／四つ橋線・西梅田駅<br/>
                <a class="text-red-500" href="https://tjoy.jp/umeda_burg7/access">大阪市北区梅田1-12-6 E-MAビル7F<img src="{{ asset('images/external.svg') }}" class="h-[15px] inline-block ml-[5px] mb-[3px]"/></a></p>
            <p class="mb-5 border-b border-dashed border-gray-500 pb-5 text-left text-sm"><b class="text-base">なんばパークシネマ（チケット売り場）</b><br/>
                最寄り駅：御堂筋線／千日前線　なんば駅<br/>
                <a class="text-red-500" href="https://www.parkscinema.com/site/namba/access.html">大阪市浪速区難波中2-10-70なんばパークス8F<img src="{{ asset('images/external.svg') }}" class="h-[15px] inline-block ml-[5px] mb-[3px]"/> </a>
            </p>
            <p class="mb-5 border-b border-dashed border-gray-500 pb-5 text-left text-sm"><b class="text-base">イオンシネマシアタス心斎橋（※確認中）</b><br/>
                最寄り駅：御堂筋線／長堀鶴見緑地線　心斎橋駅<br/>
                <a class="text-red-500" href="https://www.aeoncinema.com/theater/access/81089_access.html">大阪市中央区心斎橋筋一丁目8-3心斎橋パルコ12階<img src="{{ asset('images/external.svg') }}" class="h-[15px] inline-block ml-[5px] mb-[3px]"/></a></p>
            <p class="mb-5 border-b border-dashed border-gray-500 pb-5 text-left text-sm"><b class="text-base">あべのアポロシネマ（ルシアスビル４階シネマグッズコーナー）</b><br/>
                最寄り駅：御堂筋線／谷町線　天王寺駅<br/>
                <a class="text-red-500" href="https://www.kin-ei.co.jp/cgi-bin/pc/static.cgi?tgttmp=access/index">大阪市阿倍野区阿倍野筋1丁目5番1号<img src="{{ asset('images/external.svg') }}" class="h-[15px] inline-block ml-[5px] mb-[3px]"/></a>
            </p>
        </div>
        <span class="inline-flex items-center font-bold text-red-500 text-[38px]"><img
                src="{{ asset('images/icon-gift.png') }}" class="mr-1"> クリア賞</span>
        <p class="font-bold text-3xl">スタンプ10個で応募可能!!</p>
        <a href="#" class="btn btn-red mt-1 mb-3">応募</a>
    </div>
@stop
