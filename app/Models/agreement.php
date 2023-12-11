<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agreement extends Model
{
   
    protected $primaryKey = "cid";
    protected $table = "tblagreement";
    public $timestamps = true;
}
