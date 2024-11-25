@extends('layouts.base')

@section('content')
<div class="h-screen dark:bg-purple-900 bg-purple-900 pt-12">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4 w-full">
        @foreach($coaches as $entity)
        <div class="max-w-sm mx-auto bg-white dark:bg-purple-900 rounded-lg overflow-hidden shadow-lg">
            <div class="border-b px-4 pb-6">
                <div class="text-center my-4">
                    <!-- Image Coach -->
                    <img class="h-32 w-32 rounded-full border-4 border-white dark:border-purple-900 mx-auto my-4"
                        src="{{ asset($entity->image)}}" alt="{{$entity->name}}">
                    <div class="py-2">
                        <!-- Name do Coach -->
                        <h3 class="font-bold text-2xl text-gray-800 dark:text-white mb-1">{{$entity->name}}</h3>
                    </div>
                </div>

                <div class="flex gap-2 px-2">
                    <!-- Edit Coach -->
                    <a href="{{ url('coaches/'.$entity->id.'/edit') }}" 
                       class="flex-1 rounded-full bg-blue-600 dark:bg-blue-800 text-white dark:text-white antialiased font-bold hover:bg-blue-800 dark:hover:bg-blue-900 px-4 py-2">
                        Edit✏️
                    </a>
                    <!-- Delete Coach -->
                    <form action="{{ url('coaches/'.$entity->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="flex-1 rounded-full border-2 border-red-700 dark:border-red-700 font-semibold text-black dark:text-white px-4 py-2">
                            Delete🗑️
                        </button>
                    </form>
                </div>
            </div>
                <!-- Linked Pokemon -->
                <div class="px-4 py-4">
                    <div class="text-gray-800 dark:text-gray-300 mb-4">
                        <h4 class="font-bold text-lg dark:text-white">Linked Pokemon:</h4>
                        <div class="flex flex-wrap gap-2 mt-2">
                            @foreach ($entity->pokemon as $pokemon)
                                <img class="h-12 w-12 rounded-full border-2 border-gray-300 dark:border-gray-700" 
                                    src="{{ asset($pokemon->image) }}" alt="{{ $pokemon->name }}" title="{{ $pokemon->name }}">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
