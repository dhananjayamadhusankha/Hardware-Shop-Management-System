<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
//    function search(Request $request) {
//
//        if (isset($_GET['billNo'])){
//            $search_text = $_GET['billNo'];
//            $reports = DB::table('reports')->where('billNo', 'LIKE', '%'.$search_text.'%')->paginate(2);
//            $reports -> appends($request->all());
//            return view('reports.index', ['reports'=>$reports]);
//        } else {
//            return view('reports.index');
//        }
//
//    }
    public function search () {
        $search_text = $_GET['billNo'];
        $reports = Report::where('billNo', 'LIKE', '%'.$search_text.'%')->with('reports')->get();
        return view('reports.search', compact('reports'));
    }
}


