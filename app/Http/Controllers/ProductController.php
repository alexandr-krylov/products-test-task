<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Product::query();
        if ($request->query->get('category') !== null) {
            $query->where('category', '=', $request->query->get('category'));
        }
        if ($request->query->get('search') !== null) {
            $query->where(function ($query) use ($request) {
                $query->where('name', 'LIKE', "%{$request->query->get('search')}%")
                    ->orWhere('description', 'LIKE', "%{$request->query->get('search')}%");
            });
        }
        $products = $query->get();

        return $products;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
