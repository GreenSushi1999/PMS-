<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recommendation extends Model
{
    protected $primaryKey = "cid";
    protected $table = "tblrecommendation";
    public $timestamps = true;
}
