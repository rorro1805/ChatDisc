<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway';
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .contents {
            text-align: center;
            align-items: center;
            height: inherit;
        }

        #contents {
            width: 500px;
            margin: auto;
        }

        #wrapper {
            height: 520px;
            overflow: auto;
        }

        .panelChat {
            text-align: center;
            background-color: #d9edf7;
            font-size: 15px;
            height: inherit;
        }

        .form input, .form textarea {
            border: 1px solid #bfc2c4;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15);

        }

        .title {
            font-size: 25px;
            height: 250px;
            text-align: center;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div>
    <div class="title">
        <div id="contents">
            <div id="wrapper">
                <div class="bubble-container">
                    <div class="bubble-container">
                <span class="bubble">
                    <img class="bubble-avatar" src=""/>
                    <div class="bubble-text"><p>Bienvenido al Chat.</p></div>
                    <span class="bubble-quote"/>
                </span>
                    </div>
                    <ul>
                        @if(Route::has('mensaje'))
                            @foreach($mensajes as $mensaje)
                                <li>{{$mensaje -> usuario}}</li>
                            @endforeach
                        @endif
                    </ul>
                    <!-- CHAT_CONTENT-->
                </div>
            </div>
        </div>
    </div>
    <center>
        <div class="form">
            <form action="../../app/Http/Controllers/chatController.php" method="post">
                <input type="text" name="mensaje">
                <input type="submit">
            </form>
        </div>
    </center>

</div>
</body>
</html>