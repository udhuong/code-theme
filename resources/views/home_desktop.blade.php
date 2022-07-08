<div class="container max-w-[767px] mx-auto">
    <img src="{{ asset('images/banner.jpg') }}" class="object-contain" />
</div>
<div class="container max-w-[767px] mx-auto">
    <section class="px-5">
        <h2 class="sub-title py-5 mb-3">
            <span class="bg-red-500 text-white p-2 mr-2">スポット</span>Osaka metro全10ヵ所の駅構内に登場キャラクターが出現！</h2>
        <div class="relative grid grid-rows-4 grid-flow-col gap-x-4 gap-y-2">
            <x-spot-item desktop="true" title="四つ橋線" intro="西梅田駅 " />
            <x-spot-item desktop="true" title="四つ橋線" intro="肥後橋駅" />
            <x-spot-item desktop="true" title="御堂筋線・四つ橋線・中央線" intro="本町駅" />
            <x-spot-item desktop="true" title="御堂筋線・四つ橋線・千日前線線" intro="なんば駅" />
            <x-spot-item desktop="true" title="堺筋線・長堀鶴見緑地線" intro="長堀橋駅" />
            <x-spot-item desktop="true" title="中央線・長堀鶴見緑地線" intro="森ノ宮駅" />
            <x-spot-item desktop="true" title="堺筋線 " intro="扇町駅" />
            <x-spot-item desktop="true" title="千日前線" intro="野田阪神駅" />
            <x-spot-item desktop="true" title="中央線" intro="大阪港駅" />
            <x-spot-item desktop="true" title="中央線・ニュートラム" intro="クコスモスクエア駅 " />
            <div class="absolute bottom-0 right-0">
                <div class="p-3 border border-red-500 text-red-500 font-bold text-xl relative mb-5">
                    スタンプラリーへの参加は<br>
                    1日乗車券の<br>
                    ご購入が<br>
                    おすすめ!!<br>
                    <img src="http://code-theme.abc/images/stamp-page.png" class="absolute right-3 bottom-3">
                </div>
            </div>
        </div>
    </section>
    <section class="px-5 py-5 bg-red-500">
        <h2 class="sub-title pt-0 pb-5 mb-3 text-white text-left flex items-center">
            <span class="bg-white text-red-500 px-2 py-2.5 mr-2">クリア賞品</span><span>スタンプ5個で参加賞に引き換え！<br />スタンプ10個で下記賞品に応募可能です!!</span>
        </h2>
        <div class="grid grid-cols-2 gap-4 mb-8">
            <div class="text-white font-bold">
                <div class="mb-5">
                    <span class="text-yellow-500 text-3xl">S賞</span><span>。。。</span><span class="text-xl">20名</span>
                    <p>「ONE PIECE FILM RED」</p>
                    <p class="text-xl">オリジナルほうろうフックマグ</p>
                </div>
                <div class="mb-5">
                    <span class="text-yellow-500 text-3xl">A賞</span><span>。。。</span><span class="text-xl">50名</span>
                    <p>「ONE PIECE FILM RED」</p>
                    <p class="text-xl">オリジナルレザーバスケース</p>
                </div>
                <div>
                    <span class="text-yellow-500 text-3xl">B賞</span><span>。。。</span><span class="text-xl">50名</span>
                    <p class="text-xl">「ONE PIECE FILM RED」B2ポスタ</p>
                </div>
            </div>
            <div class="bg-gray-300">
            </div>
        </div>
        <div class="flex items-center">
            <img src="{{ asset('images/wrap-text-white.png') }}" class="mr-5 w-[200px]">
            <div class="grid grid-cols-3 gap-6 text-white">
                <div>
                    <p>■■■■■■■</p>
                    <p>■■■■■■■</p>
                    <p>■■■■■■■</p>
                </div>
                <div>
                    <p>■■■■■■■</p>
                    <p>■■■■■■■</p>
                    <p>■■■■■■■</p>
                </div>
                <div>
                    <p>■■■■■■■</p>
                    <p>■■■■■■■</p>
                    <p>■■■■■■■</p>
                </div>
            </div>
        </div>
    </section>
    <section class="px-5 py-5 relative">
        <span class="bg-red-500 text-white p-2 inline-block mb-5 text-2xl font-bold">スポット</span><br />
        <div>
            <x-guide-item desktop="true" :img="'images/num1.png'"
                          title="キャラクターブースをOsakaMetro駅構内で見つけよう!"
                          content="スタンプラリー実施期間中、Osaka Metroの10駅 に「ONE PIECE FILM RED」登場キャラクターのフォトブースが出現!! " />
            <x-guide-item desktop="true" :img="'images/num2.png'"
                          title="QRコードをスマートフォンのフカメラで読み込んで<br/>スタンプを取得!!"
                          content="キャラクターブース毎にスタンプを1個ゲットできます!もちろんキャラクターとの撮影も楽しんでね!<br/>
 ※次のスポットでQRを読み込む場合、メニューバーの「スキャン」ではなく改めてカメラから読み直してください。<br/>
 ※コードリーダー上などの一時的なブラウザ機能ではスタンプを 獲得できません。<br/>
 ※標準ブラウザへ遷移してスタンプを獲得してください。<br/>
 ※撮影したQRコードをSNSへ投稿することはご遠慮ください。" />
            <x-guide-item desktop="true" :img="'images/num3.png'"
                          title="スタンプ5個で参加賞に引き換え可能!!"
                          content="スタンプを5個集めたら、参加賞引換場所でスタン プ一覧画面をスタッフに見せよう!! <br/>
