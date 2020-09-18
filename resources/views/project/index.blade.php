@extends('layouts.app')
@section('title', 'gestion')
@section('content')


<div class="pt-32">
    <div class="flex justify-center m-8">
        <a class="bg-gray-500 hover:bg-white text-gray-900 font-semibold hover:text-blue-700 p-4 border " href="{{ route('create.project') }}">Create new project</a>
        <a class="bg-gray-500 hover:bg-white text-gray-900 font-semibold hover:text-blue-700 p-4 border " href="/home">back</a>
    </div>
   <table class="flex justify-center text-white md:max-w-screen-xl m-auto">
       <tr class="border">
           <th class="border-4 border-black">project name</th>
           <th class="border-4 border-black">project link</th>
           <th class="border-4 border-black">description</th>
           <th class="border-4 border-black">image</th>
           <th class="border-4 border-black">action</th>
       </tr>
       
       @foreach ($project as $pro)
       <tr class="border">
        
           <td class="border-4 border-black p-8">{{ $pro->name }}</td>
           <td class="border-4 border-black p-8">{{ $pro->link }}</td>
           <td class="border-4 border-black p-8">{{ $pro->description }}</td>
       <td class="border-4 border-black p-8"><img class="w-32 flex justify-center" src="{{ URL::to($pro->img) }}" alt=""></td>
           <td class="border-4 border-black p-8">
           <a class=" bg-gray-400 hover:bg-gray-700 text-blue-300 font-semibold hover:text-white px-1 border border-gray-500 rounded" href="{{ URL::to('edit/project/'. $pro->id) }}">edit</a>
               <a class=" bg-red-600 hover:bg-gray-700 text-blue-300 font-semibold hover:text-white px-1 border border-gray-500 rounded" href="{{ URL::to('delete/project/'. $pro->id) }}" onclick="return ('Are you sure')">delete</a>
           </td>
        </tr>
        @endforeach
    </table>
    <div class="p-6">
        {!! $project->links() !!}
    </div>
</div>

@endsection