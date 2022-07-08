@extends('master')
@section('content')
    <div class="title">
        <h1>参加方法</h1>
    </div>
    <h2 class="sub-title">QRコードが読み取れる<br/>スマートフォンをお持ちの方なら<br/>参加可能!! </h2>
    <div class="container px-6 pb-28 mx-auto">
        <x-guide-item :img="'images/num1.png'"
                      title="キャラクターブースを<br/> OsakaMetro駅構内で見つけよう!"
                      content="スタンプラリー実施期間中、Osaka Metroの10駅 に「ONE PIECE FILM RED」登場キャラクターのフォトブースが出現!! "/>
        <x-guide-item :img="'images/num2.png'"
                      title="QRコードをスマートフォンの<br/>フカメラで読み込んで<br/>スタンプを取得!!"
                      content="キャラクターブース毎にスタンプを1個ゲットできます!もちろんキャラクターとの撮影も楽しんでね!<br/>
 ※次のスポットでQRを読み込む場合、メニューバーの「スキャン」ではなく改めてカメラから読み直してください。<br/>
 ※コードリーダー上などの一時的なブラウザ機能ではスタンプを 獲得できません。<br/>
 ※標準ブラウザへ遷移してスタンプを獲得してください。<br/>
 ※撮影したQRコードをSNSへ投稿することはご遠慮ください。"/>
        <x-guide-item :img="'images/num3.png'"
                      title="スタンプ5個で <br/> 参加賞に引き換え可能!!"
                      content="スタンプを5個集めたら、参加賞引換場所でスタン プ一覧画面をスタッフに見せよう!! <br/>
参加賞として■■■■■■■■を進呈します!!
"/>
        <x-guide-item :img="'images/num4.png'"
                      title="スタンプ10個で<br/>クリア賞に応募可能!! "
                      content="スタンプが10個集まったら、クリア賞へ応募可能!! メニューから「賞品応募」へお進みください。 "/>
    </div>
@stop
