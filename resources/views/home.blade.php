<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
    <header>
        <ul class="nav p-4">
            <li class="nav-item">
              <a class="nav-link" href="{{ route("home")}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route("about")}}">Chi siamo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route("products")}}">Prodotti</a>
            </li>
          </ul>
    </header>
    <div class="container">
        <h1 class="text-success">Benvenuta {{$user["name"]}} {{$user["surname"]}}</h1>

        @if ($user["subscription"] === true)
            <h4>Grazie per esserti iscritta alla nostra newsletter! Inserisci il codice "newslover" per ricevere subito lo sconto del 20%</h4>
            @else
            <h4>Iscriviti alla newsletter per ottenere 20% di sconto sul tuo prossimo ordine</h4>
        @endif
    </div>
    
</body>
</html>