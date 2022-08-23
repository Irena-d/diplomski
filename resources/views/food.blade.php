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
            <div class="food-image"> <img src="/images/food1.png" width="200" height="200"></div>
            <div class="row"> <div class="col"> <p class="name"> Name: </p> </div> <div class="col" > <p id="food-name"> Darling </p> </div> </div>
            <div class="row"> <div class="col"> <p class="producer"> Producer: </p> </div> <div class="col" > <p id="producer-name"> Purina </p> </div> </div>
            <div class="row"> <div class="col"> <p class="price"> Price: </p> </div> <div class="col" > <p id="price-number"> 100 </p> </div> </div>
        </div>
        <div class="col">
            <div class="food-image"> <img src="/images/food2.jpg" width="200" height="200"></div>
            <div class="row"> <div class="col ime"> <p class="name"> Name: </p> </div> <div class="col" > <p id="food-name"> Pedigree </p> </div> </div>
            <div class="row"> <div class="col"> <p class="producer"> Producer: </p> </div> <div class="col" > <p id="producer-name"> Mars Petcare </p> </div> </div>
            <div class="row"> <div class="col"> <p class="price"> Price: </p> </div> <div class="col" > <p id="price-number"> 300 </p> </div> </div>
         </div>
        <div class="col">
            <div class="food-image"> <img src="/images/food3.jpg" width="200" height="200"></div>
            <div class="row"> <div class="col"> <p class="name"> Name: </p> </div> <div class="col" > <p id="food-name"> Friskies </p> </div> </div>
            <div class="row"> <div class="col"> <p class="producer"> Producer: </p> </div> <div class="col" > <p id="producer-name"> Purina </p> </div> </div>
            <div class="row"> <div class="col"> <p class="price"> Price: </p> </div> <div class="col" > <p id="price-number"> 200 </p> </div> </div>
        </div>
    </div>
</div>

@endsection

