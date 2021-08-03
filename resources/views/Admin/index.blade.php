@extends('layouts.admin')

@section('content')
    <style>
    .pointer {cursor: pointer;}</style>
<br>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Employees</span>
                            <span class="info-box-number">
                 {{$empcount}}
                  <small>%</small>
                </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Customers</span>
                            <span class="info-box-number">1,410</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-camera"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">New Photos</span>
                            <span class="info-box-number">39</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                @if(session()->has('message'))
                    <script>swal({
                            title: "Successfully Deleted!",
                            text: "Operation successful!",
                            icon: "success",
                            button: "done!",
                            dangerMode:true,
                            timer: 2000,
                        });</script>
            @endif
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-calendar"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">All appointment</span>
                            <span class="info-box-number">20</span>
                        </div>
                        <!-- /.info-box-content -->
                        <!-- /.info-box --></div></div></div>
            <br>

                <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1>Inbox</h1>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active">Inbox</li>
                                    </ol>
                                </div>
                            </div>
                        </div><!-- /.container-fluid -->
                    </section>

                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="compose.html" class="btn btn-primary btn-block mb-3">Compose</a>

                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Folders</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="nav nav-pills flex-column">
                                            <li class="nav-item active">
                                                <a href="#" class="nav-link">
                                                    <i class="fas fa-inbox"></i> Inbox
                                                    <span class="badge bg-primary float-right"></span>
                                                    <span class="badge bg-primary float-right">{{$messagecount}}</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i class="far fa-envelope"></i> Sent
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i class="far fa-file-alt"></i> Drafts
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i class="fas fa-filter"></i> Junk
                                                    <span class="badge bg-warning float-right">65</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i class="far fa-trash-alt"></i> Trash
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>

                            <div class="col-md-9">
                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h3 class="card-title">Inbox</h3>

                                        <div class="card-tools">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control" placeholder="Search Mail">
                                                <div class="input-group-append">
                                                    <div class="btn btn-primary">
                                                        <i class="fas fa-search"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-tools -->
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body p-0">
                                        <div class="mailbox-controls">
                                        <div class="table-responsive mailbox-messages">
                                            <table class="table table-hover table-striped">
                                                <th>fav</th>
                                                <th>name</th>
                                                <th>subject</th>
                                                <th>message</th>
                                                <th>date&Time</th>
                                                @foreach($customermessage as $customermessage )
                                                <tbody>

                                                <tr>
                                                    <td class="mailbox-star pointer"><i class="fas fa-star "  id="hello" ></i></td>
                                                    <td class="mailbox-name"><a href="{{'readmessage/'.$customermessage->id}}">{{$customermessage->name}} </a></td>
                                                    <td class="mailbox-subject"><b>{{$customermessage->subject}}</b>
                                                    </td><td>&nbsp;- {{ \Illuminate\Support\Str::limit($customermessage->message, 20, $end='.......') }}</td>
                                                    <td class="mailbox-date">{{ $customermessage->created_at}}</td>
                                                </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            <!-- /.table -->
                                        </div>
                                        <!-- /.mail-box-messages -->
                                    </div>
                                    <!-- /.card-body -->
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </section>
                    <!-- /.content -->
                </div>

                    <div id="deleteEmployeeModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="{{route('deletemessage')}}" method="POST">
                                    {{csrf_field()}}
                                    <input type="hidden" id="dhiddenid" name="dhiddenid" value="">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Delete Employee</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete these Records?</p>
                                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                        <input type="submit" class="btn btn-danger" value="Delete" >
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
    </section>
@endsection
                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

