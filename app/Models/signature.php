<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class signature extends Model
{
    protected $primaryKey = "cid";
    protected $table = "tblsignatures";
    public $timestamps = true;
}
