@extends('layouts.app')
@section('title', 'edit')
@section('content')

<div>
    <h1 class="text-center text-5xl text-white font-bold">edit new project</h1>
   


   <div class="md:ml-32 text-white flex justify-center">
   <form action="{{ url('update/project/'.$project->id) }}" class=" mt-4" method="POST" enctype="multipart/form-data">
        @csrf
        <label class="block text-gray-700 text-lg font-bold mb-2">username</label>
        <input type="text" name="name"
   class="w-full bg-white text-black border border-gray-400 rounded-md py-3 px-4"  value="{{ $project->name }}">
        <label class="block text-gray-700 text-lg font-bold mb-2">link</label>
        <input type="text" name="link" class="w-full bg-white text-black border border-gray-400 rounded-md py-3 px-4"
        value="{{ $project->link }}">
        <label class="block text-gray-700 text-lg font-bold mb-2">image</label>
        <input type="file" name="img" accept="*/image"
            class="w-full bg-white text-black border border-gray-400 rounded-md py-3 px-4" >
        <label class="block text-gray-700 text-lg font-bold mb-2">old image</label>
            <img class="w-32 flex justify-center" src="{{ URL::to($project->img) }}" alt="">
   <input type="hidden" name="old_img" value="{{ $project->img }}">
        <label class="block text-gray-700 text-lg font-bold mb-2">description</label>
        <textarea name="description"
            class="bg-gray-100 rounded-md border w-full h-20 py-2 px-3 border-gray-400 font-medium text-black"
            placeholder="description">{{ $project->description }}</textarea>
        <button type="submit" name="btn-add"
            class="bg-black hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">edit</button>
            <a class="bg-blue-200 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="/project">retour</a>
    </form>
</div>

</div>

@endsection