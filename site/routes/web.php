<?php

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
    return view('welcome');
});

Route::get('hello', function(){
    return 'hello Laravel';
});

//-----------------GET---------------
// ไปเรียก function hello จาก controller ที่ชื่อ welcomeController.php
Route::get('welcome/hello', 'WelcomeController@hello');

//id ต้องใส่ ถ้าไม่ใส่จะ error , not found
Route::get('welcome/page/{id}', 'WelcomeController@page');

//id ใส่ หรือไม่ใส่ก็ได้
Route::get('welcome/page2/{id?}', 'WelcomeController@page2');

// id ต้องใส่ และต้องเป็นตัวเลขเท่านั้น อย่างน้อย 1 ตัว
// title จะใส่หรือไม่ใส่ก็ได้ ถ้าใส่ต้องเป็นตัวอักษรภาษาอังกฤษเท่านั้น
Route::get('welcome/page3/{id}/{title?}', 'WelcomeController@page3')
->where(['id' => '[0-9]+', 'title' => '[a-zA-z]+']);

//---------------CONTROLLER---------------
// ไปเรียกฟังก์ชั่น getHello (ยังไม่ได้TT)
// Route::controller('welcome', 'WelcomeController');


// UserController
Route::get('user/{id}', 'UserController@show');




// RegisterController
use Illuminate\Http\Request; // เรียกใช้งานคลาส Request
Route::get('/', function () {
    return view('register'); // โหลด register view แสดง html form ในครั้งแรก
});
Route::post('register',function (Request $request) {
	$fname = $request->input('fname'); // รับตัวแปร fname จาก html form
	$lname = $request->input('lname'); // รับตัวแปร lname จาก html form
	$age= $request->input('age'); // รับตัวแปร age จาก html form
	$data = array(
		'fname' => $fname,
		'lname' => $lname,
		'age' => $age
	);
    return view("register",$data); // return ค่าออกไปแสดงที่ register view
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
