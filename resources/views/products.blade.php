<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <!-- FA -->
    <script src="https://kit.fontawesome.com/7fce092bdf.js" crossorigin="anonymous"></script>
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
        <h1 class="text-success">Prodotti</h1>

        @if (count($products) > 0)
            <div class="row">
                @foreach ($products as $product)
                    <div class="col d-flex grow-1 ">
                        <div class="card ">
                            <div class="card-body">
                            <h5 class="card-title">{{ $product['name'] }}</h5>
                            <p class="card-text">{{ $product['description'] }}</p>
                            <div class="py-3 d-flex justify-content-between align-items-center">
                                <span class=""> € {{ $product['price'] }}</span>
                                @if ($product['available'] === true)
                                    <a href="#" class="btn btn-primary"><i class="fa-solid fa-bag-shopping"></i></a>
                                @else
                                <a href="#" class="btn btn-danger"><i class="fa-solid fa-bell"></i></a>
                                @endif
                            </div> 
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
    
</body>
</html>