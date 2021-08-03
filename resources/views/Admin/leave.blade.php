@extends('layouts.admin')
@section('content')
    <style>
        .center_div{
            margin: 0% auto;
            width: 70% /* value of your choice which suits your alignment */
        }
    </style>
<br>

    <div class="col-md-6 center_div">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Leave request</h3>
            </div>
<form method="post" action="{{route('leaverequest')}}">
    @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Employee Name </label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-user"></i>
                      </span>
                        </div>
                       <select class="form-control" name="empid" id="empid">
                           @foreach($empinfo as $empinfo)
                           <option value="{{$empinfo->id}}">{{$empinfo->name}}</option>@endforeach
                       </select>
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->
                <label>Start Date </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="date" class="form-control float-right" id="fromdate" name="fromdate">
                </div>
                <!-- /.input group -->
                <!-- Date and time range -->
                <div class="form-group">
                    <label>End Date</label>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                        </div>
                        <input type="date" class="form-control float-right" id="todate" name="todate">
                    </div>
                    <!-- /.input group -->
                </div>
                <label>Start Date </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    </div>
                    <textarea rows="5" class="form-control float-right" id="reason" name="reason"></textarea>
                </div>
                <!-- /.input group -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">submit</button></div>


            </div></form>
<form method="post" action="{{route('addleave')}}" enctype="multipart/form-data">
    @csrf
            <div class="card card-gray-dark center_div">
                <div class="card-header">
                    <h3 class="card-title">Add Leave</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <select class="form-control" name="empid" id="empid">
                                    @foreach($empinfos as $empinfos)
                                        <option value="{{$empinfos->id}}">{{$empinfos->name}}</option>@endforeach
                                </select>
                                <label>Days</label>
                                <input type="text" id="addleave" name="addleave" required class="form-control" placeholder="insert leave days">
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">submit</button></div>
                        </div></div></div>
                <!-- /.card-body --></div><br>

            <!-- /.card -->
</form>
@endsection
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
