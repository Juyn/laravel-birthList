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
                @if (!is_null($wish->product->link))
                    <a target="_blank" class="external" href="{{ $wish->product->link  }}">{{ $wish->product->title }} </a>
                @else
                    {{ $wish->product->title  }}
                @endif
            </h4>

            <div class="card-caption">Quantité: {{ $wish->quantity }}</div>

            <div class="price text-center">
                @if ($wish->product->price > 0)
                    <h4> {{ $wish->product->price }} € </h4>
                @elseif ($wish->product->brandFree)
                    <h5><strong>Choix libre</strong></h5>
                @else
                    <h4> {{ $wish->product->price }} € </h4>
                @endif
                <form action="{{ route('wishes.destroy', $wish->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-primary">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>