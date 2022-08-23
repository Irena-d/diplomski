@extends('layouts.app')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css\products.css">
@section('content')


{{-- <div class="container">
    <div class="row">
        <div class="col">
            Sortiraj po ...
            <button> najjeftinije </button>
            <button> najskuplje </button>
        </div>
    </div>
</div> --}}

<br>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="toy-image"> <img src="/images/other/bed1.jpg" width="200" height="200"></div>
            <div class="row"> <div class="col"> <p class="name"> Name: </p> </div> <div class="col" > <p id="food-name"> Dog Bed </p> </div> </div>
            <div class="row"> <div class="col"> <p class="producer"> Producer: </p> </div> <div class="col" > <p id="producer-name"> ToyZzz </p> </div> </div>
            <div class="row"> <div class="col"> <p class="price"> Price: </p> </div> <div class="col" > <p id="price-number"> 1200 </p> </div> </div>
        </div>
        <div class="col">
            <div class="food-image"> <img src="/images/other/bowl1.jpg" width="200" height="200"></div>
            <div class="row"> <div class="col ime"> <p class="name"> Name: </p> </div> <div class="col" > <p id="food-name"> Double Bowl </p> </div> </div>
            <div class="row"> <div class="col"> <p class="producer"> Producer: </p> </div> <div class="col" > <p id="producer-name"> Dragonsyyy </p> </div> </div>
            <div class="row"> <div class="col"> <p class="price"> Price: </p> </div> <div class="col" > <p id="price-number"> 50 </p> </div> </div>
         </div>
        <div class="col">
            <div class="food-image"> <img src="/images/other/bowl2.jpg" width="200" height="200"></div>
            <div class="row"> <div class="col"> <p class="name"> Name: </p> </div> <div class="col" > <p id="food-name"> Bowl for doggos </p> </div> </div>
            <div class="row"> <div class="col"> <p class="producer"> Producer: </p> </div> <div class="col" > <p id="producer-name"> BallBall </p> </div> </div>
            <div class="row"> <div class="col"> <p class="price"> Price: </p> </div> <div class="col" > <p id="price-number"> 123 </p> </div> </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="food-image"> <img src="/images/other/pov1.jpg" width="200" height="200"></div>
            <div class="row"> <div class="col"> <p class="name"> Name: </p> </div> <div class="col" > <p id="food-name"> Leash </p> </div> </div>
            <div class="row"> <div class="col"> <p class="producer"> Producer: </p> </div> <div class="col" > <p id="producer-name"> BallBall </p> </div> </div>
            <div class="row"> <div class="col"> <p class="price"> Price: </p> </div> <div class="col" > <p id="price-number"> 85 </p> </div> </div>
        </div>
    </div>
</div>

@endsection

