<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\Post;

use Session;

use App\Category;

use App\Tag;

use DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function index()
    {
        // create a variable and store ll the blog post into it
        $posts = Post::all();
        //return it into the view
         return view('posts.index')->withPosts($posts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories=Category::all();
        $tags=Tag::all();
        return view('posts.create')->withCategories($categories)->withTags($tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->validate($request, array(
            'title' => 'required|max:255',
            'slug'  => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'category_id'=>'required|numeric',
            'body'  => 'required'
            ));

        //validation
        
        $post =new Post;
        

        $post->title =ucwords($request->title);

        $post->slug = $request->slug;

        $post->category_id=$request->category_id;

        $post->body = $request->body;

        $post->save();

        $post->tags()->sync($request->tags,false);



        Session::flash('success','The blog post was sucessflly saved!');

        return redirect()->route('posts.show',$post->id);

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
         return view('posts.show')->withPost($post);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        
    $post=Post::find($id);

    $categories=Category::all();

    $tags=Tag::all();
    $tags2=array();

    foreach ($tags as $tag) {
        $tags2[$tag->id]=$tag->name;

    }


    

    return view('posts.edit')->withPost($post)->withCategories($categories)->withTags($tags2);
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
      
      
        $post=Post::find($id);

        if($request->input('slug')==$post->slug){

                 $this->validate($request, array(
           
            'title' => 'required|max:255',

            'slug'  => 'required',

            'category_id'=>'required|numeric',

            'body'  => 'required'
            ));


        }
        



        //validate the data before using
        else{
                $this->validate($request, array(
           

             
                'title' => 'required|max:255',

            'slug'  => 'required|alpha_dash|min:5|max:255|unique:posts,slug',

            'category_id'=>'required|numeric',

            'body'  => 'required'
            ));
            }

        //save the data to the database
         $post=Post::find($id);

         $post->title=$request->input('title');
         
         $post->slug = $request->slug;

         $post->category_id=$request->category_id;
  


         $post->body=$request->input('body');
         $post->save();
         
         if(isset($request->tags)){
         $post->tags()->sync($request->tags,true);
         }
         else
            $post->tags()->sync(array());
        
         //false if we dont wanna overwrite the contents already in the database.
        //flash message for sucess save
        Session::flash('success','This post is updated');
        //redirect to post.show
        return redirect()->route('posts.show',$post->id);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);

        $post->delete();

        Session::flash('Success','The Post is deleted');


        return redirect()->route('posts.index');
    }
}
