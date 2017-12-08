@extends('app')

    @section('content')
        <h2 class="page-header">記事一覧</h2>
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
                </tr>
                @endforeach
            </tbody>
        </table>
    @endsection