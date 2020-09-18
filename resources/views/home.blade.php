@extends('layouts.app')
@section('title', 'admin Home')
@section('content')
    <nav class="flex fixed h-full flex-col p-4 bg-gray-800 w-24">
        <img src="img/logo.png" class="w-2/3">
        <div class="flex flex-col items-center">
            <a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                    class="text-gray-200 hover:text-teal-400 p-4 m-3 text-sm md:text-lg fas fa-sign-out-alt icon"
                    data-hover="logout"></i></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                {{ csrf_field() }}
            </form>      
        </div>
    </nav>

    <div class=" text-white flex justify-center h-screen w-full items-start pt-12" style="background-image: url('img/back.jpg') ">

        <a class="bg-transparent hover:bg-blue-700 text-blue-300 font-bold hover:text-white p-6 border border-gray-500 hover:border-transparent rounded shadow-lg" href="{{ route('project.index') }}">gestion </a>
    </div>


    {{-- <div class="p-6 w-3/4 md:m-auto">
        <div class="md:ml-24 flex flex-col md:flex-row flex-wrap justify-around p-12">
            @foreach ($project as $pro)
          
         
            <div class="card">
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
    
    </div> --}}
    

    
@endsection
