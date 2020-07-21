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

Use App\User;
Use App\Post;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/create', function () {
   
	$user=User::findOrFail(1);

	$user->posts()->save(new Post(['title'=>'java','body'=>'Spring']));

});




Route::get('/update', function () {
   
	$user=User::findOrFail(1);

	$user->posts()->where('id','=',1)->update(['title'=>'Boot']);

});


Route::get('/read', function () {
   
	$user=User::findOrFail(1);

	foreach ($user->posts as $post) {
		# code...
		echo $post->title . "<br>";
	}
	

});


Route::get('/delete', function () {
   
	$user=User::findOrFail(1);

	
	echo $user->posts()->whereId(1)->delete();

});
