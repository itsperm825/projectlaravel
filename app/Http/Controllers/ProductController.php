<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //ini tampilan index
        //SELECT * FROM product
        $product = Product::all();
        return view('product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //redirect to create.blade on product folder
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //ini function save data ke database
        //validasi
        //$_POST[nama_text]
        $request->validate([
            'nama_product'=> 'required',
            'detail'=> 'required'
        ]);

        //fungsi simpan
        //INSERT INTO product SET nama_product = '$_POST[nama_deklarasi]'
        Product::create($request->all());

        return redirect()->route('product.index')->with('success', 'Data Berhasil Di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //redirect ke editblade
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        // validasi dan deklarasi form
        $request->validate([
            'nama_product' => 'required',
            'detail' => 'required',
        ]);

        //untuk update data
        // UPDATE product SET nama_field = $_POST['nama_deklarasi']
        $product->update($request->all());

        //redirect ke index
        return redirect()->route('product.index')->with('success', 'Data Berhasil Di Ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Data Berhasil Di Hapus!');
    }
}
