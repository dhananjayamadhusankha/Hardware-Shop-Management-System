@extends('employees.layout')


@section('content')
<div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br><br>
                <h2>Add New Employee</h2>
            </div>
            <br><br>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('employees.index') }}"> Back</a>
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

         <form action="{{ route('employees.store') }}" method="POST">
         @csrf


              <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong><label for="name"> Name</label></strong> <input type="text" id="name" name="name"><br>
                  </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <b> <label for="Date Of Birth">Date Of Birth:</label></b>
                    <input type="date" id="date_of_birth" name="date_of_birth">
                </div>
              </div>
                  <br>
              <div class="col-xs-12 col-sm-12 col-md-12"><br>
                   <div class="form-group">
                       <label for="nic"><strong>NIC:</strong></label>
                       <input type="text" id="NIC" name="nic" pattern="[0-9]{10}" title="Enter only ten digits for the NIC.">
                   </div>
              </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                 <b> <label for="Start Date">Start Date:</label> </b>
                    <input type="date" id="start_date" name="start_date">
                </div>
             </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="address"><i class="fa fa-address-card-o"></i><b>Address</b> </label>
                    <input type="text" id="adr" name="address" placeholder="542/1 kandy Rd,Kiribathgoda">
                    <br><br>
                </div>
             </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group"> <strong>Mobile:</strong>
                     <input type="tel" id="mobile" name="mobile" placeholder="000-00-000000" pattern="[0-9]{3}-[0-9]{2}-[0-9]{5}" required><br><br>
                 </div>
               </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Gender:</strong>
                <input type="radio" name="Gender"
                       <?php if (isset($gender) && $gender=="female") echo "checked";?>
                       value="female">Female
                <input type="radio" name="gender"
                       <?php if (isset($gender) && $gender=="male") echo "checked";?>
                       value="male">Male
               </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12"><br>
                <div class="form-group"><strong>Barcode:</strong>
                       <input type="barcode" id="barcode" name="barcode" placeholder="000" pattern="[0-9]{3}" required><br><br>
                  </div>
             </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>

            </div>
        </div>
    </form>
@endsection
