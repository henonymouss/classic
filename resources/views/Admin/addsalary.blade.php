@extends('layouts.admin')

@section('content')

    <style>
        .center_div{
            margin: 0% auto;
            width: 70% /* value of your choice which suits your alignment */
        }
    </style>
    <br><br><br>
    <div class="card card-cyan col-md-6 center_div">
        <div class="card-header">
            <h3 class="card-title">Payment Form</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->

        <form class="form-horizontal" method="POST" action="/addsalary">
            @csrf
            @if(session()->has('nmessage'))
                <script>swal({
                        title: "Already Paid!",
                        text: "This Employee Already paid this month!",
                        icon: "warning",
                        button: "Discard!",
                        timer: 2000,
                        dangermode: true,
                    });</script>
            @endif
                @if(session()->has('message'))
                    <script>swal({
                            title: "Successfully Paid!",
                            text: "Operation successful!",
                            icon: "success",
                            button: "done!",
                            timer: 2000,
                        });</script>
            @endif

            <div class="card-body ">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Employee</label>

                    <select id="emp_id" name="emp_id" class="form-control @error('emp_id') is-invalid @enderror"  value="{{ old('emp_id') }}" required autocomplete="emp_id" autofocus>
                            <option selected>Choose...</option>
                        @foreach( $emp as $emp)
                            <option value="{{$emp->id}}">{{$emp->name}}</option>
                        @endforeach
                        @error('emp_id')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </select>

                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Month</label>
                    <select id="month" name="month" class="form-control @error('month') is-invalid @enderror"  value="{{ old('month') }}" required autocomplete="month" autofocus>
                        <option selected>Choose...</option>
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="march">march</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>

                    @error('month')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    </select>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Net Salary</label>
                    <input type="text" id="salary" name="salary" class="form-control @error('salary') is-invalid @enderror"  value="{{ old('salary') }}" required autocomplete="salary" autofocus>
                    @error('salary')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror</div>
                    <!-- /.card-body -->
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Year</label>
                    <input type="text" id="year" name="year"class="form-control @error('year') is-invalid @enderror"  value="{{ old('year') }}" required autocomplete="year" autofocus>
                    @error('year')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Pay</button>
                <button type="clear" class="btn btn-default float-right">Cancel</button>
            </div>
            </div><!-- /.card-footer -->
        </form>
@endsection
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
