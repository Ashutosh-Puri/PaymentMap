<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Icon;

class IconController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $icons = Icon::paginate(10);
        return  view('admin.icon.index',compact('icons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.icon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,Icon $icon)
    {
        $data = $request->validate([
            'category'=>['required','string'],
            'class'=>['required','string'],
            'code'=>['required','string'],
        ]);
        $icon->category = $data['category'];
        $icon->class = $data['class'];
        $icon->code = $data['code'];
        $icon->save();

        return redirect()->route('admin.icon.index')->with('s-status','Icon Created Successfully.');
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
    public function edit(Icon $icon)
    {
        return  view('admin.icon.edit',compact('icon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Icon $icon)
    {
        $data = $request->validate([
            'category'=>['required','string'],
            'class'=>['required','string'],
            'code'=>['required','string'],
        ]);
        $icon->category = $data['category'];
        $icon->class = $data['class'];
        $icon->code = $data['code'];
        $icon->update();

        return redirect()->route('admin.icon.index')->with('s-status','Icon Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Icon $icon)
    {
        $icon->delete();
        return redirect()->route('admin.icon.index')->with('s-status','Icon Deleted Successfully.');
    }
}
