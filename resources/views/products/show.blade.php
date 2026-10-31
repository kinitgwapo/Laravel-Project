<!DOCTYPE html>
<html>
<head>
    <meta name="author" content="Kenneth O. Restauro">
    <meta name="description" content="Index Page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $product->name }}</title>

    <!-- Injects adjacent index.css file directly -->
    <style>
        {!! file_get_contents(resource_path('views/products/Styles/index.css')) !!}
    </style>
</head>

<body>
    <!-- Mind Flayer & Upside Down Background Layers -->
    <div class="spores"></div>
    <div class="mind-flayer"></div>

    <div class="container">
        <h1>{{ $product->name }}</h1>

        <div>
            <span class="badge-subtitle">PRODUCT DETAILS</span>
        </div>

        @if($product->image_url)
            <img src="{{ $product->image_url }}"
                 alt="{{ $product->name }}"
                 style="max-width: 300px;"
            >
        @endif

        <p><strong>Quantity:</strong> {{ $product->qty }} </p>
        <p><strong>Price:</strong> {{ $product->price }} </p>
        <p><strong>Description:</strong> {{ $product->description ?: 'No description' }} </p>

        <a class="edit-btn" href="{{ route('products.index') }}">Back to list</a>
    </div>
</body>
</html>