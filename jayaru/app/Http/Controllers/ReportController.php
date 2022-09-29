<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Report::all();

        return view('reports.index',compact('reports'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reports.create');
    }

    function action(Request $request)
    {
        $data = $request->all();

        $query = $data['query'];

        $filter_data = Report::select('billNo')
            ->where('billNo', 'LIKE', '%'.$query.'%')
            ->get();

        return response()->json($filter_data);

    }


//    public function autocomplete(Request $request)
//    {
//        $data =
//            Report::where('billNo','LIKE','%{$request->query}%')
//                ->orwhere('itemNo','LIKE','%{$request->query}%')
//                ->get();
//
//        return response()->json($data);
//
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([

            'billNo' => 'required',

            'itemNo' => 'required',

            'reason' => 'required',

        ]);


        Report::create($request->all());


        return redirect()->route('reports.index')

            ->with('success','Report created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        return view('reports.show',compact('report'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        return view('reports.edit',compact('report'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        request()->validate([

            'billNo' => 'required',

            'itemNo' => 'required',

            'reason' => 'required',

        ]);


        $report->update($request->all());


        return redirect()->route('reports.index')

            ->with('success','Report updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        $report->delete();


        return redirect()->route('reports.index')

            ->with('success','Report deleted successfully');
    }
}
