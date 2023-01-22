<?php

namespace App\Http\Controllers;

use App\Models\Deskripsi;
use Illuminate\Http\Request;

class DeskripsiDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboards.deskripsi.index',[
          'deskripsis'=>Deskripsi::all()
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deskripsi  $deskripsi
     * @return \Illuminate\Http\Response
     */
    public function show(Deskripsi $deskripsi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deskripsi  $deskripsi
     * @return \Illuminate\Http\Response
     */
    public function edit(Deskripsi $deskripsi,$id)
    {
        return view('dashboards.deskripsi.edit',[
          'deskripsis'=>Deskripsi::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Deskripsi  $deskripsi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deskripsi $deskripsi,$id)
    {
        $validatedData = $request->validate([
          'tentang'=>'required',
          'Pendidikan'=>'required',
          'pengalaman_kerja'=>'required'
        ]);

        Deskripsi::where('id',$id)->update($validatedData);
        return redirect('deskripsi-dashboard')->with('success','Berhasil Update Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deskripsi  $deskripsi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deskripsi $deskripsi)
    {
        //
    }
}
