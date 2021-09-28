<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productPage()
    {
        return view('product/product-list');
    }

    public function productFichePage($id)
    {
        $products = [
            1 => 'la_biquette',
            2 => 'la_lion',
            3 => 'la_rakoon',
            4 => 'la_grizzly',
        ];

        if (isset($products[$id])) {
            $product = $products[$id];
            return view('product/product-details', ['productName' => $product]);
        } else {
            return 'produit indisponible';
        }


    }
}
