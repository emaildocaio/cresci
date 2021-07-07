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
       <h1>{{$user->first_name}} {{$user->last_name}}</h1>
     
       
       @foreach ($user->product as $product)
           <a href="/products/{{$product->slug}}"><h3>{{$product->title}}</h3></a>
           <a href="/categories/{{$product->category->slug}}"><h3>{{$product->category->name}}</h3></a>
           <p>{{$product->excerpt}}</p>

       @endforeach
       

       

    </article>
    <a href="/">Voltar</a>
    <footer>
    </footer>
</body>
</html>