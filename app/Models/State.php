<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;
    protected $table = 'states';
    protected $fillable = ['country_id','name','status',];

    public function states(){
        return $this->hasMany(City::class,'state_id','id')->where('status','0');
    }


}
