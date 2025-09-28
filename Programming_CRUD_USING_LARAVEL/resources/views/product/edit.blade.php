<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <!-- Optional: Include Bootstrap for better styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Edit Product</h2>
    
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif


    <!-- Laravel Form for Adding a Product -->
    <form :products="$products" method="POST" action="{{ route('products.update', $products) }}">
    @csrf
    @method ('PATCH')

        <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="name" name="name" value = "{{ old ('name') }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Product Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter product description" ></textarea>
        </div>

        <div class="mb-3">
            <label for="size" class="form-label">Product Size</label>
            <input type="text" class="form-control" id="size" name="size" placeholder="Enter product size" >
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>

</body>
</html>
