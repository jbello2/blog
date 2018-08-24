<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class TestController extends Controller
{
    public function view($id) {

    	$article = Article::find($id);

    	if ( count($article) > 0) {
    	   $article->category;
    	   $article->user;
    	   $article->tags;
    	   return view('test.index', ['article' => $article]);
    	} 
         
        return view('welcome'); 
    }
}
