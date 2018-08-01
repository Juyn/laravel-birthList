@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="filters card">
            <h2>Filtres</h2>
            <div id="example-optionClass-container">
                <select id="filterCategories" multiple="multiple">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="flex-card-container">
            @foreach ($products as $product)
                @include('partials.item', [' product' => $product, 'customText' => $customText])
            @endforeach
        </div>
    </div>
@endsection