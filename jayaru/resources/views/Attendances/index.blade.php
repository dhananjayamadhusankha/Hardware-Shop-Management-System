@extends('attendances.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br><br>
                <h2>Attendance</h2>
            </div>
            <div class="pull-right">
                <br><br>
                <a class="btn btn-success" href="{{route('attendances.create') }}"> Create New Attendances</a>
                {{--                <a class="btn btn-success" href="{{url( '$attendances.create' )}}">Create</a>--}}
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
            <th>Barcode</th>
            <th>Name</th>
            <th>In</th>
            <th>Out</th>
            <th>Working Hours</th>
            <th>Month Year</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($Attendances as $attendance)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $attendance->barcode }}</td>
                <td>{{ $attendance->name }}</td>
                <td>{{ $attendance->in }}</td>
                <td>{{ $attendance->out }}</td>
                <td>{{ $attendance->working_hours }}</td>
                <td>{{ $attendance->month_year }}</td>
                <td>
                    <form action="{{ route('attendances.destroy',$attendance->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('attendances.show',$attendance->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('attendances.edit',$attendance->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


@endsection
