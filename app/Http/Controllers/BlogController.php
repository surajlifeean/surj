<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;

use App\Comment;

use App\Post;

class BlogController extends Controller
{


	public function getIndex(){
		$post=Post::select('title','name','body','slug','posts.created_at','category_id')
		->join('users','posts.users_id','=','users.id')
		->paginate(2);
		return view('blog.index')->withPosts($post);
	}



	public function getSingle($slug){

		$post=Post::where('slug','=',$slug)->first();
		$id=$post->id;

		$comments=Comment::where('post_id','=',$id)->get();


      
		//first indictes to take only the first matching value
		//print_r($comments);
		return view('blog.single')->withPost($post)->withComments($comments);
	}
    //
}
