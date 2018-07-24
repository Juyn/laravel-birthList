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
                    <button type="button" rel="tooltip" title="" class="btn btn-just-icon btn-simple " data-original-title="Saved to Wishlist"> <i class="fa fa-shopping-cart"></i> </button>
                </div>
            </div>
        </div>
    </div>
</div>