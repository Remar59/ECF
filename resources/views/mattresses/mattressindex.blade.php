@extends('layouts.app')

@section('content')
    <div class="flex items-center gap-10 mb-6">
        <h1 class="text-3xl">Matelas</h1>
        <a href="/mattresses/creer"
            class="px-4 py-2 text-sm bg-blue-500 hover:bg-blue-300 duration-200 text-white rounded-full shadow-sm">Créer un
            matelas</a>
    </div>

    <div class="flex flex-col mx-3">
        @foreach ($mattresses as $mattress)
            <div class=" w-1/2 md:w-1/3 lg:w-1/5 mb-4">
                <div class="flex flex-col justify-between h-full">
                <a href="/mattresses/{{ $mattress->id }}" class="mx-3 block group">
                    <img class="w-full h-[250px] mb-3 object-cover rounded-lg" src="{{ $mattress->image }}"
                        alt="{{ $mattress->brand }}">
                    <h3 class="text-sm text-gray-600 underline group-hover:no-underline"> {{ $mattress->brand }}</h3>
                </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
