<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TesteTable;

class UserTeste extends Controller
{
    public function store(Request $request){
        $user = new TesteTable;
        $user->id = $request->id;
        $user->name = $request->name;
        $user->address = $request->address;

        $user->save();
        
    }
}
