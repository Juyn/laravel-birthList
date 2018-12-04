@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="card">
            <div class="note">
                <h1>Mot des parents</h1>
                <p>
                    Et voilà ! Kyllian a décidé de venir découvrir le monde !<br/>
                    Tout va très bien, aussi bien pour Bébé que pour Elsa et Xavier ! <br/><br/>

                    Nous apprenons à faire connaissance, et, on peut vous dire que c'est un vrai bonheur. Kyllian est un amour de bébé, il nous a déjà largement conquis ! <br/><br/>

                    Une chose n'a pas changé: on ne sait toujours pas ce qui est réservé, ni par qui, mais, maintenant plus que jamais il est  important de penser  à réserver sur le site avant d'acheter, pour éviter les doublons et les mauvaises suprises !
                </p>
            </div>
        </div>
        <div class="filters card">
            <h2>Filtrer par Categories</h2>
            <div id="filters" class="d-flex justify flex-wrap">
                @foreach ($categories as $category)
                    @if (count($category->products))
                       <a href="#" data-id="{{ $category->id }}" class="filter input badge-secondary">{{ $category->name }}</a>
                    @endif
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