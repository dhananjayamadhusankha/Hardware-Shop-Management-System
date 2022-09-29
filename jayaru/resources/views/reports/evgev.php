<?php
//</form>
//
//@if(isset($reports))
//                    <table class="table table-bordered">
//                        <tr>
//                            <th>No</th>
//                            <th>Bill No</th>
//                            <th>Item No</th>
//                            <th>Reason</th>
//                            <th width="280px">Action</th>
//                        </tr>
//@foreach ($reports as $report)
//                        <tr>
//                            <td>{{ ++$i }}</td>
//                            <td>{{ $report->billNo }}</td>
//                            <td>{{ $report->itemNo }}</td>
//                            <td>{{ $report->reason }}</td>
//                            <td>
//                                <form action="{{ route('reports.destroy',$report->id) }}" method="POST">
//                                    <a class="btn btn-info" href="{{ route('reports.show',$report->id) }}">Show</a>
//                                    <a class="btn btn-primary" href="{{ route('reports.edit',$report->id) }}">Edit</a>
//@csrf
//                                    @method('DELETE')
//                                    <button type="submit" class="btn btn-danger">Delete</button>
//                                </form>
//                            </td>
//                        </tr>
//@endforeach
//                    </table>
//@endif
