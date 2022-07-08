@extends('master')
@section('content')
    <div class="bg-black text-white py-4">
        <div class="flex justify-center">
            <img src="{{ asset('images/icon-list-white.png') }}" class="object-contain w-[50px] mr-2" />
            <div class="font-semibold">
                <h3 class="text-xl">中央線・ニュートラム</h3>
                <p class="text-3xl font-bold">クコスモスクエア駅</p>
            </div>
        </div>
    </div>
    <div class="container px-6 overflow-hidden h-[calc(100vh-45px-96px)] mx-auto">
        <div class="font-bold uppercase text-red-500 text-[56px] text-center whitespace-nowrap">STAMP GET!!</div>
        <img src="{{ asset('images/stamp.png') }}" class="object-contain mx-auto block" />
        @switch($char)
            @case('zoro')
            <div class="h-full relative zoro">
                <img src="{{ asset('images/characters/zoro.png') }}" class="characters characters--left" />
                {{--<img src="{{ asset('images/characters/zoro-icon.png') }}" class="characters characters--right" />--}}
            </div>
            @break
            @case('chopper')
            <div class="h-full relative chopper">
                <img src="{{ asset('images/characters/chopper.png') }}" class="characters characters--left" />
                <img src="{{ asset('images/characters/usopp.png') }}" class="characters characters--right" />
            </div>
            @break
            @case('nami')
            <div class="h-full relative nami">
                {{--<img src="{{ asset('images/characters/nami-icon.png') }}" class="characters characters--left" />--}}
                <img src="{{ asset('images/characters/nami.png') }}" class="characters characters--right" />
            </div>
            @break
            @case('sanji')
            <div class="h-full relative sanji">
                <img src="{{ asset('images/characters/sanji.png') }}" class="characters characters--left" />
                {{--<img src="{{ asset('images/characters/sanji-icon.png') }}" class="characters characters--right" />--}}
            </div>
            @break
            @case('robin')
            <div class="h-full relative robin">
                {{--<img src="{{ asset('images/characters/robin-icon.png') }}" class="characters characters--left" />--}}
                <img src="{{ asset('images/characters/robin.png') }}" class="characters characters--right" />
            </div>
            @break
            @case('brook')
            <div class="h-full relative brook">
                <img src="{{ asset('images/characters/brook.png') }}" class="characters characters--left" />
                {{--<img src="{{ asset('images/characters/brook-icon.png') }}" class="characters characters--right" />--}}
            </div>
            @break
            @case('franky')
            <div class="h-full relative franky">
                {{--<img src="{{ asset('images/characters/franky-icon.png') }}" class="characters characters--left" />--}}
                <img src="{{ asset('images/characters/franky.png') }}" class="characters characters--right" />
            </div>
            @break
            @case('shanks')
            <div class="h-full relative shanks">
                <img src="{{ asset('images/characters/shanks.png') }}" class="characters characters--left" />
                {{--<img src="{{ asset('images/characters/shanks-icon.png') }}" class="characters characters--right" />--}}
            </div>
            @break
            @case('jinbe')
            <div class="h-full relative jinbe">
                {{--<img src="{{ asset('images/characters/jinbe-icon.png') }}" class="characters characters--left" />--}}
                <img src="{{ asset('images/characters/jinbe.png') }}" class="characters characters--right" />
            </div>
            @break
            @case('luffy')
            @default
            <div class="h-full relative luffy">
                <img src="{{ asset('images/characters/luffy.png') }}" class="characters characters--left" />
                <img src="{{ asset('images/characters/uta.png') }}" class="characters characters--right" />
            </div>
        @endswitch

    </div>
@stop
