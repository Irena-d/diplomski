@extends('layouts.app')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css\home.css">

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="form-outline">
                    <form action="{{ route('search') }}" method="GET">
                        <div class="input-group mb-3">
                            <input type="text" name="search" required id="from2" class="form-control"
                                placeholder="Search breeds here . . ." />
                            <div class="input-group-append">
                                <button type="submit" id="search-btn" class="btn btn-outline-secondary">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>



    @if ($doggies->isNotEmpty())
        @foreach ($doggies as $dog)
            <div class="dogs-list">
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

            </div>
        @endforeach
    @else
        <div>
            <h2>No dogs found</h2>
        </div>
    @endif


@endsection
