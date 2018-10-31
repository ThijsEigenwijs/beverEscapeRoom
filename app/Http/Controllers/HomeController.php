<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Codes;

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

        $solved = [];
        $codes = \App\Codes::all();

        $full = $request->all();

        foreach ($codes as $code) {

            $user = Auth::user();

            if ($user->group_id == 1) {
                $solved = array_add($solved, $code->id, $code->solved_group1);
            } elseif ($user->group_id == 2) {
                $solved = array_add($solved, $code->id, $code->solved_group1);
            }

            if ($code->code == $full[$code->id]) {
                if ($user->group_id == 1) {
                    $code->solved_group1 = 1;
                } elseif ($user->group_id == 2) {
                    $code->solved_group2 = 1;
                }
                $code->save();
            }

        }


        return view('codesPost', ['codes' => $codes, 'solved' => $solved]);
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

    public function reset()
    {
        $codes = \App\Codes::all();
        $user = Auth::user();
        if ($user->group_id == -1) {
            foreach ($codes as $code) {
                $code->solved_group1 = 0;
                $code->solved_group2 = 0;
                $code->save();
            }
        }

        return view('home');
    }

    public function addPuzzelPost(Request $request)
    {
        $full = $request->request;
        $code = $full->get('code');
        $hint = $full->get('hint');

        $puzzel = new Codes;

        $puzzel->code = $code;
        $puzzel->hint = $hint;
        $puzzel->updated_at = null;
        $puzzel->created_at = null;
        $puzzel->solved_group1 = 0;
        $puzzel->solved_group2 = 0;
        $puzzel->save();

        return view('addPuzzel');

    }

    public function delPuzzel()
    {
        $codes = \App\Codes::all();
        return view('delPuzzel',['codes' => $codes]);
    }

    public function delPuzzelPost(Request $request)
    {
        $full = $request->request;
        $id = $full->get('id');

        $puzzel = \App\Codes::where('id', $id)->first();
        $puzzel->delete();

        $codes = \App\Codes::all();
        return view('delPuzzel',['codes' => $codes]);
    }
}
