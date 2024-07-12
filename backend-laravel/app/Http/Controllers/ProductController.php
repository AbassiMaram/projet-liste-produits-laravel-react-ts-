<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function store(Request $request)
    {
        // Logique pour créer un nouveau produit
    }

    public function show(Product $product)
    {
        return $product;
    }

    public function update(Request $request, Product $product)
    {
        // Logique pour mettre à jour un produit existant
    }

    public function destroy(Product $product)
    {
        // Logique pour supprimer un produit
    }
}
