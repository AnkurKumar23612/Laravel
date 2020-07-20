<?php

use App\Country;
use App\Photo;
use App\Post;
use App\User;
Use App\Tag;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middle ware group. Now create something great!
|
*/

Route::get('/', function () {
	//return "Ankur Kumar";
   return view('welcome');
});



Route::get('/user/{id}/post', function ($id) {
	//return "Ankur Kumar";
   return User::find($id)->post;
});



Route::get('/post/{id}/user', function ($id) {
	//return "Ankur Kumar";
   return Post::find($id)->user;
});
  

Route::get('/posts', function () {


$user=User::find(1);

foreach($user->posts as $post)
{
	echo $post->title. "<br>";
}

});



Route::get('/user/{id}/role', function ($id) {
	//return "Ankur Kumar";
   
$user=User::find($id);

foreach($user->roles as $role)
{
	echo $role->name. "<br>";
}

});



Route::get('/user/country', function () {
	//return "Ankur Kumar";
   
$country=Country::find(1);

foreach($country->posts as $post)
{
	echo $post->title. "<br>";
}

});


Route::get('/user/photos', function () {
	//return "Ankur Kumar";
   
$user=User::find(1);

foreach($user->photos as $photo)
{
	echo $photo->path. "<br>";
}

});


Route::get('/post/photos', function () {
	//return "Ankur Kumar";
   
$post=Post::find(3);

foreach($post->photos as $photo)
{
	echo $photo->path. "<br>";
}

});




Route::get('/photo/{id}', function ($id) {
	//return "Ankur Kumar";
 
 $photo=Photo::findOrFail($id);

 return $photo->imageable;

});


Route::get('/post/tag', function () {
	//return "Ankur Kumar";
 
 $post=Post::find(3);

 foreach ($post->tags as $tag) {
 	# code...
 	echo $tag->name;
 }

});


Route::get('/tag/post', function () {
	//return "Ankur Kumar";
 
 $tag=Tag::find(2);

 foreach ($tag->posts as $post) {
 	# code...
 	echo $post->title;
 }

});



  




