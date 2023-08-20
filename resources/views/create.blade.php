@extends('layouts.app')

@section('content')
    <h1>Add Product</h1>

    <form action="{{ route('product-store') }}" method="post" enctype="multipart/form-data" >
        @csrf
        <div>
            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        
        <div>
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" value="{{ old('price') }}" required>
        </div>
        <div>
            <label for="image">Image:</label>
            <input type="file" id="image" name="image">
        </div>

        
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required>{{ old('description') }}</textarea>
        </div>

        <!-- Add image input fields and handling if needed -->
        
        <div>
            <button type="submit">Add Product</button>
        </div>
    </form>
@endsection
