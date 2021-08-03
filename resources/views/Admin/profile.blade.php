@extends('layouts.admin')
@section('content')
    <!-- Profile Image -->
    <style>
        .center_div{
            margin: 0% auto;
            width: 50% /* value of your choice which suits your alignment */
        }
    </style>
    <div class="center_div">
    <div class="card card-primary card-outline ">
        <div class="card-body box-profile">
            <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                     src="\images\{{auth()->user()->avatar}}"
                     alt="User profile picture">
            </div>

            <h3 class="profile-username text-center">@ {{auth()->user()->username}}</h3>

            <p class="text-muted text-center">{{auth()->user()->role}}</p>

            <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <b>Email</b> <a class="float-right"> {{auth()->user()->email}}</a>
                </li>
                <li class="list-group-item">
                    <b>Name</b> <a class="float-right">{{auth()->user()->name}}</a>
                </li>
                <li class="list-group-item">
                    <b>Role</b> <a class="float-right">{{auth()->user()->role}}</a>
                </li>
            </ul>

            <button  onclick="den()" class="btn btn-primary btn-block "><b id="no">EDIT</b></button>
        </div>
        <!-- /.card-body -->
    </div>
        <!-- /.card --></div>
    <script>
        function den()
        {
            alert("Unavailable");
             document.getElementById("no").innerHTML="Unavailable";
        }
           </script>
@endsection

