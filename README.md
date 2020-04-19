# Laravel
#Laravel Helping Guide for making project in Laravel. It will help you to create,Delete,Update,Read the Posts. And also #Registartion and login helping guide are there. Code is not there. By This you can follow some steps and you can avoid #doing some mistakes after reading this.

go to the project page:- cd /var/www/lsapp/

to first set up the port :- php artisan serve --port=8015

http://localhost:8015/register

for web.php :- lsapp/routes/

to make the controller :- php artisan make:controller PostController (will be in lsapp/http/controller)

for pages:- go to lsapp/resources/views/ then copy and rename the welcome.blade.php

for basic layouts :-lsapp/resources/views/ create layout folder the name the file app.blade.php

for styling :- lsapp/resources/views/ create inc folder the name the file navbar.blade.php

appserviceprovider will be in :-lsapp/app/provider/

to make the model :-php artisan make:model Post -m   (will be in lsapp/app/)

it's migration will be in :- lsapp/databse/migrations/

to migrate the databse:- php artisan migrate

for insertin the data the create environment :- php artisan tinker

initially we have zero post so :- App\Post::count()  

to create new instance of post :- $post=new App\Post();

to inserting the value :-  $post->title='Post one';

to save the value :- $post->save();

after that you can quit  :- quit

for creating all the crude operation in a controller :- php artisan make:controller PostsController --resource

to see all the routes :- php artisan route:list

to route all the crud :- Route::resource('posts','PostsController');  (write this in web.php)

in model(post.php) you can change the table naME,PRIMARY KEY AND OTHER

create ne folder posts in lsapp/resource/views/  the create file index.blade.php

Don't forget to change the name of database name and password in .env file (lsapp/) and datbase.php file (lsapp/config/) 

and then run these 3 code

php artisan config:clear

php artisan cache:clear   

php artisan config:cache


you can serach laravelcollective / docs fro help in html form

download laravelcollective/docs html :-composer require "laravelcollective/html":"^5.4.0"

add new providers to lsapp/config/provider.php :-Collective\Html\HtmlServiceProvider::class,

then add two aliase lsapp/config/provider.php :-    
                                'Form' => Collective\Html\FormFacade::class,
                                 'Html' => Collective\Html\HtmlFacade::class,

and don't forget to run these 3 lines of code:-

php artisan config:clear

php artisan cache:clear   

php artisan config:cache


create messages file in lsaap/resources/views/inc/ :- for error show and success messgae;

include create post in navbar.php

google it ;- laravel ckeditor /unisharp/laravel ck editor 

set up package :- composer require unisharp/laravel-ckeditor
 
add new providers to lsapp/config/provider.php :- Unisharp\Ckeditor\ServiceProvider::class,

the run these 3 commands

php artisan config:clear

php artisan cache:clear   

php artisan config:cache

also publish the resources :- php artisan vendor:publish --tag=ckeditor


also do the uses and copy to lsapp/resources/views/layout/app.php:-


  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
                    <script>
                   CKEDITOR.replace( 'article-ckeditor' );
                </script>

then don't forget to add id of 'article-ckeditor' in create.php

then create the option for edit in show.php

create edit .php in views/post/

and in edit.php create  action for update in postcontroller.php, don't forget to add method put

the write the delet optine in show.php and then write the value in update in postcotroller.php

Now everything upto crud haappens,

Now authentications :- php artisan make:auth

the type yes ,before typing yes don't forget to copy app.blade.php
 also copy navbar and paste it in different folder

Now when we register it will get registerd and go to the homecontroller.php (lsapp/app/htpp/controller) and rename it to DashboardCotroller (it looks cool)

and also change the class name to DashboardCotroller and return type to dashboard and go to Controllers/auth/(loginController,registercontroller,resetpasswordcontroller) change home to dashboard

Noww go to lsapp/routes/web.php and change the route from homecontroller to dashboard

then go to lsapp/resources/views/ and change the name of homeblade.php to dashboard.blade.php

go to dashboard.blade.php and create link for creating post

now since we don have userid as a field in user tabel so we have to create one
so for that create migration :- php artisan make:migration add_user_id_to_posts (migration will be created in lsapp/database/migration)
@stor and add the field user_id

add a relatinship between blog post and model ;- open lsapp/app/post.php and add relatiosnhip  user functio()

then go to user model (lsapp/app/user.php) and add posts() function

go to dashboardcotroller and edit and don't forget to add App\user to dashboardcontroller.php

for authrnticATION SAVE contruct function from dashboard cotroller to postscontroller

use more authentication for edit and stroy so they can manuall type the link and do .

now add column to add image to the   database

for tha we have to again create  migration

php artisan make:migration add_cover_image_to_posts

then go to cover_image _migration (database/migration) aand edit

then run := php artisan migrate

so when we try to upload images in public/cover_images in postcotroller.php it will go to storage/app/public but this is not accesible by browser so we will set some symlink so that it can be uploaded in public folder the it will create a strorage folder in public folder so for that run one simple command :-php artisan storage:link

the edit the index.blade.php (views/post/index) and show blad tooo

also edit the edit.blade.php

the edit the update.php
