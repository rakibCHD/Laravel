<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello View</title>
    <!-- Optionally include Bootstrap for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Hello, Welcome to the Product View . Here is the list of products</h2>
    <a href="/create">Add new product</a>
    <br>

    
    @foreach ($products as $product)
    
    <!--The route('products.show', 5) will generate a URL like /products/5-->
    <h3> <a href="{{ route('products.show', $product->id) }}" > {{ $product->name }}</a></h3>
    <p>{{ $product->description }}</p>
    <p>{{ $product->size }}</p>

    @endforeach
    
    

</div>

</body>
</html>
