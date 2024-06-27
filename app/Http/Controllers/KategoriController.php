<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Storage;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {
        $kategori = Kategori::all();
        return view('kategori.index', compact('kategori'));
  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategori = new Kategori;
        $kategori->nama_kategori= $request->nama_kategori;
       
        // // UPLOAD images
        // if($request->hasFile('cover')){
        //     $img = $request->file('cover');
        //     $name = rand(1000, 9999) . $img->getClientOriginalName();
        //     $img->move('images/kategori', $name);
        //     $kategori->cover = $name;
        // }

        $kategori->save();
        return redirect()->route('kategori.index')->with('success', 'Data berhasil ditambahkan!');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategori.show', compact('kategori'));
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategori.edit', compact('kategori'));
    
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
        $kategori = Kategori::findOrFail($id);
        $kategori->nama_kategori = $request->nama_kategori;
        
        

        //  // UPLOAD images
        //  if($request->hasFile('images')){
        //     $img = $request->file('images');
        //     $name = rand(1000, 9999) . $img->getClientOriginalName();
        //     $img->move('images/kategori', $name);
        //     $kategori->images = $name;
        // }

        $kategori->save();
        return redirect()->route('kategori.index')->with('success', 'Data berhasil dirubah!');    
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();
        return redirect()->route('kategori.index');
   
    }
}
