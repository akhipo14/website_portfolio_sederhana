<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboards.kategori.index',[
          'kategoris'=>Kategori::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboards.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
          'nama'=>'required|max:30'
        ]);
        Kategori::create($validatedData);
        return redirect('kategori-dashboard')->with('success','Berhasil Tambah Kategori Karya');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori,$id)
    {
        return view('dashboards.kategori.edit',[
          'kategoris'=>Kategori::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $kategori,$id)
    {
        $validatedData=$request->validate([
          'nama'=>'required|max:30'
        ]);
        Kategori::where('id',$id)->update($validatedData);
        return redirect('kategori-dashboard')->with('success','Berhasil Update Kategori Karya');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori,$id)
    {
        Kategori::destroy($id);
        return redirect('kategori-dashboard')->with('success','Berhasil Hapus Kategori Karya');
    }
}
