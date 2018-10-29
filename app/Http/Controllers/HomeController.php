<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function codesPost(Request $request)
    {

        $codes = \App\Codes::all();

        $full = $request->all();

        foreach ($codes as $code){
            if($code->code == $full[$code->id]){
                $code->solved = 1;
                $code->save();
            }

        }

        return view('codesPost', ['codes' => $codes]);
    }

    public function codes()
    {

        $codes = \App\Codes::all();
        return view('codesPost', ['codes' => $codes]);
    }

    public function hints()
    {

        $codes = \App\Codes::all();
        return view('hints', ['codes' => $codes]);
    }

    public  function reset(){


        $codes = \App\Codes::all();

        foreach ($codes as $code){
                $code->solved = 0;
                $code->save();


        }

        return view('home');
    }

}
