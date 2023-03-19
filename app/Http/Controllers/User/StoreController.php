<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFormRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use App\Models\Store;
use App\Models\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class StoreController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $store = Store::where('user_id',Auth::user()->id)->paginate(10);
        return view('user.store.index',compact('store'));
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
        return view('user.store.create',compact('countries','states','cities','villages'));
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

        return redirect()->route('user.store.index')->with('s-status','Record Created Successfully.');
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
    public function edit(Store $store)
    {
        $countries = Country::where('status','0')->orderBy('name','asc')->get();
        $states = State::where('status','0')->orderBy('name','asc')->get();
        $cities = City::where('status','0')->orderBy('name','asc')->get();
        $villages = Village::where('status','0')->orderBy('name','asc')->get();
        return view('user.store.edit',compact('store','countries','states','cities','villages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFormRequest $request,Store $store)
    {
        $Data = $request->validated();
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
            $path ='Uploads/store/photo/'.$store->store_photo;

            if (File::exists($path))
            {
                File::delete($path);
            }

            $file= $request->file('store_photo');
            $ext = $file->getClientOriginalExtension();
            $filename= time().'.'.$ext;
            $file-> move('Uploads/store/photo', $filename);
            $store->store_photo =  $filename;
        }

        if($request->hasFile('store_qr')){

            $path ='Uploads/store/qr/'.$store->store_qr;
            if (File::exists($path))
            {
                File::delete($path);
            }

            $file= $request->file('store_qr');
            $ext = $file->getClientOriginalExtension();
            $filename= time().'.'.$ext;
            $file-> move('Uploads/store/qr', $filename);
            $store->store_qr =  $filename;
        }

        $store->update();

        return redirect()->route('user.store.index')->with('s-status','Record Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        $store->delete();

        return redirect()->route('user.store.index')->with('s-status','Record Deleted Successfully.');
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

        return redirect()->route('user.store.edit',$id)->with('s-status','Image Deleted Successfully.');
    }
}
