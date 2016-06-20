<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;
use App\Post;
use App\Users;
use DB;

class postController extends Controller
{
    public function index()
    {
    	$page = Post::orderBy('id', 'desc')->paginate(10);
    	return view('pages/index_post')->with('posts', $page);		
    }

    public function create()
    {
    	   	
    	$posts = new Post;
    	$posts->Author = Input::get('Author');
    	$posts->Title = Input::get('Title');
    	$posts->Content = Input::get('Content');
    	$posts->Date = Input::get('Date');
    	$posts->save();
    	return redirect('/');
    	
    }

    public function edite($id)
    {
    	$posts = Post::find($id);
    	return view('pages/edite_post')->with('posts', $posts);

    }

    public function update(Request $request, $id)
    {
    	$posts = Post::find($id);
    	
    	if($posts->Title != Input::get('Title'))
    	{
    		$posts->Title = Input::get('Title');	
    	}
    	if($posts->Content != Input::get('Content'))
    	{
    		$posts->Content = Input::get('Content');	
    	}
    	if($posts->Author != Input::get('Author'))
    	{
    		$posts->Author = Input::get('Author');	
    	}
    	if($posts->Date != Input::get('Date'))
    	{
    		$posts->Date = Input::get('Date');	
    	}
        
    	$posts->save();
    	return redirect('list_post');

    }

    public function destroy($id)
    {
    	$posts = Post::find($id);
    	$posts->delete();
    	return redirect('list_post');
    }

}
