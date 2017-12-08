<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * @var Post
     */
    protected $post;

    /**
     * @param Post $post
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * 記事一覧
     * @return \Illuminate\View\View\
     */
    public function getIndex()
    {
        $posts = $this->post->all();
        return view('posts.index', compact('posts'));
    }

    /**
     * 記事詳細
     * @param $id
     * @return \Illuminate\View\View\
     */
    public function getShow($id)
    {
        $posts = $this->post->find($id);
        return view('posts.show', compact('posts'));
    }

    public function getCreate()
    {

    }

    public function postCreate()
    {

    }

    public function getEdit()
    {

    }

    public function postEdit()
    {

    }

    public function postDelete()
    {

    }
}
