<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ABOUT ME</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;

            font-family: 'Nunito', sans-serif;
            font-weight: 200;
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

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
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
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Aidan's Laravel
        </div>
        <br>
        <div class="links">
            <p>I am writing this text in the 2nd page of my Laravel website.

                My name is Aidan McGourty and I am 23 years old. Laravel and Heroku are both impressive programs that can be leveraged to create secure and easily revised websites.

                I love to cook and my favorite food is chicken.

                I am from a small town called Long Valley.

                Please find information on them here: https://en.wikipedia.org/wiki/Long_Valley,_New_Jersey

            </p>
        </div>
        <br>
        <div class="links">
            <a href="https://agile-cliffs-34402.herokuapp.com">home</a>
            <a href="C:\Users\Aidan\PhpstormProjects\Laravel7\resources\views\aboutme.html">link</a>

        </div>
    </div>
</div>
</body>
</html>
