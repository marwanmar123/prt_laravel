@extends('layouts.app')
@section('title', 'works')
@section('content')







<div class="p-6 w-3/4 md:m-auto">
    <div class="md:ml-24 flex flex-col md:flex-row flex-wrap justify-around p-12">
        @foreach ($proj as $pro)
      
     
        <div class="card" data-aos="zoom-in">
            <div class="box">
                <div class="fontprnc img">
                <img class="" src="{{ $pro->img }}">
                </div>
                <div class="contenu">
                    <div>
                        <h1 class="">
                            <a href="{{ $pro->link }}" target="_blanck"
                                class="bg-transparent hover:bg-blue-400 text-blue-400 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded flex justify-center">
                                {{ $pro->name }}
                            </a>
                        </h1>
                        <p class="">{{ $pro->description }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        

    </div>

</div>


@endsection