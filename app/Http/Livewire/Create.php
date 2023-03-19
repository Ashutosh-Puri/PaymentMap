<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Country;
use App\Models\State;
use App\Models\Store;
use App\Models\Village;
use Livewire\Component;

class Create extends Component
{
    // public $countries;
    // public $states;
    // public $cities;
    // public $villages;
    //  public $stores;
     public $search;

    // public $selectedCountry=NULL;
    // public $selectedState=NULL;
    // public $selectedCity =NULL;
    // public $selectedVillage=NULL;
    public function mount()
    {
        // $this->countries = Country::where('status','0')->orderBy('name', 'asc')->get();
        // $this->states = collect();
        // $this->cities = collect();
        // $this->villages = collect();
        // $this->stores=[];


    }

    public function render()
    {
        $stores=Store::where('store_name','like','%'.$this->search.'%')->where('status','0')->orderBy('store_name','asc')->get();
        return view('livewire.create',compact('stores'));
    }
    // public function updatedSelectedCountry($country)
    // {
    //     $this->states = State::where('country_id',$country)->where('status','0')->orderBy('name', 'asc')->get();
    // }

    // public function updatedSelectedState($state)
    // {
    //     if(!is_null($state))
    //     {
    //         $this->cities = City::where('state_id',$state)->where('status','0')->orderBy('name', 'asc')->get();
    //     }
    // }
    // public function updatedSelectedCity($city)
    // {
    //     if(!is_null($city))
    //     {
    //         $this->villages = Village::where('city_id',$city)->where('status','0')->orderBy('name', 'asc')->get();
    //     }
    // }

    // public function updatedSelectedVillage($village)
    // {
    //     if(!is_null($village))
    //     {
    //        $this->stores = Store::where('village_id',$village)->where('status','0')->get();
    //     }
    // }


}
