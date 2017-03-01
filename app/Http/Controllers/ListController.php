<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function show()
    {
            $characters =[
                    'karhtiga'=>'ifet',
                    'sironmani'=>'srv',
                    'priyanka'=>'stjoseph'
            ];
            return view('welcome')->withCharacters($characters);
    }
}
