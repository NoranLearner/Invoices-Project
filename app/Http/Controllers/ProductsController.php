<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\sections;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    function __construct(){
        // $this->middleware('permission: الاعدادات', ['only' => ['index']]);
        // $this->middleware('permission: المنتجات', ['only' => ['index']]);
        // $this->middleware('permission: اضافة منتج', ['only' => ['store']]);
        // $this->middleware('permission: تعديل منتج', ['only' => ['update']]);
        // $this->middleware('permission: حذف منتج', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = sections::all();
        $products = products::all();
        return view('products.products', compact('sections', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'product_name' => 'required|max:255',
                'section_id' => 'required',
                'description' => 'required',
            ],
            [
                'product_name.required' => 'يرجي ادخال اسم المنتج',
                'section_id.required' => 'يرجى ادخال القسم',
                'description.required' => 'يرجي ادخال الوصف',
            ]
        );

        products::create([
            'product_name' => $request->product_name,
            'section_id' => $request->section_id,
            'description' => $request->description,
        ]);
        session()->flash('Add', 'تم اضافة المنتج بنجاح ');
        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, products $products)
    {
        $pro_id = $request->pro_id;

        $this->validate($request, [
            'product_name' => 'required|max:255'.$pro_id,
            'section_name' => 'required',
            'description' => 'required',
        ],[
            'product_name.required' => 'يرجي ادخال اسم المنتج',
            'section_name.required' => 'يرجى ادخال القسم',
            'description.required' => 'يرجي ادخال الوصف',
        ]);

        $id = sections::where('section_name', $request->section_name)->first()->id;

        $products = products::findOrFail($pro_id);

        $products->update([
            'product_name' => $request->product_name,
            'description' => $request->description,
            'section_id' => $id,
        ]);

        session()->flash('edit', 'تم تعديل المنتج بنجاح');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $pro_id = $request->pro_id;
        $products = products::findOrFail($pro_id);
        $products->delete();
        session()->flash('delete', 'تم حذف المنتج بنجاح');
        return back();
    }
}
