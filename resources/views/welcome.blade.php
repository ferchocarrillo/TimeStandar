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
 }
 .inicio{
    margin-top: 5rem;
    border-radius: 0.75rem;
    width: 450px;
margin-top: -1rem;
position: absolute;
z-index: -1;
    border-style: solid;
    border-color: #301e22 5px;
    box-shadow: #122 5px;

 }
 .marca{
    margin-bottom: 20rem;
}
 @import url('https://fonts.googleapis.com/css?family=Montserrat');
body {
	{{--  background-color: rgb(205, 171, 233);  --}}
    background: linear-gradient(45deg,#C9D8B6, #C9D8B6, #57837B);

}

.title {
	font-family: "Montserrat";
	text-align: center;
	color: #FFF;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	height: 100vh;
	letter-spacing: 1px;

}

h1 {
	background-image: url(https://thumbs.gfycat.com/HoarseAgedBeagle-size_restricted.gif);
	background-size: fixed;
	color: transparent;
	-moz-background-clip: text;
	-webkit-background-clip: text;
	text-transform: uppercase;
	font-size: 80px;
	line-height: .75;
	margin: 10px 0;


}
/* styling my button */

.white-mode {
	text-decoration: none;
	padding: 7px 10px;
	background-color: #122;
	border-radius: 3px;
	color: #FFF;
	transition: .35s ease-in-out;
	position: absolute;
	left: 15px;
	bottom: 15px;
	font-family: "Montserrat";
}

.white-mode:hover {
	background-color: #FFF;
	color: #122;
}
h3{
    text-align: center;
    text-transform: capitalize;
    margin-bottom: 4rem;
}

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



                    <img class="marca"  src="\theme\images\SISTEMA.png" alt="">

                    <img class="inicio" src="{{('\theme\images\gifntext-gif.gif')}}" alt="" >
                    <h1>Sistema de <br/>Gestion de Tiempos</h1>
                    {{--  <h4>Sistema de Gestion de Tiempos</h4>  --}}
                </div>
                <i class="far fa-copyright"></i><h3>Todos los derechos reservados 2021</h3>

            </div>

        </div>





    </body>
</html>

