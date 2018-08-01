@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($wishes as $wish)
                @include('partials.wish', ['product' => $wish->product])
            @endforeach
        </div>
    </div>
@endsection