@extends('salarys.layout')


@section('content')
    <div class="row">
        <div class="pull-left">
            <br>
            <br> <h2> Show Salary</h2>
        </div>
        <div class="pull-right">
            <br><br>
            <a class="btn btn-primary" href="{{ route('salarys.index') }}"> Back</a> <br>
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $salary->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Basic Salary:</strong>
            {{ $salary->basic_salary }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>OT PAYMENTS:</strong>
            {{ $salary->ot_payments }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>EPF/ETF:</strong>
            {{ $salary->epf_etf }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>TOTAL SALARY:</strong>
            {{ $salary->total_salary }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Month:</strong>
            {{ $salary->month_year }}
        </div>
</div>

@endsection
