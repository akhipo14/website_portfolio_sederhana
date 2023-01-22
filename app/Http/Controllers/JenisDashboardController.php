<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboards.jenis.index',[
          'jenis'=>Jenis::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboards.jenis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
          'nama'=>'required|max:20',
        ]);
        jenis::create($validatedData);
        return redirect('jenis-dashboard')->with('success','Tambah Jenis Blog berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function show(Jenis $jenis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function edit(Jenis $jenis,$id)
    {
        return view('dashboards.jenis.edit',[
          'jenis'=>Jenis::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jenis $jenis,$id)
    {
        $validatedData=$request->validate([
          'nama'=>'required|max:20'
        ]);
        Jenis::where('id',$id)->Update($validatedData);
        return redirect('jenis-dashboard')->with('success','Berhasil Update jenis Blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jenis $jenis,$id)
    {
        Jenis::destroy($id);
        return redirect('/jenis-dashboard')->with('success','Berhasil Hapus Data');
    }
}
