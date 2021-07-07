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
    <article>
       <h1>{{$product->title}}</h1>
        <a href="/categories/{{$product->category->slug}}"><p>{{$product->category->name}}</p></a>
        <p>Vendido por <a href="/users/{{$product->user->username}}"><b>{{$product->user->first_name}} {{$product->user->last_name}}</b></p></a>

       <h3>{{$product->excerpt}}</h3> 
       <p>{!!$product->description!!}</p>

    </article>
    <a href="/">Voltar</a>
    <footer>
    </footer>
</body>
</html>