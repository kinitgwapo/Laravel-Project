<!DOCTYPE html>
<html>
<head>
    <meta name="author" content="Kenneth O. Restauro">
    <meta name="description" content="Create Page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create Page</title>

    <!-- Injects adjacent create.css file directly -->
    <style>
        {!! file_get_contents(resource_path('views/products/Styles/create.css')) !!}
    </style>
</head>

<body>
    <!-- Background Layers -->
    <div class="spores"></div>
    <div class="mind-flayer"></div>

    <div class="container">
        <h1>CREATE PRODUCT</h1>

        <div>
            <span class="badge-subtitle">NEW ENTRY</span>
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
            <form action="{{ route('products.store') }}" method="post">
                @csrf
                @method('POST')

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Enter Product Name">
                </div>

                <div class="form-group">
                    <label>Quantity</label>
                    <input type="number" name="qty" placeholder="0">
                </div>

                <div class="form-group">
                    <label>Price</label>
                    <input type="number" step="0.01" name="price" placeholder="0.00">
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="description" placeholder="Enter Description">
                </div>

                <div>
                    <input type="submit" value="SAVE NEW PRODUCT">
                </div>
            </form>
        </div>
    </div>
</body>
</html>