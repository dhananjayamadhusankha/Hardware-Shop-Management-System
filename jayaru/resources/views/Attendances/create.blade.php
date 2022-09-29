@extends('attendances.layout')


@section('content')
    <div>
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <br><br>
                    <h2>Add Attendances</h2>
                </div>
                <br><br>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('attendances.index') }}"> Back</a>
                </div>
            </div>
        </div>


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

        <br>

        <form action="{{ route('attendances.store') }}" method="POST">
      @csrf

            <div class="col-xs-12 col-sm-12 col-md-12"><br>
                <div class="form-group">
                        <strong>Barcode:</strong><input type="barcode" id="barcode" name="barcode" placeholder="000" pattern="[0-9]{3}" required><br><br>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong><label for="name"> Name</label></strong> <input type="text" id="name" name="name"><br>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="appt"><b>In</b>:</label>
                        <input type="time" id="appt" name="appt"
                              min="09:00" max="18:00" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="appt"><b>Out</b>:</label>
                        <input type="time" id="appt" name="appt"
                              min="09:00" max="18:00" required>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="appt"><b>Working Hours</b>:</label>
                         <input type="time" id="appt" name="appt"
                               min="09:00" max="18:00" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong><label for="month_year"> Month Year:</label></strong>
                         <input type="month" id="month" name="month">
                </div>
            </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>
            </div>
        </form>
@endsection
