@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="card">
            <div class="note">
                <h1>Mot des parents</h1>
                <p>
                    Notre petit garçon devrait prendre sa première bouffée d'air frais en Décembre, et, c'est fou tout ce dont un bébé à besoin !<br/>
                    Si tu meurs d'envie de faire un cadeau de bienvenue à notre petit gars, et que tu es en panne d'inspiration, nous avons réuni ici quelques idées.<br/><br/>
                    Ah oui ! Ni Maman, ni Papa ne peuvent voir ce qui a été réservé ... <br>
                    Maman a insisté pour garder la surprise, même si c'est Papa qui a créé le site ;-)
                </p>
            </div>
        </div>
        <div class="filters card">
            <h2>Filter par Categories</h2>
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