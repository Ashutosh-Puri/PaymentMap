<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states = State::where('status','0')->orderBy('name','asc')->get();
        $cities = City::orderBy('name','asc')->paginate(10);
        return view('admin.city.index',compact('states','cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = State::where('status','0')->orderBy('name','asc')->get();
        return view('admin.city.create',compact('states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, City $city)
    {
        $Data = $request->validate([

            'state_id' => ['required','integer'],
            'name' => ['required','string'],
            'status' => ['nullable'],
        ]);

        $city->state_id = $Data['state_id'];
        $city->name = $Data['name'];
        $city->status = $request->status==true?'1':'0';
        $city->save();

        return redirect()->route('admin.city.index')->with('s-status','Record Created Successfully.');
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
    public function edit(City $city)
    {
        $states = State::where('status','0')->orderBy('name','asc')->get();
        return view('admin.city.edit',compact('states','city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,City $city)
    {
        $Data = $request->validate([

            'state_id' => ['required','integer'],
            'name' => ['required','string'],
            'status' => ['nullable'],
        ]);

        $city->state_id = $Data['state_id'];
        $city->name = $Data['name'];
        $city->status = $request->status==true?'1':'0';
        $city->update();

        return redirect()->route('admin.city.index')->with('s-status','Record Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $city->delete();

        return redirect()->route('admin.city.index')->with('s-status','Record Deleted Successfully.');
    }
}
