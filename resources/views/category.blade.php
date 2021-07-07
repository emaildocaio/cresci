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
       <h1>{{$category->name}}</h1>
       
       @foreach ($category->product as $product)
           <a href="/products/{{$product->slug}}"><h3>{{$product->title}}</h3></a>
           <p>{{$product->excerpt}}</p>

       @endforeach
       

       

    </article>
    <a href="/">Voltar</a>
    <footer>
    </footer>
</body>
</html>