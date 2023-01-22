<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Jenis;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('dashboards.blog.index',[
        'blogs'=>Blog::latest()->paginate(5)


      ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboards.blog.create',[
          'jenis'=>Jenis::all()
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

      $validatedData=$request->validate([
        'title'=>'required|max:255',
        'jenis_id'=>'required',
        'body'=>'required',
      ]);
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body),80);
        Blog::create($validatedData);
        return redirect('/blog-dashboard')->with('success','Berhasil menambah data Berita');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog,$id)
    {
        return view('dashboards.blog.edit',[
          'blogs'=>Blog::find($id),
          'jenis'=>Jenis::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog,$id)
    {
      $validatedData=$request->validate([
        'title'=>'required|max:255',
        'jenis_id'=>'required',
        'body'=>'required',
      ]);
      $validatedData['excerpt'] = Str::limit(strip_tags($request->body),80);
      Blog::where('id',$id)->update($validatedData);
      return redirect('/blog-dashboard')->with('success','Berhasil Update Blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog,$id)
    {
        Blog::destroy($id);
      return redirect('/blog-dashboard')->with('success','Berhasil Hapus Blog');
    }
}
