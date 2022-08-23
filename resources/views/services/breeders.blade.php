@extends('layouts.app')

@section('content')

    <div class="chatapp">
        <header>
            <h1> Chat </h1>
            <input type="text" name="username" id="username" placeholder="Enter username" />
        </header>
        <br>
        <div id="messages"></div>
        <br>
        <form id="message_form">
            @csrf
            <input type="text" name="message" id="message_input" placeholder="Message.." />
            <button type="submit" id="message_send">Send</button>
        </form>
    </div>

    <script src="./js/app.js"></script>

@endsection
