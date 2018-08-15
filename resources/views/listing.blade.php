@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="filters card">
            <h2>Categories</h2>
            <div id="filters">
                    @foreach ($categories as $category)
                    <a href="#" data-id="{{ $category->id }}" class="filter input badge-secondary">{{ $category->name }}</a>
                    @endforeach
            </div>
        </div>

        <div class="flex-card-container listing">
            @forelse($products as $product)
                @include('partials.item', [' product' => $product, 'customText' => $customText])
            @empty
                <p class="empty">Oups ! Il n'y a plus aucun produit à réserver ! </p>
            @endforelse
        </div>
    </div>
@endsection