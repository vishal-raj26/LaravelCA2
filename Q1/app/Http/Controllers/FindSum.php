<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FindSum extends Controller
{
    function sum(Request $req)
    {
        $req->validate([
            'firstnumber'=>'required',
            'secondnumber'=>'required',
            ]);

        $first = $req->input('firstnumber');
        $second = $req->input('secondnumber');
        $result = $first+$second;
        return view('sum', ['result' => $result,'firstno'=>$first,'secondno'=>$second]);
    }
}
