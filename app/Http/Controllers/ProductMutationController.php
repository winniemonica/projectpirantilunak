<?php

namespace App\Http\Controllers;

use App\Models\ProductMutation;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductMutationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $productMutations = ProductMutation::where('product_id', $request->query('product_id'))->paginate(20);
        $product = Product::where('id', $request->query('product_id'))->first();

        return view('product-mutation.index', compact(['productMutations', 'product']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $product = Product::where('id', $request->query('product_id'))->first();

        return view('product-mutation.create', compact(['product']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $this->validate($request, [
            'type' => 'required|string',
            'quantity' => 'required|numeric',
            'product_id' => 'required|exists:products,id',
        ]);

        ProductMutation::create($attributes);

        $product = Product::where('id', $request->product_id)->first();
        if ($request->type == 'in'){
            $product->stock += $request->quantity;
        } else if ($request->type == 'out'){
            $product->stock -= $request->quantity;
        }
        $product->save();

        return redirect()->route('product-mutation.index', ['product_id' => $product->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductMutation  $productMutation
     * @return \Illuminate\Http\Response
     */
    public function show(ProductMutation $productMutation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductMutation  $productMutation
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductMutation $productMutation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductMutation  $productMutation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductMutation $productMutation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductMutation  $productMutation
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductMutation $productMutation)
    {
        //
    }
}
