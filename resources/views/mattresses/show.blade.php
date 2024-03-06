@extends('layouts.app')

@section('content')

<a href="/matelas" class="text-gray-500 flex gap-2 mb-3">
    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
    </svg>
    Retour aux matelas
</a>

    <div class="md:flex items-center gap-6">
        <img class="w-full md:w-64 mb-12 md:mb-0 shadow-lg" src="{{ $mattress->image }}" alt="{{ $mattress->brand }}">
        <div>
            
            <h1 class="text-5xl font-bold text-gray-900 mb-3">{{ $mattress->brand }}</h1>
            <p class="mb-9 italic">{{ $mattress->price }}€</p>
            <p class="mb-3"><strong>Taille(s) disponible(s)</strong>: {{ $mattress->sizes->pluck('name')->implode(', ') }}</p>
            <p class="mb-3"><strong>Modèle</strong>: 
                {!! Str::markdown($mattress->description) !!}
            </div>
        </div>
    </div>
    @endsection