@extends('templates.master')

@section('title','Ordered Listing')

@section('main-content')

  <h2 class="text-center">Ordered Listing</h2>
  <div class="card-deck">

    @foreach($products as $product)
      @include('templates.productCard')
    @endforeach

  </div>

@endsection
