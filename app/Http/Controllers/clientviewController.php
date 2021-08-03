<?php

namespace App\Http\Controllers;
use App\Models\employee;
use App\Models\gallery;

use Image;
use DB;
use App\Models\homepage;
use Illuminate\Http\Request;

class clientviewController extends Controller
{

    public function  service()
    {
        return view('clientweb.service');
    }
    public function home()
    {
        $hpdata = homepage::all();
        $catweddings =gallery::where('categories','wedding')->first();
        $catlifestyles =gallery::where('categories','lifestyles')->first();
        $catselfies =gallery::where('categories','selfies')->first();
        $catnatures =gallery::where('categories','natures')->first();
        $catvideos =gallery::where('categories','videos')->first();
        $catfashions =gallery::where('categories','fashions')->first();

//$protofashin=gallery::where('categories','wedding')->skip(2)->take(2)->get();
//$protofashin=gallery::inRandomOrder()->limit(1)->get();
        $catweddingslast =gallery::where('categories','wedding')->latest()->first();
        $catlifestyleslast =gallery::where('categories','lifestyles')->latest()->first();
        $catselfieslast =gallery::where('categories','selfies')->latest()->first();
        $catnatureslast =gallery::where('categories','natures')->latest()->first();
        $catvideoslast =gallery::where('categories','videos')->latest()->first();
        $catfashionslast =gallery::where('categories','fashions')->latest()->first();

        $countweddings = DB::table('galleries')->where('categories','wedding')->count();
        $countlifestyles = DB::table('galleries')->where('categories','lifestyles')->count();
        $countselfies = DB::table('galleries')->where('categories','selfies')->count();
        $countnatures = DB::table('galleries')->where('categories','natures')->count();
        $countvideos = DB::table('galleries')->where('categories','videos')->count();
        $countfashions = DB::table('galleries')->where('categories','fashions')->count();

        return view('clientweb.index',compact('catweddingslast','catfashionslast','catlifestyleslast','catselfieslast','catnatureslast','catvideoslast','hpdata','catweddings','catlifestyles','catselfies','catnatures','catvideos','catfashions','countweddings','countfashions','countlifestyles','countnatures','countselfies','countvideos'));


    }
public function about()
{
    $empinfo1 =employee::all();
    return view('clientweb.about',compact('empinfo1'));
}

    public function gallery()
    {
        $gallery =gallery::all();
        return view('clientweb.gallery',compact('gallery'));
    }
    public function edithomepage()
    {
        return view('clientweb.homepage');

    }
    public function homepageinfo()
    {
        $hpinfo =homepage::all();
        return view('clientweb.homepageinfo',compact('hpinfo'));

    }

    protected function updatehp(Request $data)
    {
        DB::table('homepages')->delete();
        $data->validate([
            'company_name' => ['required', 'string', 'max:255'],
        ]);

        $request = app('request');
        if ($request->hasfile('bg1')) {
            $bg1 = $request->file('bg1');
            $filename1 = time() . '.' . $bg1->getClientOriginalExtension();

            //Implement check here to create directory if not exist already

            Image::make($bg1)->resize(1920,900)->save(public_path('/images/creative/' . $filename1));
        }
        $request = app('request');
        if ($request->hasfile('bg2')) {
            $bg2 = $request->file('bg2');
            $filename2 = time() . '.' . $bg2->getClientOriginalExtension();

            //Implement check here to create directory if not exist already

            Image::make($bg2)->resize(300, 300)->save(public_path('/images/creative/' . $filename2));
        }


        homepage::create([

            'company_name' => $data['company_name'],
            'bg1' => !empty($filename1) ? $filename1 : 'wed3.jpg',
            'b2' => !empty($filename2) ? $filename2 : 'wed5.jpg',
            'phone' => $data['phone'],

        ]);
      //  return dd($data);


    }



}
