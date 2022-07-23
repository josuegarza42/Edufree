<x-app-layout>
    <div class="container py-8">
        <h1 class="text-4xl font-bold text-gray-600">
            {{ $post->name }}
        </h1>
        <div class="text-lg text-gray-500 mb-2">
            {!! $post->extract !!}
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            {{-- contenido principal --}}
            <div class="lg:col-span-2">

                <figure>
                    {{-- <img class="w-full h-80 object-cover object-center" src="{{ Storage::url($post->image->url) }}"
                    alt=""> --}}
                    @if ($post->image)
                    <img class="w-full h-72 object-cover object-center" src="{{ Storage::url($post->image->url) }}" alt="">
                    @else
                    <img class="w-full h-72 object-cover object-center" src="https://i.ibb.co/k0FN8f1/7.png" alt="">
                    @endif



                </figure>

                <div class="text-base text-gray-500 mt-4">
                    {!! $post->body !!}
                </div>

            </div>

            {{-- contenido relacionado --}}
            <aside>
                <h1 class="text-2xl font-bold text-gray-600 mb-4">
                    Mas en {{ $post->category->name }}
                </h1>
                <ul>
                    @foreach ($similares as $similar)
                    <li class="mb-4">
                        <a class="flex" href="{{ route('posts.show', $similar) }}">
                            @if ($similar->image)
                            <img class="w-36 h-20 object-cover object-center" src="{{ Storage::url($similar->image->url) }}" alt="">
                            @else
                            <img class="w-36 h-20 object-cover object-center" src=" https://i.ibb.co/16dqvL5/3.png " alt="">

                            
                            @endif
                            <span class="ml-2 text-gray-600">
                                {{ $similar->name }}
                            </span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </aside>



        </div>

        <div class="container text-center">

            <a href="#" class="">
                <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-3">
                    Tutorias
                </button>
            </a>
            <a href="#">
                <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-3">
                    Unete a nosotros
                </button>
            </a>
            <a href="#">
                <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-3">
                    Becas
                </button>
            </a>
        </div>

    </div>


</x-app-layout>