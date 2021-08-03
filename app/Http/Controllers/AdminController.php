<?php

namespace App\Http\Controllers;
use App\Models\contactus;
use App\Models\leave;
use DateTime;
use App\Models\employee;
use App\Models\salary;
use App\Models\User;
use App\Rules\paidagain;
use http\Message;
use Illuminate\Http\Request;//
use App\Ruels;
use Image;
use Excel;
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\FromCollection;
use Symfony\Component\Console\Input\Input;
use RealRashid\SweetAlert\Facades\Alertshid;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
            //$hack = $hashed_random_password = Hash::make(str::random(8));
           // dd($hack);
      $customermessage =contactus::get()->sortByDesc('created_at');
        $messagecount=DB::table('contactuses')->count();
        $empcount  = DB::table('employees')->count();
        return view('Admin.index',compact('empcount','customermessage','messagecount'));
    }
    public function readmessage(Request $request)
    {

        $customermessage =contactus::where('id',$request->id)->first();
        $messagecount=DB::table('contactuses')->count();
        $empcount  = DB::table('employees')->count();

        return view('clientweb.readmessage',compact('empcount','customermessage','messagecount'));
    }
    public function download()
    {
        $path = public_path('images/creative/');
$file_name = time() . "_" . Input::file('attachedfile')->getClientOriginalName();
Input::file('image')->move($path, $file_name);
$filepath = public_path('images/creative/')."";
return Response::download($filepath);
    }
    public function user()
    {
        $list = User::all();
        return view('Admin.users', ['list' => $list]);


    }
    public function profile()
    {
        $list = User::all();

        return view('Admin.profile', ['list' => $list]);


    }
    public function deletemessage(Request $request)
    {
        $data = contactus::findorFail($request->dhiddenid);
        $data->delete();
        return redirect('/admin')->with('message','success!');
    }


    public function deleteuser(Request $request)
    {
        $data = User::findorFail($request->dhiddenid);
        $data->delete();
        return redirect('/Usersinformationview')->with('message','success!');
    }
    public function edituser(Request $request)
    {
        $data = User::findorFail($request->hiddenid);
        $data->name=$request->editname1;
        $data->username=$request->username;
        $data->role=$request->role;
        $data->email=$request->email;
        $data->save();
        //dd($data);
        return redirect('/Usersinformationview');
    }
    public function addemployeeform()
    {
        return view('Admin.addempform');
    }
    public function employeeinfo()
    {
        $empinfo=employee::all();
        return view('Admin.employeeinfo',compact('empinfo'));
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     *
     *@return \App\Models\employee
     */
    protected function addemployee(Request $data)
    {
        $data->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255','unique:employees'],
            'phone' => ['required', 'string', 'max:255','unique:employees'],
            'age' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'tin' => ['required', 'string','unique:employees'],
            'experience' => ['required', 'string','max:500'],
            'salary' => ['required', 'string'],
            'position' => ['required', 'string'],
            'city' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'facebook' => ['required', 'string', 'max:255'],
            'youtube' => ['required', 'string', 'max:255'],
            'instagram' => ['required', 'string', 'max:255'],
        ]);

        $request = app('request');
        if ($request->hasfile('avatar')) {
            $avatar = $request->file('avatar');
            $filename1= time() . '.' . $avatar->getClientOriginalExtension();

            //Implement check here to create directory if not exist already

            Image::make($avatar)->resize(300, 300)->save(public_path('/images/emp/' . $filename1));
        }

        employee::create([

            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'age' => $data['age'],
            'gender' => $data['gender'],
            'tin' => $data['tin'],
            'salary' => $data['salary'],
            'position'=>$data['position'],
            'experience' => $data['experience'],
            'city'=>$data['city'],
            'address'=>$data['address'],
            'facebook'=>$data['facebook'],
            'youtube'=>$data['youtube'],
            'instagram'=>$data['instagram'],
            'avatar' => !empty($filename1) ? $filename1 : 'emp.jpg',
        ]);
      // return dd($data);

       return redirect('employeemgmt')->with('message','success!');


    }

    public function addsalaryform(){
        $emp = employee::all();
        return view('Admin.addsalary',compact('emp'));
    }
    public function salarydetail(){
        $emp =  DB::table('employees')
            ->select('name','email','sal','month','year')
            ->join('salaries', 'employees.id', '=', 'salaries.emp_id')
            //->where('examinations.doctor_id', '1')
            ->get();
        return view('Admin.salarydetail',compact('emp'));


       // $emp = salary::all();
        //return view('Admin.salarydetail',compact('emp'));
    }

    protected function addsalary(Request $data)
    {
        $emp = employee::all();
        $data->validate([
            'emp_id' => ['required', 'integer', 'max:255'],
            'month' => ['required', 'string', 'max:100'],
            'salary'=>['required','integer','min:600'],
            'year' => ['required', 'integer', 'max:2050'],
        ]);

        if (salary::where('emp_id', '=', $data->emp_id)->exists()) {
            if (salary::where('month', '=', $data->month)->exists()) {
                if (salary::where('year', '=', $data->year)->exists()) {
                    return redirect('addsalaryform')->with('nmessage','success');

        }}}
        salary::create([

            'emp_id' => $data['emp_id'],
            'month' => $data['month'],
            'sal' => $data['salary'],
            'year' => $data['year']
        ]);
        return redirect('addsalaryform')->with('message','salary Paid Successfully');
    }
    public function data1()
    {
        return Excel::download(new DataExport, 'users.csv');
    }

    public function Exportexcel()
    {
        return Excel::download(new DataExport, 'users.xlsx');
        return view('Admin.users');
    }
    public function leavereq()
    {
        $empinfos=employee::all();
        $empinfo=employee::all();
        return view('Admin.leave',compact('empinfo','empinfos'));
    }
    public function leaverequest(Request $request)
    {
$leave = employee::where('id',$request->empid)->get();
        foreach ($leave as $leave)
            $count =$leave->annual_leave;

        $fromdate = $request->fromdate;
        $todate = $request->todate;
        $datetime1 = new DateTime($fromdate);
        $datetime2 = new DateTime($todate);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');//now do whatever you like with $days
       if ($count < $days)
           dd('you dont have enough Leave days');
        else
          $cl= $count - $days;
        $data = employee::findorFail($request->empid);
        $data->annual_leave= $cl;
        $data->save();
        leave::create([
        'empid'=>$request['empid'],
        'fromdate'=>$request['fromdate'],
        'todate'=>$request['todate'],
        'annual_leave'=>$cl,
        'reason'=>$request['reason'],
]);
    }
    public function addleave(Request $request)
    {
        $empinfos=employee::all();
        $empinfo=employee::all();
$data=employee::findorfail($request->empid);
$emp =employee::where('id',$request->empid)->get();
foreach ($emp as $emp)
$reqAddLeave=$request->addleave;
$empAnnualLeave= $emp->annual_leave;
$sum=$empAnnualLeave + $reqAddLeave;
$data->annual_leave=$sum;
$data->save();
return view('Admin.leave',compact('empinfos','empinfo'))->with("message","success");
    }
}
class DataExport implements FromCollection
{
    function collection()
    {
        return User::all();
    }


}
