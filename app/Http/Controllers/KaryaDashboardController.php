<?php

namespace App\Http\Controllers;

use App\Models\Karya;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class KaryaDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboards.karya.index',[
          'karyas'=>Karya::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboards.karya.create',[
          'kategoris'=>Kategori::all()
        ]);
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
          'title'=> 'required|max:50',
          'deskripsi'=>'required',
          'kategori_id'=>'required',
          'image'=>'image|file|max:1024'
        ]);

        if($request->file('image')){
          $validatedData['image']=$request->file('image')->store('karya-image');
        }
        $validatedData['excerpt'] = Str::limit(strip_tags($request->deskripsi),80);
        Karya::create($validatedData);
        return redirect('/karya-dashboard')->with('success','Berhasil menambah data Karya');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Karya  $karya
     * @return \Illuminate\Http\Response
     */
    public function show(Karya $karya)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Karya  $karya
     * @return \Illuminate\Http\Response
     */
    public function edit(Karya $karya,$id)
    {
        return view('dashboards.karya.edit',[
          'karyas'=>Karya::find($id),
          'kategoris'=>Kategori::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Karya  $karya
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karya $karya,$id)
    {
      $validatedData = $request->validate([
        'title'=> 'required|max:50',
        'deskripsi'=>'required',
        'kategori_id'=>'required',
        'image'=>'image|file|max:1024'
      ]);

      if($request->file('image')){
        $validatedData['image']=$request->file('image')->store('karya-image');
      }
      $validatedData['excerpt'] = Str::limit(strip_tags($request->deskripsi),80);
      Karya::where('id',$id)->update($validatedData);
      return redirect('/karya-dashboard')->with('success','Berhasil Update data Karya');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Karya  $karya
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karya $karya,$id)
    {
        Karya::destroy($id);
        return redirect('/karya-dashboard')->with('success','Berhasil Hapus Data Karya');
    }
}
