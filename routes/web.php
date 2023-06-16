<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RejectController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AppointmentController;

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
      return view('User.index');
  });

 Route::get('/dashboard', function () {
         if(Auth::check()){
         if(Auth::user()->role =='admin'){
             return redirect()->route('overView');
        }else if(Auth::user()->role =='user'){
             return redirect()->route('user.index');
         }
    }
  })->middleware(['auth', 'verified'])->name('dashboard');
  Route::get('overView',function(){
    return view('admin.overView.index');
  })->name('overView');

//  Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//     });

Route::post('resultDoctor','HomeController@searchDoctor')->name('user.searchDoctor');
Route::get('speciality','HomeController@speciality')->name('speciality');
Route::get('/adminhome', 'AdminController@index')->name('admin.index');
Route::get('/home', 'HomeController@index')->name('user.index');
Route::get('/about', 'HomeController@about')->name('user.about');
Route::get('/doctor', 'HomeController@doctor')->name('user.doctor');
Route::get('/news', 'HomeController@news')->name('user.news');
Route::get('/services', 'HomeController@service')->name('user.service');
Route::get('/reviews', 'HomeController@review')->name('user.review');
Route::get('/contact', 'HomeController@contact')->name('user.contact');
Route::get('seeMore/{id}','HomeController@seeMore')->name('seeMore');
Route::get('laboratory','HomeController@laboratory')->name('laboratory');

 Route::get('doctorList','DoctorController@doctorList')->name('doctorList');
 Route::get('newDoctor','DoctorController@newDoctor')->name('newDoctor');
 Route::post('createDoctor','DoctorController@create')->name('createDoctor');
 Route::get('editDoctor/{id}','DoctorController@edit')->name('editDoctor');
 Route::post('updateDoctor/{id}','DoctorController@update')->name('updateDoctor');
 Route::get('deleteDoctor/{id}','DoctorController@delete')->name('deleteDoctor');
 Route::get('seemoreDoctor/{id}','DoctorController@seemore')->name('seeDoctor');
 Route::post('searchDoctor','DoctorController@search')->name('searchDoctor');
 Route::get('findDoctor','FindController@findDoctorPage')->name('findDoctor');
 Route::post('resultDoctor','FindController@find')->name('resultDoctor');

  Route::get('newsList','NewsController@newList')->name('newsList');
  Route::get('newNews','NewsController@newNews')->name('newNews');
  Route::post('createNews','NewsController@create')->name('createNews');
  Route::get('editNews/{id}','NewsController@edit')->name('editNews');
  Route::post('updateNews/{id}','NewsController@update')->name('updateNews');
  Route::get('deleteNews/{id}','NewsController@delete')->name('deleteNews');
  Route::get('seemoreNews/{id}','NewsController@seemore')->name('seeNews');
  Route::post('searchNews','NewsController@search')->name('searchNews');
  Route::get('readMore/{id}','NewsController@readMore')->name('readMore');

//   Route::get('Reject/{id}','AcceptController@accept')->name('accept');
//   Route::get('acceptList','AcceptController@acceptList')->name('acceptList');
//   Route::get('editAccept/{id}','AcceptController@editAccept')->name('editAccept');
//   Route::post('updateAccept/{id}','AcceptController@updateAccept')->name('updateAccept');
//   Route::get('deleteAccept/{id}','AcceptController@deleteAccept')->name('deleteAccept');
//   Route::get('seemoreAccept/{id}','AcceptController@seemoreAccept')->name('seemoreAccept');
//   Route::post('searchAccept','AcceptController@searchAccept')->name('searchAccept');

//   Route::get('reject/{id}','RejectController@Reject')->name('reject');
//   Route::get('rejectList','RejectController@RejectList')->name('rejectList');
//   Route::get('editReject/{id}','RejectController@editReject')->name('editReject');
//   Route::post('updateReject/{id}','RejectController@updateReject')->name('updateReject');
//   Route::get('deleteReject/{id}','RejectController@deleteReject')->name('deleteReject');
//   Route::get('seemoreReject/{id}','RejectController@seemoreReject')->name('seemoreReject');
//   Route::post('searchReject','RejectController@searchReject')->name('searchReject');

  Route::get('appointmentList','AppointmentController@appointmentList')->name('appointmentList');
