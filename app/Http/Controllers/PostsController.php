<?php

namespace App\Http\Controllers;

use App\Post;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        return view('posts.create');
    }

    public function index(){
        $users = auth()->user()->following()->pluck('profiles.user_id');

        $posts = Post::whereIn('user_id', $users)->with('user')->latest()->paginate(5);



        return view('posts.index', compact('posts')
        );
    }

    public function like($id){
        dd($id);
    }



    public function store(){
        $data = request()->validate([
            'caption' => 'required',
            'desc'=> 'required',
            'likes'=> '',
            'image' => ['required','image'],
        ]);

        $imagePath = request('image')->store('uploads','public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
        $image->save();

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'desc'=> $data['desc'],
            'likes' => 0,
            'image' => $imagePath,
        ]);
        return redirect('/profile/' . auth()->user()->id);
    }


    public function cctv(Post $post){
        $posts = Post::latest()->paginate(6);
        return view('posts.cctv', compact('posts'));
    }

    public function show(\App\Post $post){
        $likers = (auth()->user()) ? auth()->user()->liking->contains($post->id) : false;
        return view('posts.show', compact('post','likers' ));
    }


}
