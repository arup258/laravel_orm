<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Post;

class OneToManyController extends Controller
{
    public function addauthor(){
        $author=new Author();
        $author->name="Arup";
        $author->email="arup@gmail.com";
        $author->save();
    }

    public function addpost($id){
        $author=Author::find($id);
       $post=new Post();
       $post->title="node js router";
       $post->content="noje js content router tutorial";

       $author->post()->save($post);

       
    }

    public function showpost($id){
       $post=Author::find($id)->post;
       dd($post);

    }
    public function showauthor($id){
       $author=Post::find($id)->author;
       dd($author);

    }
    public function showauthorpost($id){
       $author=Author::find($id);
       echo $author->name;
       echo "<br>";
       foreach ($author->post as $post) {

        echo "Title : ".$post->title;
        echo "<br>";
        echo "Content : ".$post->content;
        echo "<br>"; 
       }

    }
    
}
