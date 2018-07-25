<div class="col-md-3">
    <div class="card card-product">
        <div class="card-image">
            <a href="#"> <img class="img" src="https://medias.petit-bateau.com/Media/catalog/452x528/2764700_PRI.jpg"> </a>
        </div>
        <div class="table">
            <h6 class="category text-rose">Clothing</h6>
            <h4 class="card-caption">
                <a href="#">{{ $product->title }}</a>
            </h4>
            <div class="card-description">{{ $product->description }} </div>
            <div class="ftr">
                <div class="price">
                    <h4>{{ $product->price }} €</h4> </div>
                <div class="stats">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-title="{{ $product->title }}" data-id="{{ $product->id }}">Open modal for @mdo</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                {!! Form::open(['route' => 'wish.store']) !!}
                @csrf
                {!! Form::label('name', 'value') !!}
                {!! Form::checkbox('name', 'value', true) !!}
                {!! Form::radio('radio_name', 'value', true) !!}
                {!! Form::submit('envoyer') !!}
                {!! Form::close() !!}

                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                @if ($context === 'listing')
                    <button type="button" class="btn btn-secondary float-left" data-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary float-right">Réserver</button>
                @elseif($context === 'wishes')
                    <button type="button" class="btn btn-secondary float-left" data-dismiss="modal">Supprimer</button>
                @endif
            </div>
        </div>
    </div>
</div>