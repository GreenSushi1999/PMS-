<?php

namespace App\Http\Controllers;

use App\Models\grade;
use App\Models\document;
use App\Models\performance;
use Illuminate\Http\Request;

class PerformanceController extends Controller
{

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

    public function save_info(Request $request)
    {
        $data = $request->all();
        $ratee_cid = 23014;
        $rater_cid = 505;
        $performance = new performance;
        $performance->ratee_cid = $ratee_cid;
        $performance->rater_cid = $rater_cid;
        $performance->position = $data['position'];
        $performance->department = $data['department'];
        $performance->period_cover = $data['period_cover'];
        $performance->save();



        return redirect('instructions');
    }

    public function instructions()
    {
        $grade1 = grade::where('cid', 1)->first();
        $grade2 = grade::where('cid', 2)->first();
        $grade3 = grade::where('cid', 3)->first();
        $grade4 = grade::where('cid', 4)->first();
        return view('main-page.instructions', compact('grade1', 'grade2', 'grade3', 'grade4'));
    }


}
