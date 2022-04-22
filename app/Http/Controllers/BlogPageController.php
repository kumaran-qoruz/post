<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\CommentReply;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class BlogPageController extends Controller
{

    public function index()
    {
        return view('welcome', [
            'latestpost' => Post::latest()->get(),
        ]);
    }

    public function blog_starting_home_page(Request $request)
    {

        return view('blog_hompage.home', [

            'latestpost' => Post::latest()->get(),
        ]);
    }

    public function blog_starting_home_allpost()
    {
        return view('blog_hompage.blog', [

            'posts'         => Post::all(),
            'recentposts'   => Post::latest()->limit(6)->get(),
            'categories'    => Category::all(),
            'tags'          => Tag::all(),

        ]);
    }

    public function blog_starting_home_about_page()
    {
        return view('blog_hompage.about');
    }

    public function blog_starting_home_contact_page()
    {
        return view('blog_hompage.contact');
    }

    public function blog_starting_home_team_page()
    {
        return view('blog_hompage.team');
    }

    public function blog_starting_home_service_page()
    {
        return view('blog_hompage.service');
    }

    public function blog_starting_home_feature_page()
    {
        return view('blog_hompage.Features');
    }

    public function blog_starting_home_testimonial_page()
    {
        return view('blog_hompage.testimonial');
    }

    public function blog_starting_home_quote_page()
    {
        return view('blog_hompage.quote');
    }

    public function blog_starting_home_post_view(Post $post, Comment $comment)
    {

        $comment = Comment::all();

        $cmt = count($comment);

        return view('blog_hompage.view', [

            'posts'         => Post::all(),
            'recentposts'   => Post::latest()->limit(6)->get(),
            'categories'    => Category::all(),
            'tags'          => Tag::all(),
            'comment'       => Comment::all(),
            'post'          => $post,
            'cmt'           => $cmt,
            'replies'       => CommentReply::all(),

        ]);
    }

    public function search(Request $request)
    {
        $query = $request->get('search');

        $posts = Post::where('title', 'like', '%' . $query . '%')
            ->orWhere('author_name', 'like', '%' . $query . '%')
            ->orWhere('category_name', 'like', '%' . $query . '%')->get();
            return view('ajax.post_ajax',['posts' => $posts]);


    }
}
