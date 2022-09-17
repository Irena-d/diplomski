@extends('layouts.app')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css\home.css">

@section('content')

<div class="container search-container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
                <div class="form-outline">
                    <form type="get" action="{{ url('/search') }}" class="search-form1">
                        <div class="input-group mb-3">
                        <input type="search" id="form1" name="search" class="form-control" placeholder="Search breeds here. . . "/>
                        <div class="input-group-append">
                            <button type="submit" id="search-btn" class="btn btn-outline-secondary">Search</button>
                        </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>

@foreach ($dogs as $dog)
<div class="container">
    <div class="row about-dogs">

        <div class="col-sm-5 pr-1">
         <img src="{{$dog['image']}}" class="image-part" alt="Dog's image here" width="200" height="300">
        </div>

        <div class="col-sm-7 pl-1">
            <div class="row">
                <ul class="title-data-ul"> <li class="dog-title-li"><h3 class="dog-title">Breed:</h3></li> <li class="dog-data-li"><p class="dog-data">{{$dog['name']}}</p></li> </ul>
            </div>
            <div class="row">
                <ul class="title-data-ul"> <li class="dog-title-li"><h3 class="dog-title">From:</h3></li> <li class="dog-data-li"><p class="dog-data">{{$dog['from']}}</p></li> </ul>
            </div>
            <div class="row">
                <ul class="title-data-ul"> <li class="dog-title-li"><h3 class="dog-title">Weight:</h3></li> <li class="dog-data-li"> <p class="dog-data">{{$dog['weight']}} kg</p></li> </ul>
            </div>
            <div class="row">
                <ul class="title-data-ul"> <li class="dog-title-li"><h3 class="dog-title">Height:</h3></li> <li class="dog-data-li"> <p class="dog-data">{{$dog['height']}} cm</p></li> </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h3 class="dog-title">Description:</h3>
            <p class="dog-data-des">{{$dog['description']}}</p>
        </div>
    </div>
</div>

{{-- <h3>ID:</h3> <p>{{$dog['id']}}</p>
<h3>Breed:</h3> <p>{{$dog['name']}}</p>
<h3>From:</h3> <p>{{$dog['from']}}</p>
<h3>Weight:</h3> <p>{{$dog['weight']}}</p>
<h3>Height:</h3> <p>{{$dog['height']}}</p> --}}
@endforeach



@endsection



