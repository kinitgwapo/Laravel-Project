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

        <form action="{{ route('products.index') }}" method="GET" class="search-form">
            <input type="text"
                   name="search"
                   value="{{ $search }}"
                   placeholder="Search product name..."
                   maxlength="255"
            >
            <button type="submit">Search</button>

            @if($search !== '')
                <a href="{{ route('products.index') }}">Clear</a>
            @endif
        </form>

        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Description</th>

                @if(auth()->user()->isAdmin())
                    <th>Edit</th>
                    <th>Delete</th>
                @endif

            </tr>
            @forelse($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>

                    <td>
                        @if($product->image_url)
                            <a href="{{ route('products.show', $product) }}" title="View details">
                                <img src="{{ $product->image_url }}"
                                    alt="{{ $product->name }}"
                                    style="width: 60px;
                                            height: 60px;
                                            object-fit: cover;"
                                >
                            </a>
                        @else
                            <span>No image</span>
                        @endif
                    </td>

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
            @empty
                <tr>
                    <td colspan="{{ auth()->user()->isAdmin() ? 8 : 6 }}"
                        style="text-align:center;"
                    >
                        @if($search !== '')
                            No product found matching "{{ $search }}".
                        @else
                            No products available yet.
                        @endif
                    </td>
                </tr>
            @endforelse
        </table>

        <div class="pagination-wrapper">
            {{ $products->links() }}
        </div>
    </div>
</body>
</html>