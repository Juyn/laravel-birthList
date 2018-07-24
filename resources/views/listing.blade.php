@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                @include('partials.item', [' product' => $product])
            @endforeach
        </div>
    </div>
@endsection