<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('product.index', [
            "pagetitle" => 'Products',
            "maintitle" => 'Products',
            'product' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check()) {
            if (Auth::user()->isAdmin()) {
                $categories = Category::all(); // Retrieve categories for the create form
                return view(
                    'product.create',
                    [
                        "pagetitle" => 'Add Product',
                        "maintitle" => 'Add Product Detail',
                    ],
                    compact('categories')
                );
            } else {
                return redirect()->route('product.index')->with('error', 'Unauthorized access');
            }
        } else {
            return redirect()->route('product.index')->with('error', 'Unauthorized access');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $category_id = (int) $request->input('category_id');
            $imagePath = $this->uploadImage(null, $request->file('image'));

            // Create the product
            Product::create([
                'product_image' => $imagePath,
                'product_name' => $request->input('product_name'),
                'category_id' => $category_id,
                'product_price' => $request->input('product_price'),
                'product_desc' => $request->input('product_desc'),
            ]);

            return redirect()->route('product.index')->with('success', 'Product created successfully');
        } else {
            return redirect()->route('product.index')->with('error', 'Unauthorized access');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        if (Auth::check() && Auth::user()->isAdmin()) {
            $categories = Category::all();
            return view('product.edit', [
                "pagetitle" => 'Edit Product',
                "maintitle" => 'Edit Product Detail',
            ], compact('product', 'categories'));
        } else {
            return redirect()->route('product.index')->with('error', 'Unauthorized access');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        if (Auth::check() && Auth::user()->isAdmin()) {
            $request->validate([
                // Your validation rules here
            ]);

            $newImagePath = $this->uploadImage($product->product_image, $request->file('image'));

            // Update the product
            $product->update([
                'product_name' => $request->input('product_name'),
                'category_id' => $request->input('category_id'),
                'product_desc' => $request->input('product_desc'),
                'product_price' => $request->input('product_price'),
                'product_image' => $newImagePath,
            ]);

            return redirect()->route('product.index')->with('success', 'Product updated successfully');
        } else {
            return redirect()->route('product.index')->with('error', 'Unauthorized access');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {

            $product->delete();

            return redirect()->route('product.index')->with('success', 'Product deleted successfully');
        } else {
            return redirect()->route('product.index')->with('error', 'Unauthorized access');
        }
    }

    private function uploadImage($existingImagePath = null, $newImage = null)
    {
        if (Auth::check()) {
            if (Auth::user()->isAdmin()) {
                // Check if a new image is provided
                if ($newImage) {
                    $imageName = time() . '.' . $newImage->getClientOriginalExtension();
                    $newImage->move(public_path('img'), $imageName);

                    // Return the relative path without the "images/" prefix
                    return $imageName;
                }

                // If no new image is provided, return the existing image path or null
                return $existingImagePath;
            } else {
                return redirect()->route('projects.index')->with('error', 'Unauthorized access');
            }
        } else {
            return redirect()->route('projects.index')->with('error', 'Unauthorized access');
        }
    }

}
