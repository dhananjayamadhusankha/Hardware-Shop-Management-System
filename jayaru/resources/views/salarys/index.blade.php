@extends('salarys.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br><br>
                <h2>Salary</h2>
            </div>
            <div class="pull-right">
                <br><br>
                <a class="btn btn-success" href="{{route('salarys.create') }}"> Salary Details</a>
                {{--                <a class="btn btn-success" href="{{url( 'salarys.create' )}}">Create</a>--}}
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
            <th>ID</th>
            <th>Name</th>
            <th>Basic Salary</th>
            <th>OT Payments</th>
            <th>EPF/ETF</th>
            <th>Total Salary</th>
            <th>Month Year</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($Salarys as $salary)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $salary->name }}</td>
                <td>{{ $salary->basic_salary }}</td>
                <td>{{ $salary->ot_payments }}</td>
                <td>{{ $salary->epf_etf }}</td>
                <td>{{ $salary->total_salary }}</td>
                <td>{{ $salary->month_year }}</td>
                <td>
                    <form action="{{ route('salarys.destroy',$salary->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('salarys.show',$salary->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('salarys.edit',$salary->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


@endsection
