@extends('layouts.app')

@section('content')

    <div class="flex items-center gap-10 mb-6 px-3 py-8">
        <a href="/matelas/nouveau"
            class="px-4 py-2 text-sm bg-blue-500 hover:bg-blue-300 duration-200 text-white rounded-full shadow-sm">Créer un
            matelas</a>
    </div>

    <div class="flex flex-wrap mx-auto justify-center">
        @foreach ($mattresses as $mattress)
            <div class="w-3/4 md:w-1/3 lg:w-1/5 mb-4">
                <div class="flex flex-col justify-between h-full">
                    <a href="/matelas/{{ $mattress->id }}-{{ $mattress->slug }}" class="mx-3 block group">
                        <img class="w-full h-[250px] mb-3 object-cover rounded-lg" src="{{ $mattress->image }}"
                            alt="{{ $mattress->brand }}">

                            <h3 class="text-sm text-gray-600 underline group-hover:no-underline"> {{ $mattress->brand }}
                                <p>{{ $mattress->price }}€</p>
                                <p>{{ $mattress->sizes->pluck('name')->implode(', ') }}</p>
                            </h3>

                        <div class="flex justify-evenly mb-3">
                            <a href="/matelas/{{ $mattress->id }}/modifier" title="Modifier">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon></svg>
                            </a>
                            <a href="/matelas/{{ $mattress->id }}/supprimer" title="Supprimer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                            </a>

                            
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
