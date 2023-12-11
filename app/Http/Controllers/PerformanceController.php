<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\document;
=======
use App\Models\grade;
use App\Models\ratee;
use App\Models\ratings;
use App\Models\document;
use App\Models\evaluation;
use App\Models\indicators;
use App\Models\achievement;
use App\Models\performance;
use App\Models\signature;
>>>>>>> 1cbbd537fe19d81e5c3afe81be18a006508bccf1
use Illuminate\Http\Request;
use App\Models\perf_agreement;
use App\Models\recommendation;
use App\Models\perf_indicatorsAve;

class PerformanceController extends Controller
{
<<<<<<< HEAD

    public function index()
    {

        $doc_type = document::get();

        return view('main-page.index', compact('doc_type'));
    }

    public function ratee_info(Request $request)
    {
        $data = $request->all();
        $doc_type = $data['doc_type'];

        return view('main-page.info', compact('doc_type'));
    }


=======
    public function index()
    { 
    
        return view('main-page.index');
    }
 
>>>>>>> 1cbbd537fe19d81e5c3afe81be18a006508bccf1
}
