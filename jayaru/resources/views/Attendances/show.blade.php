@extends('attendances.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br>
                <br> <h2> Show Attendance</h2>
            </div>
            <div class="pull-right">
                <br><br>
                <a class="btn btn-primary" href="{{ route('attendances.index') }}"> Back</a> <br>

            </div>
        </div>
    </div>

    <br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Barcode:</strong>
                {{ $attendance->barcode }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $attendance->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>In:</strong>
                {{ $attendance->in }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Out:</strong>
                {{ $attendance->out }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Working Hours:</strong>
                {{ $attendance->working_hours }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Month Year:</strong>
                {{ $attendance->month_year }}
            </div>
        </div>
    </div>
@endsection
