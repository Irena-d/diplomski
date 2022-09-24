@extends('layouts.app')

@section('content')
<div class="container">
<div class="card">
  <div class="card-header">Vet Add Page</div>
  <div class="card-body">

      <form action="/create" method="post" enctype="multipart/form-data" class="form-group">
        @csrf
        <label>Name</label><br>
        <input type="text" name="educator" id="educator" class="form-control"><br>
        <label>My service</label><br>
        <input type="text" name="myservice" id="myservice" class="form-control"><br>
        <label>Location</label><br>
        <input type="text" name="location" id="location" class="form-control"><br>
        <label>E-mail</label><br>
        <input type="text" name="mail" id="mail" class="form-control"><br>
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
