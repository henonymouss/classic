@extends('layouts.admin')
@section('content')
    <style>
        table {
            counter-reset: tableCount;
        }
        .counterCell:before {
            content: counter(tableCount);
            counter-increment: tableCount;
        }

    </style>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Salary Detail</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>Month</th>
                            <th>Net Salary</th>
                            <th>Year</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach($emp as $result)
                                <td class="counterCell"></td>
                            <td>{{$result->name}}</td>
                            <td>{{$result->month}}</td>
                            <td>{{$result->sal}}</td>
                            <td>{{$result->year}}</span></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->

    <!-- Modal -->
@endsection

