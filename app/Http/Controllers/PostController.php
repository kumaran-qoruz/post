<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PostController extends Controller
{

    public function index()
    {
        return view('dashboard.posts.index', [

            'posts' => Post::all(),
        ]);
    }

    public function create()
    {

        return view('dashboard.posts.create', [

            'categories' => Category::all(),
            'tags'       => Tag::all(),
        ]);
    }

    public function store(Request $request)
    {
        $post = Validator::make($request->all(), [
            'cover_image'       => 'required|image|mimes:png,jpg|max:2048',
            'user_id'           => 'required',
            'title'             => 'required|unique:posts|max:255',
            'slug'              => 'required',
            'category_name'     => 'required',
            'body'              => 'required',
            'published_at'      => 'required',
            'meta_description'  => 'required',

        ]);


        $img_upload = time() . '.' . $request['cover_image']->getClientOriginalExtension();

        $post                   = new Post;
        $post->cover_image      = $img_upload;
        $post->user_id          = $request->user()->id;
        $post->author_name      = $request->user()->name;
        $post->title            = $request->title;
        $post->slug             = Str::slug($request->title);
        $post->category_name    = $request->category_name;
        $post->body             = $request->body;
        $post->published_at     = $request->published_at;
        $post->meta_description = $request->meta_description;

        $request['cover_image']->move(base_path() . '/storage/app/public', $img_upload);
        $post->save();

        return redirect()->route('admin.posts.index')->with('Message', 'Post created succesfully!')
            ->with('cover_image', $post->cover_image);

    }

    public function edit(Post $post)
    {
        $tags       = Tag::all();
        $categories = Category::all();

        return view('dashboard.posts.edit', [

            'tags'          => $tags,
            'categories'    => $categories,
            'post'          => $post,
        ]);
    }

    public function update(Request $request, Post $post)
    {

        $this->validate($request, ['cover_image' => 'mimes:jpg,png' | 'required']);
        $img_upload = time() . '.' . $request['cover_image']->getClientOriginalExtension();

        $post->cover_image      = $img_upload;
        $post->title            = $request->title;
        $post->slug             = Str::slug($request->title);
        $post->category_name    = $request->category_name;
        $post->body             = $request->body;
        $post->published_at     = $request->published_at;
        $post->meta_description = $request->meta_description;

        $request['cover_image']->move(base_path() . '/storage/app/public', $img_upload);
        $post->save();

        return redirect()->route('admin.posts.index')->with('Message', 'Post updated succesfully!')
            ->with('cover_image', $post->cover_image);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.posts.index')
            ->with('Message', 'Post deleted succesfully');
    }
}
