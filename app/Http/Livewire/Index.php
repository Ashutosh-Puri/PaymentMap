<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Country;
use App\Models\State;
use App\Models\Store;
use App\Models\Village;
use Livewire\Component;

class Index extends Component
{
    public $storename;
    public $storecategory;
    public $countries;
    public $states;
    public $cities;
    public $villages;




    public $selectedCountry=NULL;
    public $selectedState=NULL;
    public $selectedCity =NULL;
    public $selectedVillage=NULL;

    public function clearfillter()
    {
        $this->selectedCountry=NULL;
        $this->selectedState=NULL;
        $this->selectedCity =NULL;
        $this->selectedVillage=NULL;
        $this->storename=NULL;
        $this->storecategory=NULL;
    }

    public function mount()
    {
        $this->countries = Country::where('status','0')->orderBy('name', 'asc')->get();
        $this->states = collect();
        $this->cities = collect();
        $this->villages = collect();
        // $this->stores=[];


    }

    public function render()
    {
        $stores = Store::
        when($this->selectedCountry,function($a){

            $a->where('country_id',$this->selectedCountry);
        })
        ->when($this->selectedState,function($b){

            $b->where('state_id',$this->selectedState);
        })
        ->when($this->selectedCity,function($c){

            $c->where('city_id',$this->selectedCity);
        })
        ->when($this->selectedVillage,function($d){

            $d->where('village_id',$this->selectedVillage);
        })
        ->when($this->storename,function($e){

            $e->where('store_name', 'like', '%'.$this->storename.'%');
        })
        ->when($this->storecategory,function($f){

            $f->where('store_category', 'like', '%'.$this->storecategory.'%');
        })
        ->paginate(10);
        return view('livewire.index',compact('stores'));
    }

    public function updatedSelectedCountry($country)
    {
        $this->states = State::where('country_id',$country)->where('status','0')->orderBy('name', 'asc')->get();
    }

    public function updatedSelectedState($state)
    {
        if(!is_null($state))
        {
            $this->cities = City::where('state_id',$state)->where('status','0')->orderBy('name', 'asc')->get();
        }
    }
    public function updatedSelectedCity($city)
    {
        if(!is_null($city))
        {
            $this->villages = Village::where('city_id',$city)->where('status','0')->orderBy('name', 'asc')->get();
        }
    }

    // public function updatedSelectedVillage($village)
    // {
    //     if(!is_null($village))
    //     {
    //        $this->stores = Store::where('village_id',$village)->where('status','0')->get();
    //     }
    // }
}
