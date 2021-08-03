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
                text: "the user added successfully in database",
                icon: "success",
                button: "done!",
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
                        <form method="post" action="{{route('addemployee')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" id="name" name="name" placeholder="Enter Full Name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" id="email" name="email" placeholder="Enter email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone Number</label>
                                    <input type="text" id="phone" name="phone" placeholder="Enter Phone number" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Age</label>
                                    <input type="number"  id="age" name="age" placeholder="Enter Phone number" class="form-control @error('age') is-invalid @enderror" value="{{ old('age') }}" required autocomplete="age" autofocus>
                                    @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Gender</label>
                                    <select id="gender" name="gender" class="form-control @error('gender') is-invalid @enderror" value="{{ old('gender') }}" required autocomplete="name" autofocus>
                                        <option selected>Choose...</option>
                                        <option value="Male" >Male</option>
                                        <option value="Female">Female</option>
                                        @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </select>
                                </div>

                            <div class="form-group">
                                    <label for="exampleInputEmail1">Tin Number</label>
                                    <input type="number"  id="tin" name="tin" placeholder="Enter Tin Number" class="form-control @error('tin') is-invalid @enderror" value="{{ old('tin') }}" required autocomplete="tin" autofocus>
                                @error('tin')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Salary</label>
                                    <input type="number"  id="salary"name="salary" placeholder="Enter salary" class="form-control @error('salary') is-invalid @enderror" value="{{ old('salary') }}" required autocomplete="salary" autofocus>
                                    @error('salary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Position</label>
                                    <input type="text"  id="position"name="position" placeholder="Enter position" class="form-control @error('position') is-invalid @enderror" value="{{ old('position') }}" required autocomplete="position" autofocus>
                                    @error('position')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="exampleInputEmail1">Experience</label>
                                        <textarea  id="experience" rows="5" name="experience" class="form-control @error('experience') is-invalid @enderror" value="{{ old('experience') }}" required autocomplete="experience"></textarea>
                                        @error('experience')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">City</label>
                                    <input type="text"  id="city" name="city" placeholder="Enter Your City" class="form-control @error('city') is-invalid @enderror" value="{{ old('city') }}" required autocomplete="city" autofocus>
                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Address</label>
                                    <input type="text"  id="address" name="address" placeholder="Address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}" required autocomplete="address" autofocus>
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <label for="exampleInputPassword1">Facebook</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                    <input type="text" id="facebook" name="facebook" placeholder="facebook" aria-label="facebook" aria-describedby="basic-addon1" class="form-control @error('facebook') is-invalid @enderror" value="{{ old('facebook') }}" required autocomplete="facebook" autofocus>
                                    @error('facebook')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <label for="exampleInputPassword1">Telegram</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">https://t.me/</span>
                                    <input type="text" id="youtube" name="youtube" placeholder="Telegram" aria-label="youtube" aria-describedby="basic-addon1" class="form-control @error('youtube') is-invalid @enderror" value="{{ old('youtube') }}" required autocomplete="youtube" autofocus>
                                    @error('youtube')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <label for="exampleInputPassword1">Instagram</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                    <input type="text" id="instagram" name="instagram" placeholder="instagram" aria-label="instagram" aria-describedby="basic-addon1" class="form-control @error('instagram') is-invalid @enderror" value="{{ old('instagram') }}" required autocomplete="instagram" autofocus>
                                    @error('instagram')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="exampleInputEmail1">Photo</label>
                                        <div class="col-md-6">
                                            <input type="file"  id="avatar" name="avatar" class="form-control-file">
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
