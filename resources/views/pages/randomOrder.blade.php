@extends('templates.master')

@section('title','Random Listing')

@section('main-content')

  <h2 class="text-center">Random Listing</h2>

  <div class="row justify-content-center">

    @foreach($products as $product)
      @include('templates.productCard')
    @endforeach

  </div>

@endsection
