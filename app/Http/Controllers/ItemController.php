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

        return redirect()->route('item.index');
    }

    public function edit($id){
        $item = Item::find($id);
        return view('item.edit', ['item' => $item]);
    }

    public function  update(Request $request, $id){
        $validatedData = $request->validate([
            'namaBarang' => 'required|string|max:255',
            'jenisBarang' => 'required|string|max:255',
            'jumlahBarang' => 'required|integer',
            'tanggalMasukBarang' => 'required|date',
        ]);

        $item = Item::find($id);

        $item->update($validatedData);
        return redirect()->route('item.index');
    }


}
