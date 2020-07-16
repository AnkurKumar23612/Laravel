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
	//return "Ankur Kumar";
   return view('welcome');
});
Route::get('/hello', function () {
	return "Hello";
   //return view('welcome');
});


Route::get('/insert', function () {

 DB::insert('insert into posts(title,body,is_admin) values(?,?,?)',['php','Laravel',2]);


});


Route::get('/read', function () {

 $results=DB::select('select *from posts where id=?',[1]);

 foreach ($results as $post) {
 	# code...

 	return $post->title;
 }


});

Route::get('/update', function () {

 $updated=DB::update('update posts set title="New Laravel" where id=?',[1]);

return $updated;

});

Route::get('/delete', function () {

 $deleted=DB::delete('delete from posts where id=?',[1]);

return $deleted;

});