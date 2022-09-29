@extends('salarys.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br>
                <h2>Salary</h2>
            </div>
            <br>
            <br>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('salarys.index') }}"> Back</a>
            </div>
        </div>
    </div>
<br>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('salarys.store') }}" method="POST">
        @csrf

             <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="form-group">
                     <strong>Name:</strong>
                     <input type="text" name="name" class="form-control" placeholder="Name">
                 </div>
             </div><br><br>

            <div class="col-xs-12 col-sm-12 col-md-12">
                     <strong><label for="name"> Basic Salary Rs:</label></strong> <input type="text" id="basic_salary" name="basic_salary"><br>
                 </div><br><br>
             <div class="col-xs-12 col-sm-12 col-md-12">
                     <strong><label for="name"> OT Payments Rs:</label></strong> <input type="text" id="ot_payments" name="ot_payments"><br>
                 </div><br><br>

             <div class="col-xs-12 col-sm-12 col-md-12">
                     <strong><label for="name"> EPF/ETF Rs:</label></strong> <input type="text" id="epf_etf" name="epf_etf"><br>
                 </div><br><br>

            <div class="col-xs-12 col-sm-12 col-md-12">
                     <strong><label for="name"> Total Salary Rs:</label></strong> <input type="text" id="total_salary" name="total_salary"><br>
                 </div><br><br>

            <div class="col-xs-12 col-sm-12 col-md-12">
                     <strong><label for="month"> Month Year:</label></strong><input type="month" id="month_year" name="month_year">
                </div><br><br>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>

@endsection
