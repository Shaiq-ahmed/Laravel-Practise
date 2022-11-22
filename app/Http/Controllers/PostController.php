<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDO;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        // return $posts;
        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title'=>'required |min:3 |max:15',
            'description'=>'required |min:10 |max:500'
        ]);

        Post::create([
            'title'=> $request->title,
            'user_id'=> 2,
            'description'=> $request->description
        ]);

        $request->session()->flash('alert-success', 'Post Saved Successfully');

        return redirect()->route('post.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show',['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        if(!$post){
            abort(404);
        }
        return view('posts.edit',['post'=>$post]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $post = Post::find($id);

        if(!$post){
            abort(404);
        }
        $post->delete();
        request()->session()->flash('alert-danger', 'Post deleted Successfully');
        return redirect()->route('post.index');
    }
    public function getPosts(){

        // return DB::table('posts')->where('title','Iphone')->get();
        // return DB::table('posts')->pluck('title')->first();


    // SQL RAW QUERIES

        // return DB::select('select * from posts where title=?',['Session']);

        return DB::select('insert into posts (title, description) value(?,?)',[
            'React Native', 'Mobile DEVELOPMENT'
        ]);
    }

}
