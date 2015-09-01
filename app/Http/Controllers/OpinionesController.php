<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use App\Opinion;
use Auth;

class OpinionesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function opinar(){
        $data = Input::all();

        unset($data["_token"]);

        $data["user_id"] = Auth::user()->id;

        Opinion::create($data);
    }
}
