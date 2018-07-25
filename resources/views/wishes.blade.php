@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($wishes as $wish)
                @include('partials.item', ['product' => $wish->product, 'context' => 'wishes']);
            @endforeach
        </div>
    </div>
@endsection