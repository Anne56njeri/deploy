<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>One Love</title>




        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>


/*
*  Basic Reset
*/

*,
*:after,
*:before {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/**
 * Basics Styles
 */
html {
    font-size: 62.5%;
}
body {
    background-color: #eee;
    font-family: Roboto;
    font-weight: 400;
    font-size: 1.6em;
    line-height: 1.6;
    color: #666;
}

a {
    text-decoration: none;
    color: #3498db;
}
    a:hover {
        color: #2980b9;
    }

h2 {
    line-height: 1.2;
    margin-bottom: 1.6rem;
}

.wrapper {
    max-width: 400px;
    margin: 50px auto;
    padding-left: 1em;
    padding-right: 1em;
}

/**
 * Helpers
 */
.border-tlr-radius {
    border-top-left-radius: 2px;
    border-top-right-radius: 2px;
}

.text-center { text-align: center; }

.radius { border-radius: 2px; }

.padding-tb { padding-top: 1.6rem; padding-bottom: 1.6rem;}

.shadowDepth0 { box-shadow: 0 1px 3px rgba(0,0,0, 0.12); }

.shadowDepth1 {
   box-shadow:
        0 1px 3px rgba(0,0,0, 0.12),
        0 1px 2px rgba(0,0,0, 0.24);
}


/**
 * Card Styles
 */

.card {
    background-color: #fff;
    margin-bottom: 1.6rem;
}

.card__padding {
    padding: 1.6rem;
}

.card__image {
    min-height: 100px;
    background-color: #eee;
}
    .card__image img {
        width: 100%;
        max-width: 100%;
        display: block;
    }

.card__content {
    position: relative;
}

/* card meta */
.card__meta time {
    font-size: 1.5rem;
    color: #bbb;
    margin-left: 0.8rem;
}

/* card article */
.card__article a {
    text-decoration: none;
    color: #444;
    transition: all 0.5s ease;
}
    .card__article a:hover {
        color: #2980b9;
    }

/* card action */
.card__action {
    overflow: hidden;
    padding-right: 1.6rem;
    padding-left: 1.6rem;
    padding-bottom: 1.6rem;
}

.card__author {}

    .card__author img,
    .card__author-content {
        display: inline-block;
        vertical-align: middle;
    }

    .card__author img{
        border-radius: 50%;
        margin-right: 0.6em;
    }

.card__share {
    float: right;
    position: relative;
    margin-top: -42px;
}

.card__social {
    position: absolute;
    top: 0;
    right: 0;
    visibility: hidden;
    width: 160px;
    transform: translateZ(0);
    transform: translateX(0px);
    transition: transform 0.35s ease;
}
    .card__social--active {
        visibility: visible;
        /*z-index: 3;*/
        transform: translateZ(0);
        transform: translateX(-48px);
        transition: transform 0.35s ease;
    }

.share-toggle {
    z-index: 2;
}
.share-toggle:before {
    content: "\f1e0";
    font-family: 'FontAwesome';
    color: #3498db;
}
    .share-toggle.share-expanded:before {
        content: "\f00d";
    }

.share-icon {
    display: inline-block;
    width: 48px;
    height: 48px;
    line-height: 48px;
    text-align: center;
    border-radius: 50%;
    background-color: #fff;
    transition: all 0.3s ease;
    outline: 0;

    box-shadow:
            0 2px 4px rgba(0,0,0, 0.12),
            0 2px 4px rgba(0,0,0, 0.24);
}
    .share-icon:hover,
    .share-icon:focus {
        box-shadow:
            0 3px 6px rgba(0,0,0, 0.12),
            0 3px 6px rgba(0,0,0, 0.24);

        -webkit-transform: scale(1.2);
        -moz-transform: scale(1.2);
        -ms-transform: scale(1.2);
        -o-transform: scale(1.2);
        transform: scale(1.2);
    }

.facebook {
    background-color: #3b5998;
}
.twitter {
    background-color: #00abe3;
}
.googleplus {
    background-color: #d3492c;
}

.facebook,
.twitter,
.googleplus {
    color: #fff;
}

    .facebook:hover,
    .twitter:hover,
    .googleplus:hover {
        color: #eee;
      }
      .button {
        border-radius: 2px;
        background-color:transparent;
        border: 2px solid yellowgreen;
        color: white;
        text-align: center;
        font-size: 20px;
        padding: px;
        width: 350px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;

      }

      .button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }

      .button span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
      }

      .button:hover span {
        padding-right: 25px;
      }

      .button:hover span:after {
        opacity: 1;
        right: 0;
        .
      }
      .active{
        background-color: grey;
    	color: #fff;
      }
      .one {
        border-bottom: 4px solid steelblue ;
        padding:4px;
}
</style>
</head>
<body>
  <div id="app">
      <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color:">
          <div class="container">
              <a class="navbar-brand" href="{{ url('/') }}" style=" ">
                Home
              </a>
              <a href="{{ url('/proposal/create') }}" class="nav-link active " style="font-size:15px; color:;">Add Proposal<span class="sr-only">(current)</span></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav mr-auto">

                  </ul>

                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                      <!-- Authentication Links -->
                      @guest
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                          </li>
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                      @endguest
                  </ul>
              </div>
          </div>
      </nav>

      <main class="py-4">
          @yield('content')
      </main>
  </div>
  <div class="jumbotron" style="background-image:url(/images/front.jpg);height:400px;background-repeat: no-repeat;background-position:center ;  background-size: cover;">
    <center><h2  style="color:white;">Proposal Management System</h2></center>
  <center><button class="button" style=""><span>All Proposal</span></button><center>
  </div>
  <div class="container">

<div class="row">
@foreach ($stage as $sta)
   <div class="col-md-4 col-sm-6 col-x6-12">

 <div class="wrapper">

            <div class="card radius shadowDepth1">
                <div class="card__image border-tlr-radius">
                    <img src="http://lorempixel.com/400/200/sports/" alt="image" class="border-tlr-radius">
                </div>

                <div class="card__content card__padding">
                    <div class="card__share">
                        <div class="card__social">
                            <a class="share-icon facebook" href="#"><span class="fa fa-facebook"></span></a>
                            <a class="share-icon twitter" href="#"><span class="fa fa-twitter"></span></a>
                            <a class="share-icon googleplus" href="#"><span class="fa fa-google-plus"></span></a>
                        </div>

                        <a id="share" class="share-toggle share-icon" href="#"></a>
                    </div>

                    <div class="card__meta">
                        <a href="#">Proposal</a>
                        <time>17th March</time>
                    </div>


                    <article class="card__article">
                        <h2><a href="#">Proposal</a></h2>

                        <p>{{$sta ->Proposal}}</p>
                        <p>{{$sta ->date}}</p>
                    </article>
                </div>

                <div class="card__action">

                    <div class="card__author">
                        <img src="http://lorempixel.com/40/40/sports/" alt="user">
                        <div class="card__author-content">
                            <p>By{{$sta ->name}}</p>

                        </div>
                    </div>
                </div>
            </div>


        </div>

      </div>
      @endforeach
    </div>
    </div>
      </body>
      </html>
