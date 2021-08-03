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
                    <h3 class="card-title">home page Info</h3>

                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Company_Name</th>
                            <th>Background 1</th>
                            <th>Background 2</th>
                            <th>Phone</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach($hpinfo as $result)
                                <td class="counterCell"></td>
                                <td>{{$result->company_name}}</td>
                                <td><img src="{{asset('/images/creative/'.$result->bg1)}}" class="img-rectangle elevation-0" width="100px;" height="50px;" alt="User Image"></td>
                                <td><img src="{{asset('/images/creative/'.$result->b2)}}" class="img-rectangle elevation-0" width="100px;" height="50px;" alt="User Image"></td>
                                <td>{{$result->phone}}</td>
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
