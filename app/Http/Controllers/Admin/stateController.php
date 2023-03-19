<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class stateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states = State::orderBy('name','asc')->paginate(10);
        $countries = Country::where('status','0')->orderBy('name','asc')->get();
        return view('admin.state.index',compact('countries','states'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::where('status','0')->orderBy('name','asc')->get();
        return view('admin.state.create',compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,State $state)
    {
        $Data = $request->validate([

            'country_id' => ['required','integer'],
            'name' => ['required','string'],
            'status' => ['nullable'],
        ]);

        $state->country_id = $Data['country_id'];
        $state->name = $Data['name'];
        $state->status = $request->status==true?'1':'0';
        $state->save();

        return redirect()->route('admin.state.index')->with('s-status','Record Created Successfully.');
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
    public function edit(State $state)
    {
        $countries = Country::where('status','0')->orderBy('name','asc')->get();
        return view('admin.state.edit',compact('countries','state'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,State $state)
    {
        $Data = $request->validate([

            'country_id' => ['required','integer'],
            'name' => ['required','string'],
            'status' => ['nullable'],
        ]);

        $state->country_id = $Data['country_id'];
        $state->name = $Data['name'];
        $state->status = $request->status==true?'1':'0';
        $state->update();

        return redirect()->route('admin.state.index')->with('s-status','Record Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(State $state)
    {
        $state->delete();

        return redirect()->route('admin.state.index')->with('s-status','Record Deleted Successfully.');
    }
}
