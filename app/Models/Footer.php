<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $table ='footers';
    protected $fillable =[
        'status'    ,
        'lable_1'       ,
        'address'      ,
        'phone'        ,
        'email'        ,
        'social_1'     ,
        'social_1_url' ,
        'social_2'     ,
        'social_2_url' ,
        'social_3'     ,
        'social_3_url' ,
        'social_4'     ,
        'social_4_url' ,

        'lable_2'     ,
        'link_1_name' ,
        'link_1_url' ,
        'link_2_name' ,
        'link_2_url'  ,
        'link_3_name'   ,
        'link_3_url'    ,
        'link_4_name'  ,
        'link_4_url'  ,
        'lable_3'     ,
        'link_5_name' ,
        'link_5_url'  ,
        'link_6_name' ,
        'link_6_url'  ,
        'link_7_name' ,
        'link_7_url'  ,
        'link_8_name' ,
        'link_8_url'  ,
        'lable_4'     ,
        'discription' ,

        'devloper_name'   ,
        'devloper_company' ,
        'devloper_site',
    ];
}
