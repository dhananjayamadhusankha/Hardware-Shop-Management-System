@extends('reports.layout')

@section('content')

    <table class="table table-hover">
        <thead>
        <tr>
            <td>No</td>
            <th>Bill No</th>
            <th>Item No</th>
            <th>Reason</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($reports as $report)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $report->billNo }}</td>
                    <td>{{ $report->itemNo }}</td>
                    <td>{{ $report->reason }}</td>
                    <td>
                        <form action="{{ route('reports.destroy',$report->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('reports.show',$report->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('reports.edit',$report->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            {{csrf_field()}}
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

@endsection


