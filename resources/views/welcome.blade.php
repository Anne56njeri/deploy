<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                background-image:url('/images/front.jpg');
                background-repeat: no-repeat;
                background-position:center ;
                background-size: cover;
                height: 500px;
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
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }



}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
          <!--  @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                        <a href="{{ route('admin') }}">Admin</a>
                    @endauth
                </div>
            @endif-->

            <div class="content" style="">
                <div class="title m-b-md" style="color:white;">
                    One Love

                </div>


                <div class="links">
                    <a href="{{ url('/home') }} " style="color:white;">Home</a>
                    <a href=" {{ route('register') }}" style="color:white;">Register</a>

                    <a href=" {{ route('admin') }}"style="color:white;">Admin</a>
                    <a href=" {{ route('login') }}"style="color:white;">Login</a>

                </div>
            </div>
        </div>
    </body>
</html>
