<?php

namespace App\Http\Controllers;

use App\Models\Category_product;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('categoryproduct', [
            'datacategory'      => Category_product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addcategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $isidata = [
            'nama_category'     => $request->nama_category
        ];
        // ddd($isidata);
        Category_product::create($isidata);
        return redirect('/categoryproduct')->with('success', 'Data Kategori Product '.$request->nama_category.' Berhasil di simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('editcategory',[
            'datakategori'      => Category_product::where('id',$id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $isiubahdata=[
            'nama_category'     => $request->nama_category
        ];
        Category_product::where('id',$id)->update($isiubahdata);
        return redirect('categoryproduct')->with('success','Data Kategori berhasil di rubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category_product::where('id',$id)->delete();
        return redirect('/categoryproduct')->with('success','Data Kategori berhasil di hapus');
    }
}
