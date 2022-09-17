@extends('layouts.app')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="\css\products.css">
@section('content')


<br>
<div class="container">
    <div class="row">
        <div class="col product">
            <div class="food-image"> <img src="/images/food1.png" width="200" height="200"></div>
            <div class="food-name"> <p class="food-name-text"> Darling </p> </div>
            <div class="producer-name"> <p class="producer-name-text"> Producer: Purina  </p> </div>
            <div class="price-name"> <p class="price"> Price: <span class="price-number"> 100 kn</span> </p> </div>
        </div>
        <div class="col product">
            <div class="food-image"> <img src="/images/food2.jpg" width="200" height="200"></div>
            <div class="food-name"> <p class="food-name-text"> Pedrigree </p> </div>
            <div class="producer-name"> <p class="producer-name-text"> Producer: Mars Petcare  </p> </div>
            <div class="price-name"> <p class="price"> Price: <span class="price-number"> 300 kn</span> </p> </div>
         </div>
        <div class="col product">
            <div class="food-image"> <img src="/images/food3.jpg" width="200" height="200"></div>
            <div class="food-name"> <p class="food-name-text"> Friskies </p> </div>
            <div class="producer-name"> <p class="producer-name-text"> Producer: Purina  </p> </div>
            <div class="price-name"> <p class="price"> Price: <span class="price-number"> 200 kn</span> </p> </div>
        </div>
    </div>
</div>

@endsection

