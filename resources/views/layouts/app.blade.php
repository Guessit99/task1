<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Product Management</title>
    <!-- Add your CSS links and any other meta tags here -->
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('product.index') }}">Home</a></li>
                <li><a href="{{ route('product.create') }}">Add Product</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer>
        <!-- Add your footer content here -->
    </footer>

    <!-- Add your JavaScript links here if needed -->
</body>
</html>
