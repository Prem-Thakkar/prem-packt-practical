@foreach ($dataCollection as $product)
    <div class="col-12 col-md-6 col-lg-4 mb-3">
        <div class="card">
            <img class="card-img-top" src="{{ $product['image'] }}" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title"><a href="#" title="View Product">{{ $product['title'] }}</a>
                </h4>
            </div>
        </div>
    </div>
@endforeach
