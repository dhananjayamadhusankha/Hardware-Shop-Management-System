@extends('employees.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br><br>
                <h2>Employees</h2>
            </div>
            <div class="pull-right">
                <br><br>
                <a class="btn btn-success" href="{{route('employees.create') }}"> Create New Employee</a>
{{--                <a class="btn btn-success" href="{{url( 'employees.create' )}}">Create</a>--}}
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <br><br>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>DOB</th>
            <th>NIC</th>
            <th>Start Date</th>
            <th>Address</th>
            <th>Mobile</th>
            <th>Gender</th>
            <th>Barcode</th>
            <th width="10px">Action</th>
        </tr>

        @foreach ($employees as $employee)

            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->date_of_birth }}</td>
                <td>{{ $employee->nic }}</td>
                <td>{{ $employee->start_date }}</td>
                <td>{{ $employee->address }}</td>
                <td>{{ $employee->mobile }}</td>
                <td>{{ $employee->gender }}</td>
                <td>{{ $employee->barcode }}</td>
                <td>
                    <form action="{{ route('employees.destroy',$employee->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('employees.show',$employee->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('employees.edit',$employee->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


@endsection
