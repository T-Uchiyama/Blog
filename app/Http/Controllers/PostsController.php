<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
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
        $categoryList = $this->getCategorylist();

        return view('posts.show', compact('posts', 'categoryList'));
    }

    /**
     * 記事投稿
     * @return \Illuminate\View\View\
     */
    public function getCreate()
    {
        $categoryList = $this->getCategorylist();

        return view('posts.create', compact('categoryList'));
    }

    /**
     *  記事投稿
     * @param  Request $request
     * @return  \Illuminate\Http\RedirectResponse
     */
    public function postCreate(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required',
            'category_id' => 'required',
        ]);

        $requestData = $request->all();
        $this->post->fill($requestData)->save();

        return redirect()->route('post');
    }

    /**
     * 記事編集
     * @param $id
     * @return \Illuminate\View\View
     */
    public function getEdit($id)
    {
        $posts = $this->post->find($id);
        $categoryList = $this->getCategorylist();

        return view('posts.edit', compact('posts', 'categoryList'));
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

        return redirect()->route('post');
    }

    /**
     * 記事削除
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postDelete($id)
    {
        //TODO: 論理削除に対応未実施。
        $post = $this->post->find($id);
        $post->delete();

        return redirect()->route('post');
    }

    /**
     * カテゴリ一覧取得
     * @return List CategoryData
     */
    public function getCategorylist()
    {
        $category = Category::find(1);

        return $category->getCategorylist();
    }
}
