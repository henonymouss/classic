<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('clientweb.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/////////////////////////// Route for Login role//////////////////////////////
Auth::routes();
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('admin');
Route::get('/employee', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employee')->middleware('employee');
/////////////////////////////////route for admin/////////////////////////////////
Route::any('/employeemgmt', [App\Http\Controllers\AdminController::class, 'addemployeeform'])->name('addemployeeform');
Route::any('/leavereq', [App\Http\Controllers\AdminController::class, 'leavereq'])->name('leavereq');
Route::post('/leaverequest', [App\Http\Controllers\AdminController::class, 'leaverequest'])->name('leaverequest');
Route::any('/addemployee', [App\Http\Controllers\AdminController::class, 'addemployee'])->name('addemployee');
Route::post('/addleave', [App\Http\Controllers\AdminController::class, 'addleave'])->name('addleave');
Route::any('/employeeinfo', [App\Http\Controllers\AdminController::class, 'employeeinfo'])->name('employeeinfo');
Route::any('/addsalary', [App\Http\Controllers\AdminController::class, 'addsalary'])->name('addsalary');
Route::any('/salarydetail', [App\Http\Controllers\AdminController::class, 'salarydetail'])->name('salarydetail');
Route::any('/addsalaryform', [App\Http\Controllers\AdminController::class, 'addsalaryform'])->name('addsalaryform');
Route::any('/Usersinformationview', [App\Http\Controllers\AdminController::class, 'user'])->name('user');
Route::any('/Edituser', [App\Http\Controllers\AdminController::class, 'edituser'])->name('edituser');
Route::any('/deleteuser', [App\Http\Controllers\AdminController::class, 'deleteuser'])->name('deleteuser');
Route::any('/Exportexcel', [App\Http\Controllers\AdminController::class, 'Exportexcel'])->name('Exportexcel');
Route::any('/exdata', [App\Http\Controllers\AdminController::class, 'data1'])->name('exdata');
Route::any('/importexcel', [App\Http\Controllers\AdminController::class, 'import'])->name('import');
Route::any('/profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('profile');
Route::any('/deletemessage', [App\Http\Controllers\AdminController::class, 'deletemessage'])->name('deletemessage');

/////////////////////////////creative clientwebsite route begin/////////////////////////////////////////////////////////
Route::get('/about', [App\Http\Controllers\clientviewController::class, 'about'])->name('about');
Route::get('/home', [App\Http\Controllers\clientviewController::class, 'home'])->name('home');
Route::get('/service', [App\Http\Controllers\clientviewController::class, 'service'])->name('service');
Route::get('/contact', [App\Http\Controllers\galleryController::class, 'contact'])->name('contact');
Route::get('/gallery', [App\Http\Controllers\clientviewController::class, 'gallery'])->name('gallery');



///////////////////////////////admin editing home pages///////////////////////
Route::get('/edithomepage', [App\Http\Controllers\clientviewController::class, 'edithomepage'])->name('edithomepage');
Route::get('/homepageinfo', [App\Http\Controllers\clientviewController::class, 'homepageinfo'])->name('homepageinfo');
Route::post('/editinghomepage', [App\Http\Controllers\clientviewController::class, 'updatehp'])->name('updatehp');




//////////////////////////////////galleries////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/galleriesform', [App\Http\Controllers\galleryController::class, 'addgalleriesform'])->name('addgalleriesform');
Route::get('/readmessage/{id}', [App\Http\Controllers\AdminController::class, 'readmessage'])->name('readmessage');
Route::post('/galleries', [App\Http\Controllers\galleryController::class, 'addgalleries'])->name('addgalleries');
Route::any('/contactus', [App\Http\Controllers\galleryController::class, 'contactus'])->name('contactus');
Route::get('/star/{id}', [App\Http\Controllers\AdminController::class, 'star'])->name('star');
Route::any('/searchgallery', [App\Http\Controllers\galleryController::class, 'searchgallery'])->name('searchgallery');
