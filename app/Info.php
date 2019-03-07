<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Info extends Model 
{

    const CREATED_AT = 'created';
    const UPDATED_AT = 'updated';
    

     protected $fillable = [
        'info_id','fname','lname','phone','email','address','package','quest','type','created','updated'

    ];

   

   
  


}
