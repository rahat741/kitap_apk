<?php

namespace App\Http\Controllers;

use App\Models\deneme;
use App\Models\Haberler;
use Illuminate\Http\Request;

class homecontroller extends Controller
{

    public function get_haberler(){
        return view('giris');
            }
            public function post_haberler(Request $request){
        Haberler::create($request->all());
        return 'hello word';
            }

    }
