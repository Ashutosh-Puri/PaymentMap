<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FooterFormRequest;
use Illuminate\Http\Request;
use App\Models\Footer;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footer =Footer::all();
        return view('admin.footer.index',compact('footer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( )
    {
        if(Footer::count()>=1)
        {
            return redirect()->route('admin.footer.index')->with('d-status',"You Can't Create More Than One Footer.");
        }
        else
        {
            return view('admin.footer.create');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FooterFormRequest $request,Footer $footer)
    {

        if(Footer::count()>=1)
        {
            return redirect()->route('admin.footer.index')->with('d-status',"You Can't Create More Than One Footer.");
        }
        else
        {
            $Data = $request->validated();
            $footer->status        =$request->status==true?'1':'0';
            $footer->lable_1       =$Data['lable_1'];
            $footer->address       =$Data['address'];
            $footer->phone         =$Data['phone'];
            $footer->email         =$Data['email'];
            $footer->social_1      =$Data['social_1'];
            $footer->social_1_url  =$Data['social_1_url'];
            $footer->social_2      =$Data['social_2'];
            $footer->social_2_url  =$Data['social_2_url'];
            $footer->social_3      =$Data['social_3'];
            $footer->social_3_url  =$Data['social_3_url'];
            $footer->social_4      =$Data['social_4'];
            $footer->social_4_url  =$Data['social_4_url'];
            $footer->lable_2       =$Data['lable_2'];
            $footer->link_1_name   =$Data['link_1_name'];
            $footer->link_1_url    =$Data['link_1_url'];
            $footer->link_2_name   =$Data['link_2_name'];
            $footer->link_2_url    =$Data['link_2_url'];
            $footer->link_3_name   =$Data['link_3_name'];
            $footer->link_3_url    =$Data['link_3_url'];
            $footer->link_4_name   =$Data['link_4_name'];
            $footer->link_4_url    =$Data['link_4_url'];
            $footer->lable_3       =$Data['lable_3' ];
            $footer->link_5_name   =$Data['link_5_name' ];
            $footer->link_5_url    =$Data['link_5_url' ];
            $footer->link_6_name   =$Data['link_6_name' ];
            $footer->link_6_url    =$Data['link_6_url' ];
            $footer->link_7_name   =$Data['link_7_name' ];
            $footer->link_7_url    =$Data['link_7_url' ];
            $footer->link_8_name   =$Data['link_8_name' ];
            $footer->link_8_url    =$Data['link_8_url' ];
            $footer->lable_4       =$Data['lable_4' ];
            $footer->discription   =$Data['discription' ];
            $footer->devloper_name       =$Data['devloper_name' ];
            $footer->devloper_company    =$Data['devloper_company' ];
            $footer->devloper_site       =$Data['devloper_site' ];
            $footer->save();

            return redirect()->route('admin.footer.index')->with('s-status','Record Created successfully.');
        }

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
    public function edit(Footer $footer)
    {
        return view('admin.footer.edit',compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FooterFormRequest $request,Footer $footer)
    {
        $Data = $request->validated();

        $footer->status        =$request->status==true?'1':'0';
        $footer->lable_1       =$Data['lable_1'];
        $footer->address       =$Data['address'];
        $footer->phone         =$Data['phone'];
        $footer->email         =$Data['email'];
        $footer->social_1      =$Data['social_1'];
        $footer->social_1_url  =$Data['social_1_url'];
        $footer->social_2      =$Data['social_2'];
        $footer->social_2_url  =$Data['social_2_url'];
        $footer->social_3      =$Data['social_3'];
        $footer->social_3_url  =$Data['social_3_url'];
        $footer->social_4      =$Data['social_4'];
        $footer->social_4_url  =$Data['social_4_url'];

        $footer->lable_2       =$Data['lable_2'];
        $footer->link_1_name   =$Data['link_1_name'];
        $footer->link_1_url    =$Data['link_1_url'];
        $footer->link_2_name   =$Data['link_2_name'];
        $footer->link_2_url    =$Data['link_2_url'];
        $footer->link_3_name   =$Data['link_3_name'];
        $footer->link_3_url    =$Data['link_3_url'];
        $footer->link_4_name   =$Data['link_4_name'];
        $footer->link_4_url    =$Data['link_4_url'];

        $footer->lable_3       =$Data['lable_3' ];
        $footer->link_5_name   =$Data['link_5_name' ];
        $footer->link_5_url    =$Data['link_5_url' ];
        $footer->link_6_name   =$Data['link_6_name' ];
        $footer->link_6_url    =$Data['link_6_url' ];
        $footer->link_7_name   =$Data['link_7_name' ];
        $footer->link_7_url    =$Data['link_7_url' ];
        $footer->link_8_name   =$Data['link_8_name' ];
        $footer->link_8_url    =$Data['link_8_url' ];

        $footer->lable_4       =$Data['lable_4' ];
        $footer->discription   =$Data['discription' ];

        $footer->devloper_name       =$Data['devloper_name' ];
        $footer->devloper_company    =$Data['devloper_company' ];
        $footer->devloper_site       =$Data['devloper_site' ];
        $footer->update();

        return redirect()->route('admin.footer.index')->with('s-status','Record Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footer $footer)
    {
        $footer->delete();

        return redirect()->route('admin.footer.index')->with('s-status','Record Deleted successfully.');
    }
}
