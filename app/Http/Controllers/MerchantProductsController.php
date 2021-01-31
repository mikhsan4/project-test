<?php

namespace App\Http\Controllers;

use App\Models\MerchantProduct;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Merchant;
use App\Models\Category;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class MerchantProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //join merchants, join products, join categories
        $merchantproducts = DB::table('merchant_products')
            ->join('merchants', 'merchant_products.merchant_id', '=', 'merchants.id')
            ->join('products', 'merchant_products.product_id', '=', 'products.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->select('merchant_products.*', 'products.name AS productName', 'merchants.name AS merchantName', 'merchant_products.price', 'categories.name AS categoryName')
            ->orderBy('categoryName','ASC')
            ->orderBy('merchantName','ASC')
            ->orderBy('productName','ASC')
            ->get();

        

        return view('merchant_products.main', compact('merchantproducts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        $merchants = Merchant::all();
        return view('merchant_products.create', compact('products', 'merchants'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'merchant_id' => 'required',
            'price' => 'required'
        ]);

        MerchantProduct::create($request->all());

        return redirect()->route('merchant_products.index')
            ->with('success', 'Merchant product added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MerchantProduct  $merchantProduct
     * @return \Illuminate\Http\Response
     */
    public function show(MerchantProduct $merchantProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MerchantProduct  $merchantProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(MerchantProduct $merchantProduct)
    {
        
        $products = Product::all();
        $merchants = Merchant::all();
        return view('merchant_products.edit', compact('merchantProduct', 'products', 'merchants'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MerchantProduct  $merchantProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MerchantProduct $merchantProduct)
    {
        $request->validate([
            'price' => 'required'
        ]);

        $merchantProduct->update($request->all());

        return redirect()->route('merchant_products.index')
            ->with('success', 'Merchant product added successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MerchantProduct  $merchantProduct
     * @return \Illuminate\Http\Response
     */

    // public function delete(MerchantProduct $merchantProduct)
    // {
    //     $merchantProduct = MerchantProduct::find($merchantProduct);
    //     $merchantProduct->delete();
    //     return redirect()->route('merchant.products.index')
    //         ->with('success', 'Merchant Product removed');
    // }


    public function destroy(MerchantProduct $merchantProduct)
    {
        $merchantProduct->delete();

        return redirect()->route('merchant_products.index')
            ->with('success', 'Merchant Product deleted successfully');
    }

    
}
