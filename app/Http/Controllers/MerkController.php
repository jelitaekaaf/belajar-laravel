<?php

namespace App\Http\Controllers;
use App\Models\Merk;
use Illuminate\Http\Request;

class MerkController extends Controller
{
    public function menampilkan(){

        $merks = Merk::all();                    // menampilkan semua data
        return view('merks.index', compact('merks'));
    }

    public function show($id){                  // menampilkan hanya 1 (by id)
         $merks = Merk::findOrFail($id);
         return view('merks.show', compact('merks'));
    }
}
