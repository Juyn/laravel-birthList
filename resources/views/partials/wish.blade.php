<div class="col-md-3 col-xs-12 item">
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
            <div class="price text-center">
               <h4>{{ $product->price }} €</h4>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#itemModal" data-id="{{ $product->id }}">Supprimer</button>
            </div>
        </div>
    </div>
</div>