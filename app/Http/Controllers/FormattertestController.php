<?php

namespace App\Http\Controllers;

use App\Formattertest;

class FormattertestController extends Controller
{
    public function getData()
    {
        $data = Formattertest::orderBy('id', 'desc')->get();

        return view('formattertest')->with('data', $data);
    }

    public function postData()
    {
        $new = new Formattertest;

        if (request()->has('date')) $new->date = request()->input('date');
        if (request()->has('datetime')) $new->datetime = request()->input('datetime');
        if (request()->has('money')) $new->money = request()->input('money');
        if (request()->has('numeric')) $new->numeric = request()->input('numeric');
        if (request()->has('boolean')) $new->boolean = request()->input('boolean');
        
        $new->save();

        return redirect()->back();
    }
}
