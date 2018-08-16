@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="card note">
            <p>
                Notre petit garçon (ah, tu veux connaitre le prénom, n'est ce pas ?) devrait prendre sa première bouffée d'air frais (vraiment frais !) en Décembre et c'est fou tout ce dont un bébé a besoin !<br/>
                Si tu meurs d'envie de faire un cadeau de bienvenue à notre petit gars, et que tu es en panne d'inspiration, nous avons réuni ici quelques idées.<br/><br/>
                Ah oui ! Ni Maman, ni Papa ne peuvent voir ce qui a été réservé ... <br>
                Maman a insisté pour garder la surprise, même si c'est Papa qui a créé le site ;-)

            </p>
        </div>
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