//   Route::get('newAppointments','AppointmentsController@newNews')->name('newAppointments');
  Route::post('requestAppointment','AppointmentController@save')->name('requestAppointment');
  Route::post('searchAppointment','AppointmentController@search')->name('searchAppointment');
  Route::get('accept/{id}','AppointmentController@accept')->name('accept');
  Route::get('reject/{id}','AppointmentController@reject')->name('reject');
  Route::get('cancelList/{id}','AppointmentController@cancel')->name('cancelList');





//  Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
//        Route::get('/home', 'AdminController@index')->name('index');

//   });

  Route::get('doctorList','DoctorController@doctorList')->name('doctorList');
  Route::get('newDoctor','DoctorController@newDoctor')->name('newDoctor');
  Route::post('createDoctor','DoctorController@create')->name('createDoctor');
  Route::get('editDoctor/{id}','DoctorController@edit')->name('editDoctor');
  Route::post('updateDoctor/{id}','DoctorController@update')->name('updateDoctor');
  Route::get('deleteDoctor/{id}','DoctorController@delete')->name('deleteDoctor');
  Route::get('seeDoctor/{id}','DoctorController@seemore')->name('seeDoctor');
  Route::post('searchDoctor','DoctorController@search')->name('searchDoctor');

  Route::get('patientList','PatientController@patientList')->name('patientList');
  Route::post('searchPatient','PatientController@search')->name('searchPatient');
//   Route::get('emailView/{id}','PatientController@emailView')->name('emailView');
Route::get('send-mail',function(){
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body'  =>  'This is for testing email using smtp'
    ];
    \Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\MyTestMail($details));
})->name('emailView');

  Route::get('newsList','NewsController@newList')->name('newsList');
  Route::get('newNews','NewsController@newNews')->name('newNews');
  Route::post('createNews','NewsController@create')->name('createNews');
  Route::get('editNews/{id}','NewsController@edit')->name('editNews');
  Route::post('updateNews/{id}','NewsController@update')->name('updateNews');
  Route::get('deleteNews/{id}','NewsController@delete')->name('deleteNews');
  Route::get('seeNews/{id}','NewsController@seemore')->name('seeNews');
  Route::get('searchNews','NewsController@search')->name('searchNews');

  Route::get('userProfile','ProfileController@profile')->name('userProfile');
  Route::get('userProfileEdit','ProfileController@edit')->name('userProfileEdit');
  Route::post('userProfileImgEdit/{id}','ProfileController@editImg')->name('userProfileImgEdit');
  Route::post('userProfileUpdate/{id}','ProfileController@update')->name('userProfileUpdate');
  Route::get('userChangePwd','ProfileController@changePwd')->name('userChangePwd');
  Route::post('updatePwd/{id}','ProfileController@updatePwd')->name('updatePwd');

//  Route::group(['prefix' => 'user', 'as' => 'user.', 'namespace' => 'User', 'middleware' => ['auth']],  function () {
//  Route::get('/home', 'UserController@index')->name('index');
// });


// Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
//  Route::get('profile','AdminController@profile')->name('admin#profile');
//  Route::post('update/{id}','AdminController@update')->name('admin#update');
//  Route::get('changePassword','AdminController@changePasswordPage')->name('admin#changePasswordPage');
//  Route::post('changePassword/{id}','AdminController@changePassword')->name('admin#changePassword');

 Route::middleware('auth')->group(function () {
 Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
 Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
 Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
 });

// require __DIR__.'/auth.php';
//  Route::get('/home', function () {
//           return view('User.index');
//   })->middleware(['auth', 'verified'])->name('dashboard');

//  Route::middleware(['auth:sanctum','verified'])->get('/dashboard', function () {
//     if(Auth::check()){
//         if(Auth::user()->role =='admin'){
//             return redirect()->route('admin#profile');
//         }else if(Auth::user()->role =='user'){
//             return redirect()->route('user#index');
//         }
//     }
// })->name('dashboard');


