@extends("layouts.Admin")

@section('content')
    <!-- Main content -->
    <style>
        img {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            width: 150px;
        }

        img:hover {
            box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
        }
    </style>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <a href="{{route('admin')}}" class="btn btn-primary btn-block mb-3">Back to Inbox</a>

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
                                    <a href="{{route('admin')}}" class="nav-link">
                                        <i class="fas fa-inbox"></i> Inbox
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
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Read Mail</h3>

                            <div class="card-tools">
                                <a href="#" class="btn btn-tool" title="Previous"><i class="fas fa-chevron-left"></i></a>
                                <a href="#" class="btn btn-tool" title="Next"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="mailbox-read-info">
                                <br>
                                <h4><b>{{$customermessage->subject}}</b></h4>
                                <h6>From: {{$customermessage->email}}
                                    <span class="mailbox-read-time float-right">{{$customermessage->created_at}}</span></h6>
                            </div>

                            <!-- /.mailbox-read-info -->
                            <div class="mailbox-controls with-border text-center">
                                <div class="btn-group">
                                    <button type="button" href="#deleteEmployeeModal" class="btn btn-default" data-toggle="modal"  class="btn btn-default btn-sm" data-container="body" title="Delete" data-duserid={{$customermessage->id}}>
                                        <i class="far fa-trash-alt"></i>
                                 </button>
                                    <button   class="btn btn-default btn-sm" title="Reply">
                                        <a href="mailto:{{$customermessage->email}}" class="link-black text-sm"><i class="fas fa-reply mr-1"></i>
                                    </a>
                                </div>
                                <!-- /.btn-group -->
                                <button type="button" onclick="window.print()" class="btn btn-default btn-sm" title="Print">
                                    <i class="fas fa-print"></i>
                                </button>
                            </div>
                            <!-- /.mailbox-controls -->
                            <div class="mailbox-read-message">
                                <p>{{$customermessage->message}}</p>
                            </div>
                            <!-- /.mailbox-read-message -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer bg-white">
                            <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
                                <li>
                                    <a target="" href="{{asset('/images/creative/'.$customermessage->attachedfile)}}">
                                        <img src="{{asset('/images/creative/'.$customermessage->attachedfile)}}" alt="Forest" style="width:150px">
                                    </a>
                                     <span class="mailbox-attachment-size clearfix mt-1">
                          <a href="" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                        </span>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-footer -->
                        <div class="card-footer">
                            <button type="button"  href="#deleteEmployeeModal" class="btn btn-default" data-toggle="modal" data-duserid={{$customermessage->id}} ><i class="far fa-trash-alt"></i> Delete</button>
                            <button type="button" onclick="window.print()" class="btn btn-default"><i class="fas fa-print"></i> Print</button>
                            <button class="btn btn-default"><a href="mailto:{{$customermessage->email}}" class="link-black text-sm"><i class="fas fa-reply mr-1"></i>reply</a></button>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
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

@endsection
