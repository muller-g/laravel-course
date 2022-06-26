<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estoque;
use Illuminate\Support\Facades\DB;

class EstoqueController extends Controller
{
    public function index(){
        $items = DB::table('estoques')->get();

        return $items;
    }

    public function store(Request $request){
        $estoque = new Estoque;
        $estoque->item = $request->item;
        $estoque->amount = $request->amount;
        $estoque->price = $request->price;
        $estoque->img = $request->img;
        $estoque->save();
        echo "Criado com sucesso";
    }

    public function edit(Request $request,$id) {
        $estoque = DB::table('estoques')
            ->where('id', $id)
            ->update([
            'item' => $request->get('item'),
            'amount' => $request->get('amount'),
            'price' => $request->get('price'),
            'img' => $request->get('img')
        ]);

        echo "Atualizado com sucesso";
     }
}
