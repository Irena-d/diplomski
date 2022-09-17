@extends('layouts.app')

@section('content')
<div class="container">
<div class="card">
  <div class="card-header">Breeder Add Page</div>
  <div class="card-body">

      <form action="/create" method="post" enctype="multipart/form-data" class="form-group">
        @csrf
        <label>Breeder</label><br>
        <input type="text" name="breeder" id="breeder" class="form-control"><br>
        <label>Breed</label><br>
        <input type="text" name="breed" id="breed" class="form-control"><br>
        <label>Age</label><br>
        <input type="text" name="age" id="age" class="form-control"><br>
        <label>Location</label><br>
        <input type="text" name="location" id="location" class="form-control"><br>
        <label>Price</label><br>
        <input type="text" name="price" id="price" class="form-control"><br>
        <label>Phone</label><br>
        <input type="text" name="phone" id="phone" class="form-control"><br>
        <input class="form-control" name="photo" type="file" id="photo">
        <input type="submit" value="ADD" class="btn btn-success add-final-btn"><br>
    </form>

  </div>
</div>
</div>

<style>
.add-final-btn {
    width: 50%;
    display: block;
    margin : 0 auto;
    margin-top: 3%;
}

</style>
@endsection
