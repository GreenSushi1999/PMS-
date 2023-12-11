<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class document extends Model
{
<<<<<<< HEAD
    protected $primaryKey = "cid";
    protected $table = "tbldoc_type";
    public $timestamps = true;
=======
   
    protected $primaryKey = "cid";
    protected $table = "tbldoc_type";
    public $timestamps = true;
    // public function p_type()
    // {
    //     return $this->hasOne('App\payment_type', 'cid', 'payment_type');
    // }
  
>>>>>>> 1cbbd537fe19d81e5c3afe81be18a006508bccf1
}
