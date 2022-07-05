@extends('master')
@section('content')
    <div class="title">
        <h1>クリア賞</h1>
    </div>
    <div class="container px-6 pt-5 pb-36">
        <h2 class="text-[22px] font-bold mb-5">下記全てを記入してご応募ください。</h2>
        <form method="post" action="">
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
            <button type="submit" class="btn btn-red mt-5 mx-auto !block">応募する</button>
        </form>
    </div>
@stop
