<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class grade extends Model
{
    protected $primaryKey = "cid";
    protected $table = "tblgrade";
    public $timestamps = true;
}
