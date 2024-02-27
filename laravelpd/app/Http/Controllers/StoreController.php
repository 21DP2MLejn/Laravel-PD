<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function Store(Request $request){
        $validate = $request->validate([
            "title"=>"required|string|max:255",
            "description"=>"required|string",
            "banner_address"=>"required|url",
            "participants"=>"required|integer"

        ]);

        
    }
}
