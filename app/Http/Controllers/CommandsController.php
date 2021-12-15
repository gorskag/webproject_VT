<?php

namespace App\Http\Controllers;

use App\Models\Commands;
use Illuminate\Http\Request;

class CommandsController extends Controller
{
    public function commmands(Request $request){
        $data["commandData"] = Commands::all();
        return view('commands', $data);
    }
}
