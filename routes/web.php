<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\Usercontroller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\TryCatch;

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

// NORMAL ROUTING

Route::get('/welcome-page', function () {
    return 'welcome';
});

// PARAMETERIZED ROUTING

// Route::get('/user/{id}', function ($id) {
//     return "User id : " .$id;
// });

// OPTIONAL PARAMETER

// Route::get('/user/{name?}', function () {
//     return "Testing name" ;
// });

// parameter constraint

Route::get('user/{id}/{name}', function ($id,$name) {
    return "User id : " .$id ." || " ." User Name : " .$name;
})->where(['id'=>'[0-9]+', 'name'=>'[A-Za-z]+']);

// Redirect

Route::redirect('/', '/login');

Route::get('/login', function(){
    return "<a href=/about>About </a>";
});

// href redirect
Route::get('/about', function(){
    return "About Page";
});

// views render

// Route::get('/greeting', function(){
//     return view('greeting');
// });

// Route::view('/greeting', 'greeting');


// DYNAMIC VALUE FOR VIEWS

Route::get('/greeting', function(){
    $name = "SHAIQ AHMED";
    // return view('greeting',['name'=>$name]);
    return view('greeting', compact('name'));
});

// Nested view acccess by route

Route::get('/test', function(){
    return view("admin.profile");
});

Route::view('/test1', 'layouts.test');
// Route::view('/user', 'user');

Route::get('/user',[Usercontroller::class,'indexView']);
Route::get('/user/show/{id}', [Usercontroller::class, 'show']);
Route::resource('/post', PostController::class);

Route::get('/connection',function(){
    try {
        DB::connection()->getPdo();
        return 'connected successfully';

    }
    catch (\Exception $ex)
    {
       dd($ex->getMessage());
    }
});

Route::get('/test2', function(){
    // Post::create([
    //     'title'=>'php',
    //     'description'=>'core php',
    //     'admin'=>true
    // ]);
    // return 'Inserted Succesfully';

    // $posts = Post::all();
    // return $posts;

    // $posts = Post::findOrFail(4);
    // return $posts;

    // $posts = Post::where(['title'=>'laravel', 'description'=>'php framework'])->get();
    // if(!$posts){
    //     return 'post not found';
    // }
    // return $posts;

    $posts = Post::find(2);
    // if(!$posts){
    //     return 'post not found';
    // }
    // $posts->update([
    //     'title'=> 'javascript',

    // ]);

    // return 'update successfully';
    if(!$posts){
        return 'NO post found';
    }
    else{
        $posts->delete();
        return 'post deleted successfully';
    }

});

;
// Route::get('/post',[PostController::class, 'index']);
// Route::get('/post/store', [PostController::class,'store']);
// Route::get('/post/update/{id}', [PostController::class, 'update']);
// Route::get('/post/destroy/{id}',[PostController::class, 'destroy']);


// Route::resource('/post', PostController::class);


// Route::get('/test3', function(){

//     Session::put('login', "you are logged in");

//     Session::flush();

//     if(Session::has('login'))
//     {
//         return 'sesssion set';
//     }
//     else{
//         return 'Session not set';
//     }
// });


Route::get('/get/posts', [PostController::class, 'getPosts'])->name('get.posts');

Route::get('test3',function(){

    // $user = User::first();
    // return $user->posts;

    // $post = Post::first();
    // return $post->user ;

    // $user = User::first();
    // return $user->postComments;

    // $user = User::first();
    // $post =Post::first();

    // $user->roles()->attach([1,2]);

    // return 'attached';

    // $user = User::first();
    // return $user->image;

    // $user = User::first();
    // return $user->images;

    $post = Post::first();

    return $post->tags;
});
