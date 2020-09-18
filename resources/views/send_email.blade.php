@extends('layouts.app')
@section('title', 'contact')
@section('content')









<div class="md:ml-12 md:p-12 flex justify-center">
    <div class="w-2/3 md:w-1/3">
        @if(count($errors)>0)
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Oops!</strong>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <title>Close</title>
                    <path
                        d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                </svg>
            </span>
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if($message = Session::get('success'))
        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
            <div class="flex">
                <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                    </svg></div>
                <div>
                    <p class="font-bold">{{$message}}</p>

                </div>
            </div>
        </div>

        @endif
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ url('sendemail/send') }}" method="POST">
            {{ csrf_field() }}
            <div class="mb-2">

                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    your name
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="name" type="text" placeholder="your name" name="name">
            </div>
            <div class="mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    email
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="password" type="email" placeholder="exemple@exemple.com" name="email">
            </div>
            <div class="mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="message">
                    message
                </label>
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                     type="message" placeholder="your message!" name="message"></textarea>
            </div>

            <div class="flex items-center justify-between">
                <button
                    class="bg-gray-900 hover:bg-gray-400 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit" name="send" value="Send">
                    send
                </button>
            </div>
        </form>
        <p class="text-center text-gray-900 text-xs">
            &copy;2020 Acme Corp. All rights reserved.
        </p>
    </div>

</div>

@endsection