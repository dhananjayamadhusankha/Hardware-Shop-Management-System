@extends('reports.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="font-family: Poppins">Report</h2>
            </div>
            <div style="text-align: right">
                <a class="btn btn-success" href="{{ route('reports.create') }}"> Create New Report</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
<br>
    @if(isset($reports))
    <table class="table table-hover" style="font-family: Poppins">
        <tr>
            <th>No</th>
            <th>Bill No</th>
            <th>Item No</th>
            <th>Date & Time</th>
            <th width="280px">Action</th>
        </tr>
                @foreach ($reports as $report)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $report->billNo }}</td>
                        <td>{{ $report->itemNo }}</td>
                        <td>{{ $report->created_at->format('Y-m-d  h:i A') }}</td>

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
            @else
                <tr>
                    <td>No result Found!</td>
                </tr>
            @endif
    </table>
            <div class="pagination-block">
{{--                {{$reports->links('layouts.paginationlinks')}}--}}
            </div>
@endsection

