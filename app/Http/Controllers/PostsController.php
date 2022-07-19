<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Posts;
use App\Traits\FileUpload;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    use FileUpload;

    public function index()
    {
        $posts = Posts::orderBy('id', 'asc')->get();
        return view('welcome', compact('posts'));

    }


    public function create()
    {
        return view('create');
    }


    public function store(PostRequest $PostRequest)

    {
        $data = $PostRequest->validated();
        $data['user_id'] = 1;
        $data = $this->fileUpload($data);
        Posts::create($data);
        return redirect()->route('home');
    }


    public function show($id)
    {
        $post = Posts::find($id);
        return view('show', compact('post'));
    }


    public function edit($id)
    {
        $post = Posts::find($id);
        return view('edit', compact('post'));
    }


    public function update(Request $request, $id)
    {
        $data = $request->validate([
                'title' => ['max:255', 'required'],
                'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
                'description' => ['string'],
                'sub_title' => ['string'],

            ]


        );
        $post = Posts::find($id);
        if (isset($data['image'])) {
            $data = $this->fileUpload($data);

        }
        $post->update($data);
        return redirect()->route('home');
    }


    public function destroy($id)
    {
        $request = request()->merge(['id' => $id]);
        $request->validate(['id' => 'required|exists:posts,id']);
        $post = Posts::find($id);
        unlink('storage/images/' . $post->image);
        $post->delete();
        return redirect()->route('home');
    }
}
