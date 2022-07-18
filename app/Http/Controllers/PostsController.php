<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Traits\FileUpload;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    use FileUpload;

    public function index()
    {
      $posts = Posts::orderBy('id','asc')->get();
      return view('welcome',compact('posts')) ;

    }


    public function create()
    {
        return view('create');
    }


    public function store(Request $request)
    {
       $data = $request->all();
       $data['user_id'] = 1;
       $data = $this->fileUpload($data);
       Posts::create($data);
       return redirect()->route('home');
    }


    public function show($id)
    {
        $post = Posts::find($id);
        return view('show',compact('post'));
    }


    public function edit($id)
    {
        $post = Posts::find($id);
        return view('edit',compact('post'));
    }


    public function update(Request $request, $id)
    {
       $data = $request->all();
       $post =Posts::find($id);
       if(isset($data['image'])){
           $data =$this->fileUpload($data);

       }
       $post->update($data);
       return redirect()->route('home');
    }


    public function destroy($id)
    {
        $post =Posts::find($id);
        if($post != null){
        $post ->delete();
        }
        return redirect()->route('home');
    }
}
