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
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        $posts = $this->post->all();
        return view('posts.index', compact('posts'));
    }

    /**
     * 記事詳細
     * @param $id
     * @return \Illuminate\View\View
     */
    public function getShow($id)
    {
        $posts = $this->post->find($id);

        return view('posts.show', compact('posts'));
    }

    /**
     * 記事投稿
     * @return \Illuminate\View\View\
     */
    public function getCreate()
    {
        return view('posts.create');
    }

    /**
     *  記事投稿
     * @param  Request $request
     * @return  \Illuminate\Http\RedirectResponse
     */
    public function postCreate(Request $request)
    {
        $requestData = $request->all();
        $this->post->fill($requestData)->save();

        return redirect()->to('posts/index');
    }

    /**
     * 記事編集
     * @param $id
     * @return \Illuminate\View\View
     */
    public function getEdit($id)
    {
        $posts = $this->post->find($id);

        return view('posts.edit', compact('posts'));
    }

    /**
     * 記事編集
     * @param  Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postEdit(Request $request, $id)
    {
        $post = $this->post->find($id);
        $requestData = $request->all();
        $post->fill($requestData);
        $post->save();

        return redirect()->to('posts/index');
    }

    /**
     * 記事削除
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postDelete($id)
    {
        //TODO: 確認を促すアラートを追加。
        //TODO: 論理削除に対応未実施。
        $post = $this->post->find($id);
        $post->delete();

        return redirect()->to('posts/index');
    }
}
