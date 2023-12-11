<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class document extends Model
{

    protected $primaryKey = "cid";
    protected $table = "tbldoc_type";
    public $timestamps = true;


}
