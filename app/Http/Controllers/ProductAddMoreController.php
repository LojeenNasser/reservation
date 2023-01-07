<?php

namespace App\Http\Controllers;

use App\ProductStock;
use Illuminate\Http\Request;

class ProductAddMoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addMore()
    {
        return view("addMore");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addMorePost(Request $request)
    {
        $request->validate([
            'addmore.*.start' => 'required',
            'addmore.*.end' => 'required',

        ]);

        foreach ($request->addmore as $key => $value) {
            ProductStock::create($value);
        }

        return back()->with('success', 'Record Created Successfully.');
    }
}
