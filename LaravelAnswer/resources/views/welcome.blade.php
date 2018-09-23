<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">


    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif


        <div class="container">

            <div class="jumbotron">
                <h1>Ask a Question</h1>
                <p>
                    Ask any Question you want to know about Laravel and we will get Answer for you
                </p>

                <p>
                    <a href="#" class ="btn btn-primary btn-lg" role="button">Ask now</a>
                </p>


            </div>
                <h2>Recent Question :</h2>
        </div>


        </div>
    </body>
</html>
