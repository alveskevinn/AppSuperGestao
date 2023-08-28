<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
            .titulo{
                display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            }
            
            .list{
            display: flex;
            flex-direction: row;
            width: 100vw;
            height: 10vh;
            justify-content: center;
            gap: 10px;
        }
        </style>
    </head>
    <body>
        <h1 class="titulo">Sobre nós</h1>
        <div class="list">
            <a href="/">Página Inicial</a>
            <a href="/contato">Contato</a>
            <a href="/sobre-nos">Sobre nós</a>
        </div>
    </body>
</html>
