<div class="col-md-3 col-xs-12 item">
    <div class="card card-product">
        <div class="card-image">
            <a target="_blank" href="{{ $wish->product->link  }}"> <img class="img" src="@if (!is_null($wish->product->image)){{ $wish->product->image }} @else /images/image_not_found.jpg @endif"> </a>
        </div>
        <div class="table">
            <h6 class="category text-rose">
                {{ $wish->product->category->name }}
            </h6>
            <h4 class="card-caption">
                <a target="_blank" href="{{ $wish->product->link  }}">{{ $wish->product->title }}</a>
            </h4>
            <div class="price text-center">
               <h4>{{ $wish->product->price }} €</h4>
                <form action="{{ route('wishes.destroy', $wish->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-primary">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>