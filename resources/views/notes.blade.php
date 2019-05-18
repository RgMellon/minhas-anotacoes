<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <div class="wrapper-image">
            <img src="{{ asset('image/fundo2.png') }}" alt="">
            <div>
                <h1 class="titulo"> Minhas anotações </h1>
            </div>
        </div>
    </header>
    <main class="container">
        <ul>
            @foreach ($notes as $item)
                <li class="item">
                    <p class="titulo-item"> {{$item['title']}} </p>
                    <p class="descricao-item"> {{$item['desc']}}</p>
                </li>
            @endforeach

        </ul>
    </main>
    <footer class="footer">

            <form action="{{route('anotation.store')}}" method="post">
            @csrf
            <div>
                <input class="input-anotacao" name="title" type="text" placeholder="Titulo anotação">
                <input class="input-anotacao" name="desc" type="text" placeholder="Descrição anotação">


            </div>
            <button type="submit">
                    Anotar
            </button>
            </form>

    </footer>
</body>
</html>
