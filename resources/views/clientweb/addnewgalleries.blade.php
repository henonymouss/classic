@extends('layouts.admin')

@section('content')
    <style>
        .center_div{
            margin: 0% auto;
            width: 80% /* value of your choice which suits your alignment */
        }
    </style>
    @if(session()->has('message'))
        <script>swal({
                title: "Successfully Added!",
                text: "your data saved successfully to database!",
                icon: "success",
                button: "ok!",
                timer: 2000,
            });</script>
    @endif
    <!-- left column --><br><br>
    <div class="col-md-11 center_div">
        <!-- general form elements -->
        <div class="card card-cyan">
            <div class="card-header">
                <h3 class="card-title">Add New Employee</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{route('addgalleries')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter  Name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea rows="5" type="text" id="description" name="description" placeholder="Enter email" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}" required autocomplete="description" autofocus></textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Categories</label>
                        <select id="categories" name="categories" class="form-control @error('categories') is-invalid @enderror" value="{{ old('categories') }}" required autocomplete="categories" autofocus>
                            <option selected>Choose...</option>
                            <option value="normal" >Normal</option>
                            <option value="wedding" >Weddings</option>
                            <option value="fashions">Fashions</option>
                            <option value="selfies" >Selfies</option>
                            <option value="lifestyles">Life Styles</option>
                            <option value="natures" >Natures</option>
                            <option value="videos">Videos</option>
                            @error('categories')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Captured_by</label>
                        <select id="captured_by" name="captured_by" class="form-control @error('captured_by') is-invalid @enderror" value="{{ old('captured_by') }}" required autocomplete="captured_by" autofocus>
                            <option selected>Choose...</option>
                            <option value="Brook" >Brook</option>
                            <option value="Gidey">Gidey</option>
                            @error('captured_by')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Date</label>
                        <input type="datetime-local" id="date" name="date" placeholder="Enter Full Name" class="form-control @error('date') is-invalid @enderror" value="{{ old('date') }}" required autocomplete="date" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="exampleInputEmail1">Photo</label>
                            <div class="col-md-6">
                                <input type="file"  id="image" name="image" class="form-control-file">
                            </div>
                        </div></div>
                </div>
                <div class="card-footer">
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
    </form>
    </div>
    <!-- /.card -->

@endsection
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
