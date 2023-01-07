<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Models\User;
use App\ProductStock;
use App\Models\Lawyer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $totalUser = Lawyer::count();
        return view('test', compact('totalUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lawyers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lawyers = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'phone' => 'required',
            'image' =>  'required',
            'tags' =>  'required',
            'jobtitle' =>  'required',
            'description' =>  'required',
            'city' =>  'required',
            'voicecall' =>  'required',
            'message' =>  'required',
            'videocall' =>  'required',

        ]);

        $lawyers['tags'] = json_encode($request->tags);
        $lawyers = Lawyer::create($lawyers);
        Lawyer::create($request->all());

        return redirect()->route('lawyers.index')
            ->with('success', 'Admin created successfully.');
    }





    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $Admin
     * @return \Illuminate\Http\Response
     */
    public function show(Lawyer $admin)
    {
        return view('admins.show', compact('admins'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $Admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Lawyer $lawyer)
    {
        return view('admins.edit', compact('admins'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $Admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lawyer $lawyer)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $lawyer->update($request->all());

        return redirect()->route('admins.index')
            ->with('success', 'Admin updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lawyer $lawyer)
    {
        $lawyer->delete();

        return redirect()->route('lawyers.index')
            ->with('success', 'Product deleted successfully');
    }
}
