<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFormRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Village;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AStoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $store = Store::paginate(10);
        return view('admin.store.index',compact('store'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $countries = Country::where('status','0')->orderBy('name','asc')->get();
        $states = State::where('status','0')->orderBy('name','asc')->get();
        $cities = City::where('status','0')->orderBy('name','asc')->get();
        $villages = Village::where('status','0')->orderBy('name','asc')->get();
        return view('admin.store.create',compact('countries','states','cities','villages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormRequest $request)
    {
        $Data = $request->validated();
        $store = new Store;
        $store->store_name =        $Data['store_name'];
        $store->owner_name =        $Data['owner_name'];
        $store->store_category =    $Data['store_category'];
        $store->store_type =        $Data['store_type'];
        $store->store_time =        $Data['store_time'];
        $store->store_site =        $Data['store_site'];
        $store->account_no =        $Data['account_no'];
        $store->ifsc_code =         $Data['ifsc_code'];
        $store->account_name =      $Data['account_name'];
        $store->upi_id =            $Data['upi_id'];
        $store->status =            $request->status==true?'1':'0';
        $store->user_id =           Auth::user()->id;
        $store->country_id =        $Data['country_id'];
        $store->state_id =          $Data['state_id'];
        $store->city_id =           $Data['city_id'];
        $store->village_id =        $Data['village_id'];
        $store->street =            $Data['street'];
        if($request->hasFile('store_photo'))
        {
            $file= $request->file('store_photo');
            $ext = $file->getClientOriginalExtension();
            $filename= time().'.'.$ext;
            $file-> move('Uploads/store/photo', $filename);
            $store->store_photo =  $filename;
        }

        if($request->hasFile('store_qr')){

            $file= $request->file('store_qr');
            $ext = $file->getClientOriginalExtension();
            $filename= time().'.'.$ext;
            $file-> move('Uploads/store/qr', $filename);
            $store->store_qr =  $filename;
        }
        $store->save();

        return redirect()->route('admin.astore.index')->with('s-status','Record Created Successfully.');
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
    public function edit(Store $astore)
    {
        $store =$astore;
        $countries = Country::where('status','0')->orderBy('name','asc')->get();
        $states = State::where('status','0')->orderBy('name','asc')->get();
        $cities = City::where('status','0')->orderBy('name','asc')->get();
        $villages = Village::where('status','0')->orderBy('name','asc')->get();
        return view('admin.store.edit',compact('store','countries','states','cities','villages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFormRequest $request,Store $astore)
    {
        $Data= $request->validated();
        $astore->store_name =        $Data['store_name'];
        $astore->owner_name =        $Data['owner_name'];
        $astore->store_category =    $Data['store_category'];
        $astore->store_type =        $Data['store_type'];
        $astore->store_time =        $Data['store_time'];
        $astore->store_site =        $Data['store_site'];
        $astore->account_no =        $Data['account_no'];
        $astore->ifsc_code =         $Data['ifsc_code'];
        $astore->account_name =      $Data['account_name'];
        $astore->upi_id =            $Data['upi_id'];
        $astore->status =            $request->status==true?'1':'0';
        $astore->user_id =           Auth::user()->id;
        $astore->country_id =        $Data['country_id'];
        $astore->state_id =          $Data['state_id'];
        $astore->city_id =           $Data['city_id'];
        $astore->village_id =        $Data['village_id'];
        $astore->street =            $Data['street'];
        if($request->hasFile('store_photo'))
        {
            $path ='Uploads/store/photo/'.$astore->store_photo;

            if (File::exists($path))
            {
                File::delete($path);
            }

            $file= $request->file('store_photo');
            $ext = $file->getClientOriginalExtension();
            $filename= time().'.'.$ext;
            $file-> move('Uploads/store/photo', $filename);
            $astore->store_photo =  $filename;
        }

        if($request->hasFile('store_qr')){

            $path ='Uploads/store/qr/'.$astore->store_qr;
            if (File::exists($path))
            {
                File::delete($path);
            }

            $file= $request->file('store_qr');
            $ext = $file->getClientOriginalExtension();
            $filename= time().'.'.$ext;
            $file-> move('Uploads/store/qr', $filename);
            $astore->store_qr =  $filename;
        }
        $astore->update();

        return redirect()->route('admin.astore.index')->with('s-status','Record Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $astore)
    {
        $astore->delete();

        return redirect()->route('admin.astore.index')->with('s-status','Record Deleted Successfully.');
    }
    public function remove(Store $id,$img)
    {

        if($img==1)
        {
            $path ='Uploads/store/photo/'.$id->store_photo;
            File::delete($path);
            $id->store_photo ="";
        }
         if($img==2)
        {
            $path= 'Uploads/store/qr/'.$id->store_qr;
            File::delete($path);
            $id->store_qr ="";
        }
        $id->update();

        return redirect()->route('admin.astore.edit',$id)->with('s-status','Image Deleted Successfully.');
    }
}

