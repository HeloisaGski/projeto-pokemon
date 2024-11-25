@extends('layouts.base')

@section('content')    
    <form class="max-w-sm mx-auto" action="{{ url('pokemon/') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-5">
        <label for="name" class="block mb-2 text-sm font-medium text-white dark:text-white">Name</label>
        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
    </div>
    <div class="mb-5">
        <label for="type" class="block mb-2 text-sm font-medium text-white dark:text-white">Type</label>
        <input type="text" name="type" id="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
    </div>
    <div class="mb-5">
        <label for="power" class="block mb-2 text-sm font-medium text-white dark:text-white">Power</label>
        <input type="number" name="power" id="power" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
    </div>
    <div>
        <label for="image" class="block mb-2 text-sm font-medium text-white dark:text-white">Image</label>
        <input type="file" name="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="image">
    </div>
    <div class="mb-5">
        <label for="coach_id" class="block mb-2 text-sm font-medium text-white dark:text-white">Coach</label>
        <select name="coach_id" id="coach_id" required>
            <option value="">Select a Coach</option>
            @foreach ($coaches as $coach)
                <option value="{{$coach->id}}">{{$coach->name}}</option>
            @endforeach
        </select>
    </div>
    <br>
    <button type="submit" class="text-white hover:text-white border border-red-800 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-red-900 dark:hover:text-white dark:hover:bg-red-900 dark:focus:ring-red-900">Create Pokemon</button>
    </form>
@endsection



