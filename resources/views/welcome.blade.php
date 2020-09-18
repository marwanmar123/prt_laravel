
@extends('layouts.app')

@section('title', 'home')
@section('content')

<div class="md:ml-24 flex flex-col md:flex-row justify-around p-12  leading-6">
    <div class="flex flex-col justify-center text-white"  data-aos="flip-down">
        <div class="animated-text text-center h-16 overflow-hidden">
            <h1 class="fontprnc text-5xl font-bold tracking-widest line uppercase">Hi,</h1>
            <h1 class="fontprnc text-5xl font-bold tracking-widest line uppercase">I'm Khadiri</h1>
            <h1 class="fontprnc text-5xl font-bold tracking-widest line uppercase">Marouan,</h1>
            <h1 class="fontprnc text-5xl font-bold tracking-widest line uppercase">web developer.</h1>
        </div>
        <p class="font font-bold text-xl text-center" data-aos="fade-right">Frontend, backend developer/ wordpress/ Freelancer!</p>
        <div class="my-4 text-center">
            <a class="bg-transparent hover:bg-gray-700 text-blue-300 font-semibold hover:text-white py-2 px-4 border border-gray-500 hover:border-transparent rounded "
                href="/contact">contact me</a>
        </div>
    </div>
    <div data-aos="flip-down">
        <img class="w-4/5 md:w-full p-6" src="img/home2.svg">
    </div>
</div>

@endsection