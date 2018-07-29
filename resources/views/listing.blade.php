@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="flex-card-container">
            @foreach ($products as $product)
                @include('partials.item', [' product' => $product])
            @endforeach
        </div>
    </div>
@endsection