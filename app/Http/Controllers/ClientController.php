<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    //all post

    public function getAllPost(){
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }

    //single post
    public function getOnePost($id){
        $response = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);

        return $response->json();
    }
    //single post using form
    public function createID(){
        return view('post');
    }
    public function getPost(Request $request){
          $id = $request->id;
          $response = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
          return $response->json();

    }

    // adding post to client
    public function addPost(){
        $post = Http::post('https://jsonplaceholder.typicode.com/posts', [
            'userId'=> 111,
            'title' => 'New title',
            'body'=>'Te new body '
        ]);
        return $post->json();
    }

    //Updating post
    public function updatePost(){
        $response = Http::put('https://jsonplaceholder.typicode.com/posts/1',[
            'title' =>'updated title',
            'body'=>'updated body',
        ]);
        return $response->json();
    }

    //deleting post
    public function deletePost(){
        $response = Http::delete('https://jsonplaceholder.typicode.com/posts/1');
        return $response->json();
    }



}
