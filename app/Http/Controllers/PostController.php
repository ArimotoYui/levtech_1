<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
    {
        //dd($post->getPaginateByLimit());
        //$test = $post->orderBy('updated_at', 'DESC')->limit(2)->toSql();// 確認用に追加
        //dd($test); //確認用に追加
        
        //return view('posts.index')->with(['posts' => $post->getByLimit()]);//$postの中身を戻り値にする。
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]); 
        // getPaginateByLimit()はPost.phpで定義したメソッドです
       
        //'post'はbladeファイルで使う関数、中身は$postはid=1のPostインスタンス
    }
    
      public function show(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
    {
    
        return view('posts.show')->with(['post' => $post]); 

    }
    
    
}
?>
