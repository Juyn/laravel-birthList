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
                <a target="_blank" href="{{ $product->link  }}">{{ $product->title }}</a>
            </h4>
            <div class="text-center">@if ($product->availableQuantity > 0) Maman en veux: {{ $product->availableQuantity }} @else Déjà réservé !@endif</div><br>
            <div class="price text-center">
               <h4>{{ $product->price }} €</h4>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#itemModal" data-title="{{ $product->title }}" data-id="{{ $product->id }}" data-quantity="{{ $product->availableQuantity }}">Réserver</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="itemModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        {!! Form::open(['route' => 'wishes.store']) !!}
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="itemModal">Réserver un produit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! $customText  !!}
                @csrf
                <p>D'après la Maman, on pourrait en avoir besoin de <span class="quantity">0</span> encore...</p>
                {!! Form::label('quantity', 'Tu veux en réserver combien ?') !!}
                {!! Form::number('quantity', '1', ['max' => 2, 'min' => 1]) !!}
                {!! Form::hidden('productId', $product->id, ['class' => 'productId']) !!}
            </div>
            <div class="modal-footer">
                {!! Form::submit('Envoyer', ['class' => 'btn btn-secondary float-left', 'data-dismiss' => '']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
