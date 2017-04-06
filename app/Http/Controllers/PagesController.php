<?php
 namespace App\Http\Controllers;

use App\Post;
 class PagesController extends Controller {

 	public function getIndex(){

 		$posts=Post::orderBy('updated_at','desc')->limit(5)->get();
 		return view('posts.home')->withPosts($posts);
 	}

 	public function getContact(){
 		return view('pages.contact');
 	}
 }
?>