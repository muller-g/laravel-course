<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TesteTable;

class TesteController extends Controller
{
    public function index(){
        $events = TesteTable::all();

        return $events;
    }
}
