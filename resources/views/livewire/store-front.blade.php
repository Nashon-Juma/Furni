<div class="untree_co-section product-section before-footer-section">
    <div class="container">
        <div class="row">
            @foreach($this->products as $product)
            <div class="col-12 col-md-4 col-lg-3 mb-5">
                <a class="product-item" href="{{ route('product', $product) }}">
                    <img src="{{ $product->mainImage->path }}" class="img-fluid product-thumbnail">
                    <h3 class="product-title"> {{ $product->name }} </h3>
                    <strong class="product-price"> {{ $product->price }} </strong>

                    <span class="icon-cross">
                        <img src="images/cross.svg" class="img-fluid">
                    </span>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
