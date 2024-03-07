@extends('layouts.app')

@section('content')

<div class="px-8 py-6">

<a href="/matelas" class="text-gray-500 flex gap-2 mb-3">
    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
    </svg>
    Retour aux matelas
</a>


@foreach ($errors->all() as $error)
        <p class="text-red-500">{{ $error }}</p>
    @endforeach

    <form method="post">
        {{-- Idem CSRF pour sécurité--}}
        @csrf

        <div class="mb-3">
            <label for="brand" class="block mb-1">Marque</label>
            <input type="text" name="brand" id="brand" value="{{ old('brand', $mattress->brand) }}" class="rounded-lg">
        </div>

        <div class="mb-3">
            <label for="description" class="block mb-1">description</label>
            <textarea name="description" id="description" class="rounded-lg">{{ old('description', $mattress->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="block mb-1">Image</label>
            <input type="text" name="image" id="image" value="{{ old('image', $mattress->image) }}" class="rounded-lg">
        </div>

        <div class="mb-3">
            <label for="price" class="block mb-1">Prix</label>
            <input type="text" name="price" id="price" value="{{ old('price', $mattress->price) }}" class="rounded-lg">
        </div>

        <div class="mb-3">
            <label for="stock" class="block mb-1">Stock</label>
            <input type="text" name="stock" id="stock" value="{{ old('stock', $mattress->stock) }}" class="rounded-lg">
        </div>

        <div class="mb-3">
            <label class="block mb-1">Taille</label>

            @foreach ($sizes as $size)
            <div class="flex items-center gap-2">
                <input type="checkbox" name="sizes[]" id="size-{{ $size->id }}" value="{{ $size->id }}" @checked(in_array($size->id, old('sizes', [])))>
                <label for="size-{{ $size->id }}">{{ $size->name }}</label>
            </div>
        @endforeach
        </div>

        <button class="inline-block bg-gray-800 text-gray-300 px-4 py-2 rounded-lg hover:bg-gray-600 hover:scale-105 duration-200">Modifier le {{$mattress->brand}}</button>
    </form>
</div>
@endsection
