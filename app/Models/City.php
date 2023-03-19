<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table = 'cities';
    protected $fillable = ['state_id','name','status',];

    public function cities(){
        return $this->hasMany(Village ::class,'city_id','id')->where('status','0');
    }
}
