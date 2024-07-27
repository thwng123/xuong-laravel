<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    const PATH_VIEW = 'admin.products.';
    public function index()
    {
        $data = Product::query()->with('supplier')->latest('id')->paginate(6);
  
        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $suppliers = Supplier::query()->pluck('name','id')->all();
       
        return view(self::PATH_VIEW . __FUNCTION__, compact('suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::query()->create($request->all());

        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $model =  Product::query()->findOrFail($id);

        return view(self::PATH_VIEW . __FUNCTION__, compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $model =  Product::query()->findOrFail($id);
        $suppliers = Supplier::query()->pluck('name','id')->all();
    //    dd($id->supplier_id);
        return view(self::PATH_VIEW . __FUNCTION__, compact('suppliers', 'model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model =  Product::query()->findOrFail($id);
      
        $model->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model =  Product::query()->findOrFail($id);

        $model->delete();

        return redirect()->route('admin.products.index');


    }
}
