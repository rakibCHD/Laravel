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

<h3>{{ $products->name }}</h3>
<p>{{ $products->description }}</p>
<p>{{ $products->size }}</p>

<a href="{{  route ('products.edit' , $products->id) }} "  >Edit</a>



</div>

</body>
</html>
