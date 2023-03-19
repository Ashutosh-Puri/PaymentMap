<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Village;
use Illuminate\Http\Request;

class VillageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cities = City::where('status','0')->orderBy('name','asc')->get();
        $villages = Village::orderBy('name','asc')->paginate(10);
        return view('admin.village.index',compact('villages','cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::where('status','0')->orderBy('name','asc')->get();
        return view('admin.village.create',compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,Village $village)
    {
        $Data = $request->validate([

            'city_id' => ['required','integer'],
            'name' => ['required','string'],
            'status' => ['nullable'],
        ]);

        $village->city_id = $Data['city_id'];
        $village->name = $Data['name'];
        $village->status = $request->status==true?'1':'0';
        $village->save();

        return redirect()->route('admin.village.index')->with('s-status','Record Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(village $village)
    {
        $cities = City::where('status','0')->orderBy('name','asc')->get();
        return view('admin.village.edit',compact('cities','village'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Village $village)
    {
        $Data = $request->validate([

            'city_id' => ['required','integer'],
            'name' => ['required','string'],
            'status' => ['nullable'],
        ]);

        $village->city_id = $Data['city_id'];
        $village->name = $Data['name'];
        $village->status = $request->status==true?'1':'0';
        $village->update();

        return redirect()->route('admin.village.index')->with('s-status','Record Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Village $village)
    {
        $village->delete();

        return redirect()->route('admin.village.index')->with('s-status','Record Delete Successfully.');
    }
}
