<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
use App\Http\Controllers\posts;
use Validator;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  
        // orderBy title 
    //    $posts = Post::orderBy('title','asc')->get();
    //     dd($posts );
    //     $posts = DB::table('posts')->get();
    //     $posts = DB::select('SELECT * FROM posts');
    //     $posts = Post::orderBy('title','desc')->take(1)->get();
        $posts = Post::all();
        return view('posts.index');
    }
    public function readPost(){
        return response()->json(Post::get(), 200);
    }
    // public function indexById($id){
    //     return response()->json(Post::find($id), 200);
    // }

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
        // $this->validate($request, [
        //     'title'=>'required',
        //     'body'=>'required'
        // ]);
        //Create Post
        // $post = new Post;
        // $post->title= $request->input('title');
        // $post->body= $request->input('body');
        // $post->save();

        // return redirect('/posts')->with('success','Post Created');
        $rules = [
            'title' => 'required|min:4',
            'body'  => 'required|min:4|max:100',
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        $post = Post::create($request->all());
        return response()->json($post, 201);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $post = Post::find($id);
        // return view('posts.show')->with('post', $post);
        // public function indexById($id){
        $post = Post::find($id);
        if(is_null($post)){
            return response()->json(['message'=>'Record Not Found!'],404);
        }
        return response()->json($post, 200);
        // }
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
        return view('posts.edit')->with('post', $post);
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
        $this->validate($request, [
            'title'=>'required',
            'body'=>'required'
        ]);
        // Create Post
        $post = Post::find($id);
        $post->title= $request->input('title');
        $post->body= $request->input('body');
        $post->save();

        return redirect('/posts')->with('success','Post Udated');
    }






    public function UpdatePost(Request $request, $id)
    {
        $post = Post::find($id);
        if(is_null($post)){
            return response()->json(['message'=>'Record Not Found!'],404);
        }
        $post->update($request->all());
        return response()->json($post, 200);
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
        $post->delete();
        return redirect('/posts')->with('success','Post Removed');

    }
    public function DeletePost(Request $request,$id)
    {
        $post = Post::find($id);
        if(is_null($post)){
            return response()->json(['message'=>'Record Not Found!'],404);
        }
        $post->delete();
        return response()->json(null, 204);
    }
}
