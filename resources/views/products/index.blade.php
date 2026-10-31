<!DOCTYPE html>
<html>
<head>
    <meta name="author" content="Kenneth O. Restauro">
    <meta name="description" content="Index Page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Index Page</title>

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
        <h1>PRODUCT</h1>

        <div>
            <span class="badge-subtitle">INDEX</span>
        </div>

        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Description</th>

                @if(auth()->user()->isAdmin())
                    <th>Edit</th>
                    <th>Delete</th>
                @endif

            </tr>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->qty }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->description }}</td>

                @if(auth()->user()->isAdmin())
                    <td style="text-align: center;">
                        <a class="edit-btn" href="{{ route('products.edit', ['product' => $product]) }}">Edit</a>
                    </td>
                    <td style="text-align: center;">
                        <form action="{{ route('products.remove', ['product' => $product ]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                            <button class="rmv-btn" type="submit">Delete</button>
                        </form>
                    </td>
                @endif
                
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>