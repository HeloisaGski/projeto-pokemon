@extends('layouts.base')

@section('content')
<div class="h-screen dark:bg-gray-700 bg-gray-200 pt-12">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4 w-full">
        @foreach($coaches as $entity)
        <div class="max-w-sm mx-auto bg-white dark:bg-gray-900 rounded-lg overflow-hidden shadow-lg">
            <div class="border-b px-4 pb-6">
                <div class="text-center my-4">
                    <!-- Imagem do treinador -->
                    <img class="h-32 w-32 rounded-full border-4 border-white dark:border-gray-800 mx-auto my-4"
                        src="{{ asset($entity->image)}}" alt="{{$entity->name}}">
                    <div class="py-2">
                        <!-- Nome do treinador -->
                        <h3 class="font-bold text-2xl text-gray-800 dark:text-white mb-1">{{$entity->name}}</h3>
                    </div>
                </div>

                <div class="flex gap-2 px-2">
                    <!-- Editar treinador -->
                    <a href="{{ url('coaches/'.$entity->id.'/edit') }}" 
                       class="flex-1 rounded-full bg-blue-600 dark:bg-blue-800 text-white dark:text-white antialiased font-bold hover:bg-blue-800 dark:hover:bg-blue-900 px-4 py-2">
                        Edit✏️
                    </a>
                    <!-- Excluir treinador -->
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
            <div class="px-4 py-4">
                <!-- Detalhes adicionais (exemplo de seguidores, informações extras) -->
                <div class="flex gap-2 items-center text-gray-800 dark:text-gray-300 mb-4">
                    <svg class="h-6 w-6 text-gray-600 dark:text-gray-400" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z" />
                    </svg>
                    <span><strong class="text-black dark:text-white">12</strong> Followers you know</span>
                </div>

                <!-- Exemplo de exibição de usuários em comum ou outras informações -->
                <div class="flex">
                    <div class="flex justify-end mr-2">
                        <!-- Imagem de usuários conhecidos -->
                        <img class="border-2 border-white dark:border-gray-800 rounded-full h-10 w-10 -mr-2"
                            src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
                        <img class="border-2 border-white dark:border-gray-800 rounded-full h-10 w-10 -mr-2"
                            src="https://randomuser.me/api/portraits/women/31.jpg" alt="">
                        <img class="border-2 border-white dark:border-gray-800 rounded-full h-10 w-10 -mr-2"
                            src="https://randomuser.me/api/portraits/men/33.jpg" alt="">
                        <img class="border-2 border-white dark:border-gray-800 rounded-full h-10 w-10 -mr-2"
                            src="https://randomuser.me/api/portraits/women/32.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
