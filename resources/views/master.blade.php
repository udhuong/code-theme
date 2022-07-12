<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>One piece film red</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/style.css') }}">
</head>
<body>
<header class="xl:hidden">
    <div class="bg-red-500 flex justify-center items-center h-[45px]">
        <img src="{{ asset('images/logo.png') }}" class="object-contain" />
    </div>
</header>
@yield('content')
<div class="xl:hidden">
    @if(request()->routeIs('home'))
        <div class="bg-red-500 text-center text-white h-[100px] flex justify-center items-end fixed bottom-0 w-full">
            <img src="{{ asset('images/btn-menu.png') }}" class="inline-block absolute -top-1/2 left-1/2 -translate-x-1/2 js-open-menu" />
            <p class="mb-3">Ⓒ尾田 栄一郎/2022「ワンピース」製作委員会</p>
        </div>
    @else
        <div class="bg-red-500 text-center text-white h-[75px] flex justify-center items-end fixed bottom-0 w-full">
            <img src="{{ asset('images/btn-menu.png') }}" class="inline-block absolute -top-1/2 left-1/2 -translate-x-1/2 js-open-menu" />
        </div>
    @endif
    <div class="bg-menu fixed w-full text-white text-center menu-bottom">
        <div class="max-w-[490px] mx-auto">
            <div class="relative h-[275px]">
                <a href="/guide" class="w-20 font-bold text-lg absolute bottom-3 left-5"><img class="bg-red-500 rounded-full block w-20 h-20" src="{{ asset('images/icon-menu1.png') }}" />参加方法</a>
                <a href="/stamps" class="w-20 font-bold text-lg absolute top-16 left-24"><img class="bg-red-500 rounded-full block w-20 h-20" src="{{ asset('images/icon-menu2.png') }}" />スタンプ</a>
                <a href="/spot" class="w-20 font-bold text-lg absolute top-16 right-24"><img class="bg-red-500 rounded-full block w-20 h-20" src="{{ asset('images/icon-menu3.png') }}" />スポット一覧</a>
                <a href="/prize" class="w-20 font-bold text-lg absolute bottom-3 right-5"><img class="bg-red-500 rounded-full block w-20 h-20" src="{{ asset('images/icon-menu4.png') }}" />賞品応募</a>
            </div>
            <div class="inline-flex items-end mx-auto mb-3 -mt-16">
                <a href="/" class="font-bold text-xl flex">HOME
                    <img class="object-contain ml-1" src="{{ asset('images/icon-home.png') }}" /></a>
                <a href="#" class="inline-block js-close-menu z-10">
                    <img src="{{ asset('images/btn-close.png') }}" class="mx-2" />
                </a>
                <a href="#" class="font-bold text-xl flex"><img class="object-contain mr-1" src="{{ asset('images/icon-info.png') }}" /> Info</a>
            </div>
        </div>
    </div>
    <div class="hidden">
        <a href="/reward"></a>
        <a href="/reward-exchanged"></a>
        <a href="/prize-inactive"></a>
        <a href="/award"></a>
        <a href="/form"></a>
        <a href="/stamp-get/luffy"></a>
        <a href="/stamp-get/zoro"></a>
        <a href="/stamp-get/chopper"></a>
        <a href="/stamp-get/nami"></a>
        <a href="/stamp-get/sanji"></a>
        <a href="/stamp-get/robin"></a>
        <a href="/stamp-get/brook"></a>
        <a href="/stamp-get/franky"></a>
        <a href="/stamp-get/shanks"></a>
        <a href="/stamp-get/jinbe"></a>
    </div>
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
