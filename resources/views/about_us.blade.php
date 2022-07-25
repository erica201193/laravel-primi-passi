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
    <div class="container text-center">
        <h1 class="text-success">About us</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt labore perferendis sapiente aspernatur magnam adipisci ipsa expedita aliquam! Facilis vitae dolorum natus. Itaque dolorum esse veritatis qui eius! Odit, rerum.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam deserunt, nihil blanditiis asperiores magnam amet molestiae nobis eum repellat corporis totam tempore voluptate pariatur a sed officia! Porro, vero eos.</p>
    </div>
    
</body>
</html>