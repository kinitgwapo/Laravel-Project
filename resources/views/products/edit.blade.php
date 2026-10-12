<!DOCTYPE html>
<html>
<head>
    <meta name="author" content="Kenneth O. Restauro">
    <meta name="description" content="Edit Page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Page</title>

    <!-- Injects adjacent edit.css file directly -->
    <style>
        {!! file_get_contents(resource_path('views/products/Styles/edit.css')) !!}
    </style>
</head>

<body>
    <!-- Background Layers -->
    <div class="spores"></div>
    <div class="mind-flayer"></div>

    <div class="container">
        <h1>EDIT PRODUCT</h1>

        <div>
            <span class="badge-subtitle">UPDATE ENTRY</span>
        </div>

        @if($errors->any())
            <div class="error-alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>⚠ {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-container">
            <form action="{{ route('products.update', $product) }}" method="post">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Name" value="{{ $product->name }}">
                </div>

                <div class="form-group">
                    <label>Quantity</label>
                    <input type="number" name="qty" placeholder="Quantity" value="{{ $product->qty }}">
                </div>

                <div class="form-group">
                    <label>Price</label>
                    <input type="number" step="0.01" name="price" placeholder="Price" value="{{ $product->price }}">
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="description" placeholder="Description" value="{{ $product->description }}">
                </div>

                <div>
                    <input type="submit" value="UPDATE PRODUCT">
                </div>
            </form>
        </div>
    </div>
</body>
</html>