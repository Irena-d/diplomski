@extends('layouts.app')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="\css\products.css">
@section('content')

<br>
<div class="container">
    <div class="row">
        <div class="col product">
            <div class="toy-image"> <img src="/images/toy1.jpg" width="200" height="200"></div>
            <div class="toy-name">  <p class="toy-name-text"> Dog Toy </p> </div>
            <div class="producer-name">  <p class="producer-name-text"> Producer: ToyZzz </p> </div>
            <div class="price-name"> <p class="price"> Price: <span class="price-number"> 10 kn </span> </p> </div>
        </div>
        <div class="col">
            <div class="food-image"> <img src="/images/toy2.jpg" width="200" height="200"></div>
            <div class="toy-name">  <p class="toy-name-text"> Dragon </p> </div>
            <div class="producer-name">  <p class="producer-name-text"> Producer: Dragonsyyy </p> </div>
            <div class="price-name"> <p class="price"> Price: <span class="price-number"> 30 kn </span> </p> </div>
         </div>
        <div class="col">
            <div class="food-image"> <img src="/images/toy3.png" width="200" height="200"></div>
            <div class="toy-name">  <p class="toy-name-text"> Ball </p> </div>
            <div class="producer-name">  <p class="producer-name-text"> Producer: BallBall </p> </div>
            <div class="price-name"> <p class="price"> Price: <span class="price-number"> 20 kn</span> </p> </div>
        </div>
    </div>
</div>

@endsection

