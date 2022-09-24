@extends('layouts.app')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
{{-- <link rel="stylesheet" href="css\services.css"> --}}
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="module" src="../js/app.js"></script>

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Contact us!!!</h2>
            </div>
        </div>
        <div class="row">
            @if($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong> {{$message}} </strong>
            @endif
        </div>
        <div class="row">
           <form method="post" action="sendmail/send" class="form-group">
            @csrf
            <label>Your name: </label>
            <input type="text" name="name" id="name" class="form-control">
            <label>Your message: </label>
            <textarea type="text" name="message" id="message" class="form-control"></textarea>
           <br> <input type="submit" name="send" value="Send message" class="btn btn-success add-final-btn"></button>
           </form>
        </div>
    </div>
@endsection
