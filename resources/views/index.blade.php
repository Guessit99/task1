@extends('layouts.app')

@section('content')
    <h1>Product Listing</h1>
    
    <div>
        <a href="{{ route('product.create') }}">Add Product</a>
    </div>
    
    <div>
        <form action="{{ route('product.index') }}" method="get">
            <label>Sort by price:</label>
            <select name="sort" onchange="changeTable(this.value)">
                <option value="asc">Low to High</option>
                <option value="desc">High to Low</option>
            </select>
            <button type="submit">Apply</button>
        </form>
    </div>
    

    <table id="product">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Name<th>
                <th>Price</th>       
              
            </tr>
        <tbody>
        @foreach ($products as $key => $product)
        <tr>
            <td>{{++$key}}</td>
            <td>{{ $product->name }}<td>
            <td>${{ $product->price }}</td>       
           
        </tr>
        @endforeach
        </tbody>
    </table>
   

@endsection
