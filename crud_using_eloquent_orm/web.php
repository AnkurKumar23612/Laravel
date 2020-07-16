<?php

use App\Post;

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


Route::get('/read', function () {

 $posts=Post::all();

 foreach ($posts as $post) {
 	# code...

 	return $post->title;
 }


});

Route::get('/find', function () {

 $post=Post::find(3);

 
 	return $post->title;

});


Route::get('/findwhere', function () {

 $posts=Post::where('id',2)->orderBy('id','desc')->take(1)->get();

 
 	return $posts;

});

Route::get('/basicinsert', function () {

 $post=new Post;

 $post->title='Python';
 $post->body='Golang';
 $post->is_admin='5';
 $post->save();

});

Route::get('/basicupdate', function () {

 $post= Post::find(4);

 
 $post->body='Golangs';
 
 $post->save();

});
//since mass creating so we have to allowit in Post.php[Model]
Route::get('/create', function () {

 Post::create(['title'=>'html','body'=>'Web','is_admin'=>6]);

});



Route::get('/update', function () {

 Post::where('id',2)->where('is_admin',0)->update(['title'=>'PHP','body'=>'LARAVEL']);

});


Route::get('/delete', function () {

 $post= Post::find(5);

 
 
 $post->delete();

});

Route::get('/delete2', function () {

Post::destroy(3);
//for multiple
//Post::destroy([4,5]);
 
});


Route::get('/delete2', function () {

Post::destroy(3);
//for multiple
//Post::destroy([4,5]);
 
});


Route::get('/softdelete', function () {

Post::find(5)->delete();

});


Route::get('/readsoftdelete', function () {

$post=Post::withTrashed()->where('id',5)->get();
return $post;

});

Route::get('/restore', function () {

Post::withTrashed()->where('id',5)->restore();


});

Route::get('/forcedelete', function () {

Post::withTrashed()->where('id',5)->forceDelete();


});








