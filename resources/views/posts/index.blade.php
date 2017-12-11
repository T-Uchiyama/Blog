@extends('app')

    @section('content')
        <h2 class="page-header">記事一覧</h2>
        <a href="/posts/create/" class="btn btn-primary">
            <i class="fa fa-btn fa-trash"></i>記事作成
        </a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>タイトル</th>
                    <th>本文</th>
                    <th>作成日時</th>
                    <th>更新日時</th>
                </tr>
            </thead>

            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{{ $post->title }}}</td>
                    <td>{{{ $post->body }}}</td>
                    <td>{{{ $post->created_at }}}</td>
                    <td>{{{ $post->updated_at }}}</td>
                    <td><a href="/posts/show/{{{ $post->id }}}" class="btn btn-default btn-xs">詳細</a></td>
                    <td><a href="/posts/edit/{{{ $post->id }}}" class="btn btn-success btn-xs">編集</a></td>
                    {!! Form::open(['action' => ['PostsController@postDelete', $post->id]]) !!}
                        <td><button type="submit" class="btn btn-danger btn-xs">削除</button></td>
                    {!! Form::close() !!}
                </tr>
                @endforeach
            </tbody>
        </table>
    @endsection