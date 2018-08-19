<div class="col-md-3 col-xs-12 item @if ($product->availableQuantity < 1) disabledItem @endif">
    <div class="card card-product">
        <div class="card-image">
            <a target="_blank" href="{{ $product->link  }}"> <img class="img" src="@if (!is_null($product->image)){{ $product->image }} @else /images/image_not_found.jpg @endif"> </a>
        </div>
        <div class="table">
            <h6 class="category text-rose">
                {{ $product->category->name }}
            </h6>
            <h4 class="card-caption">
                @if (!is_null($product->link))
                    <a target="_blank" class="external" href="{{ $product->link  }}">{{ $product->title }} </a>
                @else
                    {{ $product->title  }}
                @endif
            </h4>
            <div class="text-center description">{{ $product->description }}</div>
            <div class="text-center">@if ($product->availableQuantity > 0 && $product->quantity != 99) Bébé en veut {{ $product->availableQuantity }} @elseif ($product->quantity == 99) Bébé en veut plein @else Déjà réservé !@endif</div>
            <br/>
            <div class="price text-center">
                @if ($product->price > 0)
                    <h4> {{ $product->price }} € </h4>
                @elseif ($product->brandFree)
                    <h5><strong>Choix libre</strong></h5>
                @else
                    <h4> {{ $product->price }} € </h4>
                @endif
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#itemModal" data-title="{{ $product->title }}" data-link="{{ $product->link }}" data-id="{{ $product->id }}" data-quantity="{{ $product->availableQuantity }}">Offrir</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="itemModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        {!! Form::open(['route' => 'wishes.store']) !!}
        <div class="modal-content">

            <div class="modal-header">
                <h5> C'est trop cool !</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Pour éviter les doublons, nous avons besoin que tu indique aux autres la quantité que tu souhaites offrir.<br/><br/>

                    Et pas de soucis, tu peux voir (et supprimer) ce que tu as réservé via la page <a target="_blank" href="{{ route('wishes.index') }}">"Mes réservations"</a><br/><br/>
                    <span class="little">PS: Il ne s'agit pas d'un achat, il faut passer par le magasin ou son site Internet (on a mis le lien ci-dessous).</span>

                <div class="text-center">
                    <a href="#" target="_blank" class="externalLinkProduct little text-center">Voir ou acheter le produit</a><br/><br/>
                </div>
                </p>
                <hr>
                @csrf
                @if ($product->availableQuantity > 1 && $product->quantity !== 99)
                    {!! Form::label('quantity', 'Combien souhaites-tu en réserver ?') !!}
                    {!! Form::number('quantity', '1', ['max' => $product->availableQuantity, 'min' => 1]) !!}
                @elseif ($product->quantity == 99)
                    {!! Form::label('quantity', 'Combien souhaites-tu en réserver ?') !!}
                    {!! Form::number('quantity', '1', ['min' => 1]) !!}
                @endif
                {!! Form::hidden('quantity', '1') !!}
                {!! Form::hidden('productId', $product->id, ['class' => 'productId']) !!}
                {!! Form::submit('Réserver', ['class' => 'float-right btn btn-secondary', 'data-dismiss' => '']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
