<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app.css">
    <title>Cresci - O melhor custo x benefício para você!</title>
</head>
<body>
    <h1>Todos os Produtos</h1>
    @foreach ($products as $product)
        <article>
            <a href="/products/{{$product->slug}}"><h2>{{$product->title}}</h2></a>
            <p>Vendido por <a href="/users/{{$product->user->username}}"><b>{{$product->user->first_name}} {{$product->user->last_name}}</b></p></a>
            <a href="/categories/{{$product->category->slug}}"><p>{{$product->category->name}}</p></a>
            <p>{{$product->excerpt}}</p>
        </article>
    @endforeach

    <footer>

    </footer>
</body>
</html>