<?php


namespace App\Http\Controllers;


use App\Models\Salary;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $Salarys = Salary::all();

        return view('salarys.index',compact('Salarys'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('salarys.create');
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

                'name' => 'required',
                'basic_salary' => 'required',
                'ot_payments' => 'required',
                'epf_etf' => 'required',
                'total_salary' => 'required',
                'month_year' => 'required',
            ]);


        Salary::create($request->all());


        return redirect()->route('salarys.index')
            ->with('success','Salary created successfully.');

    }


    /**
     * Display the specified resource.
     *
     * @param Salary $salary
     * @return Application|Factory|View
     */
    public function show(Salary $salary)
    {
        return view('salarys.show',compact('salary'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Salary $salary
     * @return Application|Factory|View
     */
    public function edit(Salary $salary)
    {
        return view('Salarys.edit',compact('salary'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Salary $salary
     * @return RedirectResponse
     */
    public function update(Request $request, Salary $salary): RedirectResponse
    {
        request()->validate([
            'name' => 'required',
            'basic_salary' => 'required',
            'ot_payments' => 'required',
            'epf_etf' => 'required',
            'total_salary' => 'required',
            'month_year' => 'required',
        ]);


        $salary->update($request->all());


        return redirect()->route('salarys.index')
            ->with('success','Salary updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Salary $salary
     * @return RedirectResponse
     */
    public function destroy(Salary $salary): RedirectResponse
    {
        $salary->delete();


        return redirect()->route('salarys.index')
            ->with('success','Salary deleted successfully');
    }
}
