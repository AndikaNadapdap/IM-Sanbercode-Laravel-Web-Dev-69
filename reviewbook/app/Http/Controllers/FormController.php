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
        //$Gender = $request->input("Gender");
       // $Nationality = $request->input("Nationality");
       // $LanguageSpoken = $request->input("Language Spoken");
       // $Bio = $request->input("Bio");
        return view('page.home',['FirstName'=>$FirstName, 'LastName' =>$LastName ]);
    }
}
