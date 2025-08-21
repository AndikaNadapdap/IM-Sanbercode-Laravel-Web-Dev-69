<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function formdaftar()
    {
        return view('page.register');
    }

     public function submited(Request $request)
     {
        $FirstName = $request->input("FirstName");
        $LastName = $request->input("LastName");
        return view('page.home',['FirstName'=>$FirstName, 'LastName' =>$LastName ]);
    }
}
