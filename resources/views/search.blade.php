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
                    <div class="row">
                        <div class="col">
                            {{-- ovo ne radi --}}
                            {{-- <img src="{{ asset('images/breeds'.$dog->image) }}" alt="Dog's image here"> --}}
                            {{-- samo da imam nesto --}}
                            <img src="images/husky.jpg">
                        </div>
                        <div class="col">
                            <div class="row">
                            <h3>Breed:</h3>
                            <p>{{ $dog['name'] }}</p>
                        </div>
                        <div class="row">
                            <h3>From:</h3>
                            <p>{{ $dog['from'] }}</p>
                        </div>
                        <div class="row">
                            <h3>Weight:</h3>
                            <p>{{ $dog['weight'] }} kg</p>
                        </div>
                        <div class="row">
                            <h3>Height:</h3>
                            <p>{{ $dog['height'] }} cm</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h3>Description:</h3>
                        <p>{{ $dog['description'] }}</p>
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
