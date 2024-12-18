@extends('layouts.base');
@section('content')
<form class="max-w-sm mx-auto" action="{{ url('coaches/'.$coach->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <div class="mb-5">
        <label for="name" class="block mb-2 text-sm font-medium text-white dark:text-white">Name</label>
        <input type="text" name="name" value="{{$coach->name}}" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
    </div>
    
    <div class="mb-5">
        <img src="{{asset($coach->image)}}">
        <label for="image" class="block mb-2 text-sm font-medium text-white dark:text-white">Image</label>
        <input type="file" name="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="image">
    </div>

    <button type="submit" class="text-red-900 hover:text-white border border-red-900 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-red-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-900 dark:text-red-900 dark:hover:text-white dark:hover:bg-red-900 dark:focus:ring-red-900">Update Coach</button>
    </form>
@endsection


