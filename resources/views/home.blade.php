@extends('layouts.app')
<title>HOME</title>
@section('content')
                    <!DOCTYPE html>
                    <html lang="en">

                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <meta http-equiv="X-UA-Compatible" content="ie=edge">
                        <style>
body {
    background: linear-gradient(90deg, rgb(8, 73, 73), rgb(1, 1, 1));
    background-size: 400% 100%; /* Lebar latar belakang adalah 400% dari lebar tampilan */
    animation: gradientAnimation 10s linear infinite; /* Animasi berlangsung selama 10 detik dan berulang */
}

@keyframes gradientAnimation {
    50% {
        background-position: 0% 0%;
    }
    50% {
        background-position: 100% 0%;
    }
}
button {
background: none;
border: none;
font-size: 20px;
}
@keyframes glitch {
    0% {
        transform: skew(0deg);
        background-color: transparent;
        color: rgb(29,46,255);
    }
    25% {
        transform: skew(5deg);
        background-color: transparent;
        color: rgb(116,54,124);
    }
    50% {
        transform: skew(0deg);
        background-color: transparent;
        color: rgb(59,229,88);
    }
    75% {
        transform: skew(-5deg);
        background-color: transparent;
        color: rgb(194,252,23);
    }
    100% {
        transform: skew(0deg);
        background-color: transparent;
        color: rgb(13,105,172);
    }
}

/* Style untuk elemen teks glitch */
.card-header {
    text-transform: uppercase;
    text-align: center;
    margin-top: 25px;
    animation: glitch 5s infinite;
    font-family: cursive;
}
.card-body {
    text-transform: uppercase;
    text-align: center;
    animation: glitch 2s infinite;
}
/* div {
    text-transform: uppercase;
    text-align: center;
    animation: glitch 2s infinite;
}*/
.image {
        width: 0;
        height: 0;
        border-top: 20px solid transparent;
        border-bottom: 20px solid transparent;
        border-left: 35px solid #000;
        cursor: pointer;
        animation: play 1s infinite;
      }

      @keyframes play {
        0% {
          transform: translateX(0);
        }
        50% {
          transform: translateX(15px);
        }
        100% {
          transform: translateX(0);
        }
      }
      .image {
        width: 20px;
        height: 20px;
        background-color: #000;
        cursor: pointer;
        animation: stop 1s infinite;
      }

      @keyframes stop {
        0% {
          transform: rotate(0deg) scale(1);
        }
        50% {
          transform: rotate(180deg) scale(1.5);
        }
        100% {
          transform: rotate(360deg) scale(1);
        }
      }


                        </style>
                        <title>MUSIC</title>
                    </head>
                    <body>
                        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center bg-white-100 dark:bg-white-900">
                        @livewire('pilihlagu')
                    </body>

                    </html>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
