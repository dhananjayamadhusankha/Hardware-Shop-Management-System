<?php


namespace App\Http\Controllers;


use App\Models\Attendance;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $Attendances = attendance::all();

        return view('Attendances.index',compact('Attendances'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('Attendances.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        request()->validate([
            'barcode' => 'required',
            'name' => 'required',
            'in' => 'required',
            'out' => 'required',
            'working_hours' => 'required',
            'month_year' => 'required',
        ]);


        Attendance::create($request->all());


        return redirect()->route('Attendances.index')
            ->with('success','Attendance created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param Attendance $Attendance
     * @return Application|Factory|View
     */
    public function show(Attendance $Attendance)
    {
        return view('Attendances.show',compact('Attendance'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Attendance $Attendance
     * @return Application|Factory|View
     */
    public function edit(Attendance $Attendance)
    {
        return view('Attendances.edit',compact('Attendance'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Attendance $Attendance
     * @return RedirectResponse
     */
    public function update(Request $request, Attendance $Attendance): RedirectResponse
    {
        request()->validate([
            'barcode' => 'required',
            'name' => 'required',
            'in' => 'required',
            'out' => 'required',
            'working_hours' => 'required',
            'month_year' => 'required',
        ]);


        $Attendance->update($request->all());


        return redirect()->route('Attendances.index')
            ->with('success','Attendance updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Attendance $Attendance
     * @return RedirectResponse
     */
    public function destroy(Attendance $Attendance): RedirectResponse
    {
        $Attendance->delete();


        return redirect()->route('Attendances.index')
            ->with('success','Attendance deleted successfully');
    }
}
