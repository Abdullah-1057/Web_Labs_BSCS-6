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
| urls => view or controllr 

  and if controller then view
  centralized point that manages urls
  cotroller here laso used to view
  for evry url route
  controller selects method 
  generally invokes controller
  -------------------------------------
   2 types of route:get and route:post

*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});
/* route::get/post('URL',function()) 
{
    retrun view/controller('');
}
URL -> web.php -> studentController:showStudents -> student model<>all records read from student table
->returns data in student variavle ->model->controller-> viewofAll syudents+ data->all stdents view(displays data)
*/
Route::get('/All', 'App\Http\Controllers\StudentsController@showStudents');
