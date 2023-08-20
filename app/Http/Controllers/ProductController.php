<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;



class ProductController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->query('sort', 'asc'); // Default to ascending order if not specified
        // Retrieve all products from the database
        $products = Product::with('image')->orderBy('price', $sort)->get();
       

        return view('index', compact('products'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'description' => 'required|string',
        // 'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust allowed file types and size limit
    ]);
    $product = Product::create($validatedData);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('images', $imageName); // Store the image in the 'images' directory

        $imageData = [
            'product_id' => $product->id,
            'filename' => $imageName,
        ];

        Image::create($imageData); // Save image information in the database
    }

    return redirect()->route('product.index')->with('success', 'Product added successfully');
}

}