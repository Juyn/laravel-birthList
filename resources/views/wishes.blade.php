@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @forelse($wishes as $wish)
                @include('partials.wish', ['wish' => $wish])
            @empty
                <p class="empty">Vous n'avez pas encore résévé de produit !</p>
            @endforelse
        </div>
    </div>
@endsection