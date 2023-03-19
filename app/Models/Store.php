<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $table ='stores';
    protected $fillable =[
        'store_name',
        'owner_name',
        'store_category',
        'store_type',
        'store_time',
        'store_site',
        'store_photo',
        'store_qr',
        'account_no',
        'ifsc_code',
        'account_name',
        'upi_id',
        'status',
        'user_id',
        'country_id',
        'state_id',
        'city_id',
        'village_id',
        'street',
    ];


}
