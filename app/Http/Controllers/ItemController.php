<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index(){
        $item = item::all();
        return view('item.index', ['item' => $item]);
    }

    public function create(){
        return view('item.create');
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'namaBarang' => 'required|string|max:255',
            'jenisBarang' => 'required|string|max:255',
            'jumlahBarang' => 'required|integer',
            'tanggalMasukBarang' => 'required|date',
        ]);

        Item::create($validatedData);

        return redirect()->route('item.index')->with('success', 'Item added successfully.');
    }

    public function edit($id){
        
    }


}
