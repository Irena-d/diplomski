
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
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

</body>
</html>
