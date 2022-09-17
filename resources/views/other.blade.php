@extends('layouts.app')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="\css\products.css">
@section('content')


<br>

<div class="container">
    <div class="row">
        <div class="col product">
            <div class="other-image"> <img src="/images/other/bed1.jpg" width="200" height="200"></div>
            <div class="other-name"> <p class="other-name-text"> Dog Bed </p> </div>
            <div class="producer-name"> <p class="producer-name-text"> Producer: ToyZzz </p> </div>
            <div class="price-name"> <p class="price"> Price: <span class="price-number"> 1200 kn </span> </p> </div>
        </div>
        <div class="col product">
            <div class="other-image"> <img src="/images/other/bowl1.jpg" width="200" height="200"></div>
            <div class="other-name"> <p class="other-name-text"> Double Bowl </p> </div>
            <div class="producer-name"> <p class="producer-name-text"> Producer: Dragonsyyy </p> </div>
            <div class="price-name"> <p class="price"> Price: <span class="price-number"> 50 kn </span> </p> </div>
         </div>
        <div class="col">
            <div class="other-image"> <img src="/images/other/bowl2.jpg" width="200" height="200"></div>
            <div class="other-name"> <p class="other-name-text"> Bowl for doggos </p> </div>
            <div class="producer-name"> <p class="producer-name-text"> Producer: BallBall </p> </div>
            <div class="price-name"> <p class="price"> Price: <span class="price-number"> 123 kn </span> </p> </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col product">
            <div class="other-image"> <img src="/images/other/pov1.jpg" width="200" height="200"></div>
            <div class="other-name"> <p class="other-name-text"> Leash </p> </div>
            <div class="producer-name"> <p class="producer-name-text"> Producer: BallBall </p> </div>
            <div class="price-name"> <p class="price"> Price: <span class="price-number"> 85 kn </span> </p> </div>
        </div>
        <div class="col product">

        </div>
        <div class="col product">

        </div>
    </div>
</div>

@endsection

