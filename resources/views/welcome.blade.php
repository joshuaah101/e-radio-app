@extends('layout.master')

@section('nav')
    @include('inc.nav')
@endsection

@section('header')
    <header class="p-28 rounded flex justify-center items-center bg-radio-banner bg-no-repeat bg-fixed bg-cover">
        <div class="flex flex-col space-y-8 w-2/3">
            <h2 class="text-orange-600 text-5xl flex uppercase font-bold font-mono">
                listen to FPI Radio online
            </h2>
            <img src="{{ asset('storage/images/radio.png') }}" class="w-32 h-auto" alt="logo" >
        </div>

        <div class="flex flex-col justify-center items-center space-y-8 w-1/3">
            <img src="{{ asset('storage/images/finger.png') }}" class="w-32 h-auto animate-bounce" alt="logo" >

            <audio controls crossorigin="anonymous" class="px-4">
                <source src="http://stream.zeno.fm/w4at0x47mf9uv" type="audio/mp3">
                    Your current browser does not support this player, please we recommend Google chrome.
            </audio>

            
           
            <span class="text-orange-600 font-semibold text-sm uppercase font-mono">
                92.1 FM, Simply the best. 
            </span>
        </div>
    </header>
@endsection

@section('main')
    <main class="p-5 my-12">
        <div class="my-12 px-12">
            <header class="font-semibold text-2xl text-orange-600 uppercase">
                News and Events
            </header>
            <div class="p-8 border border-orange-600 rounded mt-8">
                <div class="grid xs:grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-5">
                    <div class="flex flex-col space-y-3 justify-center items-center">
                        <img src="{{ asset('storage/images/headset.png') }}" alt="News and events" class="w-1/2 h-auto rounded">
                        <div class="text-justify leading-relaxed tracking-normal text-xs font-medium text-gray-700">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat iste libero ipsam ipsum doloremque deserunt eius quam qui sint dolorem repellendus, laudantium, recusandae sed, expedita molestias est. Quia, iure non.
                        </div>
    
                        <a href="" class="py-3 px-5 bg-orange-600 w-1/2 hover:bg-orange-800 rounded text-xs font-medium text-center text-orange-100 transition duration-300">
                            Read more &DoubleRightArrow;
                        </a>
                    </div>
                    <div class="flex flex-col space-y-3 justify-center items-center">
                        <img src="{{ asset('storage/images/headset.png') }}" alt="News and events" class="w-1/2 h-auto rounded">
                        <div class="text-justify leading-relaxed tracking-normal text-xs font-medium text-gray-700">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat iste libero ipsam ipsum doloremque deserunt eius quam qui sint dolorem repellendus, laudantium, recusandae sed, expedita molestias est. Quia, iure non.
                        </div>
    
                        <a href="" class="py-3 px-5 bg-orange-600 w-1/2 hover:bg-orange-800 rounded text-xs font-medium text-center text-orange-100 transition duration-300">
                            Read more &DoubleRightArrow;
                        </a>
                    </div>
                    <div class="flex flex-col space-y-3 justify-center items-center">
                        <img src="{{ asset('storage/images/headset.png') }}" alt="News and events" class="w-1/2 h-auto rounded">
                        <div class="text-justify leading-relaxed tracking-normal text-xs font-medium text-gray-700">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat iste libero ipsam ipsum doloremque deserunt eius quam qui sint dolorem repellendus, laudantium, recusandae sed, expedita molestias est. Quia, iure non.
                        </div>
    
                        <a href="" class="py-3 px-5 bg-orange-600 w-1/2 hover:bg-orange-800 rounded text-xs font-medium text-center text-orange-100 transition duration-300">
                            Read more &DoubleRightArrow;
                        </a>
                    </div>
                    <div class="flex flex-col space-y-3 justify-center items-center">
                        <img src="{{ asset('storage/images/headset.png') }}" alt="News and events" class="w-1/2 h-auto rounded">
                        <div class="text-justify leading-relaxed tracking-normal text-xs font-medium text-gray-700">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat iste libero ipsam ipsum doloremque deserunt eius quam qui sint dolorem repellendus, laudantium, recusandae sed, expedita molestias est. Quia, iure non.
                        </div>
    
                        <a href="" class="py-3 px-5 bg-orange-600 w-1/2 hover:bg-orange-800 rounded text-xs font-medium text-center text-orange-100 transition duration-300">
                            Read more &DoubleRightArrow;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('footer')
    @include('inc.footer')
@endsection