<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|\Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
//        dd($products);
        return view('backoffice.index', ['all_products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.add_product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $product = new Products();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->prix = $request->input('prix');
        $product->poid = $request->input('poid');
        $product->photos = $request->input('photos');
        $product->quantity = $request->input('quantity');
        $product->save();
        return redirect(route('products.index'));
//        $validator = Validator::make ($request->all(), [
//            'name' => 'bail|required|between:1,56|alpha',
//            'description' => 'bail|required|max:256',
//            'price' => 'bail|required|numeric',
//            'weight' => 'bail|required|numeric',
//            'image' => 'bail|required|max:256',
//            'quantity' => 'bail|required|digits_between:1,50',
////            'available' => 'bail|required|boolean',
////            'categorie_id' => 'bail|required|digits_between:1,3',
//        ]);
//
//        if ($validator->fails()) {
//            return back()->withErrors($validator)->withInput();
//        }

//        return redirect(route('products.index'));
    }


    /**
     * Display the specified resource.
     *
     * @param  Products $product
     * @return Application|Factory|View|\Illuminate\Http\Response
     */
    public function show(Products $product)
    {
        return view('product.product-details', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Products $product
     * @return Application|Factory|View
     */
    public function edit(Products $product)
    {
        return view('backoffice.update_product', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Products $product
     * @return Application|RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Products $product)
    {
        if (!$product->isDirty()) {
            $product->update( $request->all());
        }

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Application|\Illuminate\Routing\Redirector|RedirectResponse
     */
    public function destroy($id)
    {
        Products::destroy($id);
        return redirect(route('products.index'));
    }
}
