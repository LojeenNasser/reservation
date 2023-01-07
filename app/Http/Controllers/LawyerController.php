<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use App\Models\Lawyer;
use Illuminate\Http\Request;
use App\Http\Requests\LawyerRequest;

class LawyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $lawyers = Lawyer::latest()->paginate(5);
        return view('lawyers/index', compact('lawyers'));
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
    // public function store(Request $request)
    // {

    //     $lawyers = $request->validate([
    //         'name' => 'required',
    //         'email' => 'required',
    //         'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
    //         'phone' => 'required',
    //         'image' =>  'required',
    //         'tags' =>  'required',
    //         'jobtitle' =>  'required',
    //         'description' =>  'required',
    //         'city' =>  'required',
    //         'voicecall' =>  'required',
    //         'message' =>  'required',
    //         'videocall' =>  'required',
    //         'availabilities.*.start' => 'required',
    //         'availabilities.*.end' => 'required',
    //     ]);

    //     $lawyers['tags'] = json_encode($request->tags);
    //     $lawyers = Lawyer::create($lawyers);
    //     Lawyer::create($request->all());

    //     foreach ($request->availabilities as $key => $value) {

    //         $product =  ProductStock::create($value);
    //         dd($product);
    //     }
    //     return redirect()->route('lawyers.index')
    //         ->with('success', 'Lawyer created successfully.');
    // }



    public function store(LawyerRequest $request)
    {
        $input = $request->validated();
        $avatar = Arr::pull($input, 'avatar');
        $lawyers = Lawyer::create($input);
        $lawyers['tags'] = json_encode($request->tags);
        $lawyers->addMedia($avatar)->toMediaCollection('avatar');
        return redirect()->route('lawyers.index')
        ->with('success', 'Lawyer created successfully.');
    }


    public function update(LawyerRequest $request, $id)
    {
        $input = $request->validated();
        $avatar = Arr::pull($input, 'avatar');
        $lawyers = Lawyer::whereId($id)->update($input);
        if ($avatar) {
            $lawyers->clearMediaCollection('avatar');
            $lawyers->addMedia($avatar)->toMediaCollection('avatar');
        }
        return redirect()->route('lawyers.index')
        ->with('success', 'lawyer created successfully.');
    }

    public function availabilities()
    {
        return $this->morphMany('App/Models/Available', 'availabilities');
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
