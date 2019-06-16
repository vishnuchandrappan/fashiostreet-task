@extends('templates.master')

@section('title','Random Listing')

@section('main-content')

  <h2 class="text-center">Random Listing</h2>
  <a href="{{ url()->full() }}">
    <button style="margin-bottom:20px" class="btn btn-success">Refresh</button>
  </a>

  <div class="row justify-content-between">

    @foreach($products as $product)
      @include('templates.productCard')
    @endforeach

  </div>

@endsection
