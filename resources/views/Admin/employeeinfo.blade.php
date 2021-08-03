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
                    <h3 class="card-title">All Employees Information</h3>

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
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Tin</th>
                            <th>Salary</th>
                            <th>Annual Leave</th>
                            <th>Experience</th>
                            <th>City</th>
                            <th>Address</th>
                            <th>Photo</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach($empinfo as $result)
                                <td class="counterCell"></td>
                            <td>{{$result->name}}</td>
                            <td>{{$result->email}}</td>
                            <td>{{$result->phone}}</td>
                            <td>{{$result->age}}</span></td>
                            <td> {{$result->gender}}</td>
                                <td>{{$result->tin}}</td>
                                <td>J{{$result->salary}}</td>
                                <td>{{$result->annual_leave}}</td>
                                <td>{{$result->experience}}</td>
                                <td>{{$result->city}}</td>
                                <td> {{$result->address}}</td>
                                    <td><img src="{{asset('/images/emp/'.$result->avatar)}}" class="img-rectangle elevation-0" width="100px;" height="50px;" alt="User Image"></td>
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

