<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
    <h1>Create a Product</h1>
    
    <form method="POST" action="{{ route('product.store') }}">
        @csrf  {{-- Laravel's CSRF token for security --}}
        
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" placeholder="Product Name" required>
        </div>

        <div>
            <label for="qty">QTY:</label>
            <input type="number" name="qty" placeholder="Product Quantity" required>
        </div>

        <div>
            <label for="price">Price:</label>
            <input type="number" step="0.01" name="price" placeholder="Product Price" required>
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea name="description" placeholder="Product Description" required></textarea>
        </div>

        <button type="submit">Create Product</button>
    </form>
</body>
</html>
