<?php

namespace App\Http\Controllers;

use App\Models\grade;
use App\Models\ratee;
use App\Models\ratings;
use App\Models\document;
use App\Models\evaluation;
use App\Models\indicators;
use App\Models\achievement;
use App\Models\performance;
use App\Models\signature;
use Illuminate\Http\Request;
use App\Models\perf_agreement;
use App\Models\recommendation;
use App\Models\perf_indicatorsAve;

class PerformanceController extends Controller
{
    public function index()
    { 
    
        return view('main-page.index');
    }
 
}