参加賞として■■■■■■■■を進呈します!!
" />
            <x-guide-item desktop="true" :img="'images/num4.png'"
                          title="スタンプ10個でクリア賞に応募可能!! "
                          content="スタンプが10個集まったら、クリア賞へ応募可能!! メニューから「賞品応募」へお進みください。 " />
        </div>
        <h2 class="sub-title pt-5 pb-0 mb-3 text-black">
            <span class="bg-red-500 text-white p-2 mr-2">スポット</span>Osaka metro全10ヵ所の駅構内に登場キャラクターが出現！</h2>
        <img src="{{ asset('images/phone.png') }}" class="absolute right-[30px] top-44 w-[120px]" />
        <img src="{{ asset('images/treasure.png') }}" class="absolute right-[30px] top-[22rem] w-[180px]" />
        <p class="text-sm">「ONE PIECE FILM RED」</p>
        <p class="text-sm">コードリーダー上などの一時的なブラウザ機能ではコードリーダー上などの一時的なブラウザ機能ではコードリーダー上などの一時的なブラウザ機能ではコードリーダー上などの一時的なブラウザ機能ではコードリーダー上などの一時的なブラウザ機能ではコードリーダー上などの一時的なブラウザ機能ではコードリーダー上などの一時的なブラウザ機能ではコードリーダー上などの一時的なブラウザ機能ではコードリーダー上などの一時的なブラウザ機能ではコードリーダー上などの一時的なブラウザ機能ではコードリーダー上などの一時的なブラウザ機能ではコードリーダー上などの一時的なブラウザ機能ではコードリーダー上などの一時的なブラウザ機能ではコードリーダー上などの一時的なブラウザ機能ではコードリーダー上などの一時的なブラウザ機能ではコードリーダー上などの一時的なブラウザ機能ではコードリーダー上などの一時的なブラウザ機能ではコードリーダー上などの一時的なブラウザ機能ではコードリーダー上などの一時的なブラウザ機能ではコードリーダー上などの一時的なブラウザ機能ではコードリーダー上などの一時的一時的なブラウは</p>
    </section>
    <section class="mx-5 border-4 border-red-500 p-5 flex justify-between gap-2">
        <div>
            <p class="text-2xl font-bold">「ONE PIECE FILM RED」</p>
            <p class="text-2xl font-bold">Osaka Metro デジタルスタンプラリーへのご参加は</p>
            <p class="text-[40px] font-bold"><span class="text-red-500">1日乗車券</span>のご利用がオススメ!</p>
            <p class="text-xl font-bold">■大人：800円（土日祝600円）/■小人：300円</p>
            <ul class="text-[11px]">
                <li>●Osaka Metro・大阪シティバス前線(※)が1日乗り放題!</li>
                <li>※大阪シティバスはIKEA鶴浜/ユニバーサル・スタジオ・ジャパンTM行バス、空港バス、オンデマンドバスを除く。</li>
                <li>●大阪市内の約30か所の観光施設等での掲示割引特典付き!(利用当日に限ります)</li>
                <li>●事前にお買い求めいただけます!</li>
            </ul>
        </div>
        <img src="{{ asset('images/poster.png') }}" class="w-[140px] object-contain" />
    </section>
</div>
<footer class="container max-w-[767px] mx-auto">
    <section class="px-5 pt-3 flex gap-2 items-center font-bold">
        <div class="text-[9px]">
            <p>Osaka Metro・シティバス案内コール</p>
            <p>[営業時間・8:00~21:00(年中無休)]</p>
        </div>
        <p class="text-[28px] whitespace-nowrap">06-6582-1400</p>
        <div class="text-[9px]">
            <p>Osaka Metroホームページアドレス</p>
            <p>[https://www.osakametro.co.jp]</p>
            <p class="text-[8px]">パソコン・携帯からご覧いただけます。※車内でのマナーにご協力ください。</p>
        </div>
        <img src="{{ asset('images/logo-bottom.png') }}" class="w-[80px]" />
    </section>
    <section class="flex justify-center gap-4 py-6">
        <a href="#"><img src="{{ asset('images/icon-facebook.png') }}" class="w-[50px]" /></a>
        <a href="#"><img src="{{ asset('images/icon-twitter.png') }}" class="w-[50px]" /></a>
        <a href="#"><img src="{{ asset('images/icon-instagram.png') }}" class="w-[50px]" /></a>
        <a href="#"><img src="{{ asset('images/icon-line.png') }}" class="w-[50px]" /></a>
    </section>
</footer>
