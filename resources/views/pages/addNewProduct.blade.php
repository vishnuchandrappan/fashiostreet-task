@extends('templates.master')

@section('title','AddNewBook')

@section('main-content')
  <h2 class="text-center">Add New Product</h2>
  @include('templates.messages')
  <form action="/new" method="POST" class="jumbotron" enctype="multipart/form-data">

    {{ csrf_field() }}

    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="price">Price</label>
      <input type="text" name="price" id="price" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="image">Image</label>
      <input type="file" class="form-control-file" id="image" name="image" required>
    </div>

    <div class="text-center">
      <input type="submit" name="submit" value="Add New Product" class="btn btn-danger">
    </div>

  </form>

@endsection
