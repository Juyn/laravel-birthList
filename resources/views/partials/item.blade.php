<div class="col-md-3 col-xs-12">
    <div class="card card-product">
        <div class="card-image">
            <a href="#"> <img class="img" src="https://medias.petit-bateau.com/Media/catalog/452x528/2764700_PRI.jpg"> </a>
        </div>
        <div class="table">
            <h6 class="category text-rose">
                        {{ $product->category->name }}

            </h6>
            <h4 class="card-caption">
                <a href="#">{{ $product->title }}</a>
            </h4>
            <div class="card-description">{{ $product->description }} </div>
            <div class="ftr">
                <div class="row">
                    <div class="price">
                        <h4>{{ $product->price }} €</h4>
                    </div>
                </div>
                <div class="row">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#itemModal" data-title="{{ $product->title }}" data-id="{{ $product->id }}">Réserver</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="itemModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        {!! Form::open(['route' => 'wish.store']) !!}
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="itemModal">Réserver un produit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ print(setting('site.reservation_custom_text')) }}<br>
                @csrf
                {!! Form::label('quantity', 'Quantité') !!}
                {!! Form::number('quantity', '1', ['max' => 2, 'min' => 1]) !!}
                {!! Form::hidden('productId', $product->id) !!}
            </div>
            <div class="modal-footer">
                {{--@if ($context === 'listing')--}}
                {{--<button type="button" class="btn btn-secondary float-left" data-dismiss="modal">Annuler</button>--}}
                {{--<button type="button" class="btn btn-primary float-right">Réserver</button>--}}
                {{--                @elseif($context === 'wishes')--}}
                {!! Form::submit('Envoyer', ['class' => 'btn btn-secondary float-left', 'data-dismiss' => '']) !!}
                {{--@endif--}}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
