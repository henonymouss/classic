<?php

namespace App\Http\Controllers;
use App\Models\contactus;
use App\Models\employee;
use Image;
use DB;
use App\Models\gallery;
use Illuminate\Http\Request;

class galleryController extends Controller
{
    public function searchgallery(Request $request)
    {
      $srch=gallery::where('id',$request->id);
      dd($srch);

    }
    public function contact()
    {
        return view('clientweb.contact');
    }

    public function addgalleriesform()
    {
        return view('clientweb.addnewgalleries');
    }


    protected function addgalleries(Request $data)
    {
        $data->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'categories' => ['required', 'string', 'max:255'],
            'captured_by' => ['required', 'string', 'max:255'],
            'date' => ['required', 'string', 'max:255'],
        ]);

        $request = app('request');
        if ($request->hasfile('image')) {
            $image = $request->file('image');
            $filename1 = time() . '.' . $image->getClientOriginalExtension();

            //Implement check here to create directory if not exist already

            Image::make($image)->resize(360, 360)->save(public_path('/images/creative/' . $filename1));
        }

        gallery::create([

            'name' => $data['name'],
            'description' => $data['description'],
            'categories' => $data['categories'],
            'captured_by' => $data['captured_by'],
            'date' => $data['date'],
            'image' => !empty($filename1) ? $filename1 : 'emp.jpg',
        ]);
        // return dd($data);

        return redirect('galleriesform')->with('message', 'success!');

    }

    protected function contactus(Request $data)
    {
        $data->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'numeric','digits:10'],
            'subject' =>['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);
        $request = app('request');
        if ($request->hasfile('attachedfile')) {
            $attachedfile = $request->file('attachedfile');
            $filename1 = time() . '.' . $attachedfile->getClientOriginalExtension();

            //Implement check here to create directory if not exist already

            Image::make($attachedfile)->resize(360, 360)->save(public_path('/images/creative/' . $filename1));
        }
        contactus::create([

            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'subject'=>$data['subject'],
            'message' => $data['message'],
            'attachedfile' => !empty($filename1) ? $filename1 : '',
        ]);

        return redirect('contact')->with('message','');
    }
}
