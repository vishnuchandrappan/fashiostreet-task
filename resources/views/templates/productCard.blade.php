<div class="col-sm-2 card-curved">
  <img src="/images/{{ $product->image }}" class="card-img-top" alt="{{ $product->image }}">
  <div class="card-body">
    <h5 class="card-title">{{ $product->name }}</h5>
  </div>
  <div class="card-footer">
    <h6 class="text"> ₹ {{ $product->price }}</h6>
  </div>
</div>
