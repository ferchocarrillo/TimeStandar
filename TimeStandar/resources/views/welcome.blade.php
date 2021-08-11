<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gestor de Tiempos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, {
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
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;

                font-size: 22px;
                background: #2596be;
                width: 500px;
                height:500px;
                color:#ffffff;
                border-radius: 0.75rem;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
.body{
position: flex;
border-radius: 2.75em;
font-family: 'Nunito', sans-serif;
font-weight: 200;
height: 100vh;
margin: 0;
background-repeat:no-repeat;
background-image: URL("\theme\images\reloj2.gif");

}

.content{
    background: transparent;

}

.btn-index1{
                font-size: 22px;
                background: #2596be;
                width: 500px;
                height:500px;
                color:#ffffff;
                border-radius: 0.75rem;

            }
 .btn-index1:hover{
    font-size: 22px;
                background: #eeeee4;
                width: 500px;
                height:500px;
                color:#2596be;
                border-radius: 0.75rem;
 };

        </style>
    </head>
    <body>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a class="btn-index1"  href="{{ url('/home') }}">Inicio</a>
                    @else
                        <a class="btn-index1"  href="{{ route('login') }}">Logueo</a>
                    @endauth
                </div>
            @endif

            <div class="content" >
                <div class="title m-b-md">


                    <img src="{{('\theme\images\logo_blanco.png')}}" alt="" width="650px">

                    <h4>Sistema de Gestion de Tiempos</h4>
                </div>

                <div class="links">

                </div>

            </div>

        </div>


    </body>
</html>
