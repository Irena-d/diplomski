@extends('layouts.app')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
{{-- <link rel="stylesheet" href="css\services.css"> --}}
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="../js/app.js"></script>

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Breeders</div>
                    <div class="card-body">
                        <a href="{{ route('services.addbreeder') }}" class="btn btn-success btn-sm" title="Add New Breeder">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br />
                        <br />
                        <div class="table-responsive">
                            @foreach ($breeders as $b)
                                <table class="table">
                                    <tr>
                                        <th>#</th>
                                        <td>{{ $loop->iteration }}</td>
                                    </tr>
                                    <tr>
                                        <th>Breeder</th>
                                        <td>{{ $b->breeder }}</td>
                                    </tr>
                                    <tr>
                                        <th>Breed</th>
                                        <td>{{ $b->breed }}</td>
                                    </tr>
                                    <tr>
                                        <th>Age</th>
                                        <td>{{ $b->age }}</td>
                                    </tr>
                                    <tr>
                                        <th>Location</th>
                                        <td>{{ $b->location }}</td>
                                    </tr>
                                    <tr>
                                        <th>Price</th>
                                        <td>{{ $b->price }}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td>{{ $b->phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>Photo</th>
                                        <td>
                                            <img src="/public/images/{{ $b->photo }}" id="slik" alt="puppy image" width='100'
                                                height='100' class="img img-responsive puppy">
                                        </td>
                                    </tr>
                            @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            {{-- CHAT --}}
            <div class="col-md-3">
                <div class="card chatapp">
                    <header>
                        <div class="row">
                            <div class="col">
                                <div class="card-header chat-header"> Chat here now </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="text" name="username" id="username" placeholder="Enter username.." />
                            </div>
                        </div>
                    </header>
                    <br>
                    <div class="row" id="messages"></div>
                    <br> <br> <br> <br> <br> <br> <br>
                    <form id="message_form">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <input type="text" name="message" id="message_input" placeholder="Message.." /></div>
                            <div class="col">
                                 <button type="submit" id="message_send">Send</button></div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>

    <style>
        .chatapp {
            /* border: 2px solid grey; */
        }

        .chat-header {
            text-align: center
        }

        #username {
            width: 100%;
        }

        #message_input {
            width: 200%;
        }

        #message_send {
            float: right;
        }
        #message_form {
            margin-bottom:0;
        }
    </style>


<script>


@endsection
