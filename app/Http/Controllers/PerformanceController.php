<?php

namespace App\Http\Controllers;

use App\Models\document;
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


}
