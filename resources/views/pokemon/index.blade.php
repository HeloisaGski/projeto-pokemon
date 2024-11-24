@extends('layouts.base')
@can('create', App\Models\Pokemon::class)

@section('content')
<div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
        @foreach($pokemon as $entity)
        <div class="rounded overflow-hidden shadow-lg">
            <div class="relative">
                <img class="w-full"
                    src="{{ asset($entity->image)}}" alt="{{$entity->name}}"
                    alt="{{$entity->name}}">
                <div
                    class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                </div>
                <div
                    class="absolute bottom-0 left-0 bg-white-600 px-4 py-2 text-white text-sm hover:bg-white hover:text-black transition duration-500 ease-in-out">
                    {{$entity->type}}
                </div>
                <div
                    class="text-sm absolute top-0 right-0 bg-white px-4 text-dark rounded-full h-16 w-16 flex flex-col items-center justify-center mt-3 mr-3 hover:bg-white hover:text-red-700 transition duration-500 ease-in-out">
                    <span class="font-bold">{{$entity->power}}</span>
                    <small>Power</small>
                </div>
                <div
                    class="text-sm absolute top-0 right-50 bg-white px-4 text-dark rounded-full h-16 w-16 flex flex-col items-center justify-center mt-3 mr-3 hover:bg-white hover:text-red-700 transition duration-500 ease-in-out">
                    @if (isset($entity->coach))
                        <span class="font-bold">{{$entity->coach->name}}</span>
                    @else
                        <span class="font-bold">Sem Treinador</span>

                    @endif
                    <small>Coach</small>
                </div>
            </div>
            <div class="px-6 py-4">
                <h5 class="font-semibold text-lg inline-block text-white">
                    {{$entity->name}}
                </h5>
            </div>
            <div class="px-6 py-4 flex justify-between">
                <a href="{{ url('pokemon/'.$entity->id.'/edit') }}" 
                   class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2">
                    Edit✏️
                </a>
                <form action="{{ url('pokemon/'.$entity->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2">
                        Delete🗑️
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
