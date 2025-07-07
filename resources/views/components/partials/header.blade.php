<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

{{-- Made by KACOU² Emmanuel --}}

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> {{ $title }} - Geniusntech</title>

    <link rel="icon" href="/favicon.ico" sizes="any">

    @vite(['resources/js/app.js', 'resources/css/app.css'])

    <style>
        .hide-loader {
            transition: all 1.2s;
            transform: translateY(120%);
        }

        #loader {
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 10px;
            height: 100vh;
            width: 100%;
            position: fixed;
            left: 0;
            top: 0;
            inset: 0;
            z-index: 1000 !important;
            font-family: "Nunito";
            font-weight: bold;
        }

        #circle {
            height: 50px;
            width: 50px;
            border: 2px solid white;
            border-top: transparent;
            border-bottom: transparent;
            border-left-color: #00669a;
            border-radius: 50px;

        }

        #circle-box,
        #loader p {
            animation: fadeIn 1.2s ease alternate-reverse infinite;
            transition: all 1.5s ease;
        }

        #loader p:nth-child(2) {
            animation-delay: 0.1s;
        }

        #circle-box {
            animation-delay: 0.2s;
        }



        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10%);
            }

            to {
                opacity: 100;
                transform: translateY(0);
            }

        }
    </style>
</head>
