@extends('app')

    @section('content')
        <h2 class="papge-header">記事詳細</h2>
        <table class="table table-striped">
            <tbody>
                <!-- title -->
                <tr>
                    <th>タイトル</th>
                    <td>{{{ $posts->title }}}</td>
                </tr>
                <!-- body -->
                <tr>
                    <th>本文</th>
                    <td>{{{ $posts->body }}}</td>
                </tr>
                <!-- created_at -->
                <tr>
                    <th>作成日時</th>
                    <td>{{{ $posts->created_at }}}</td>
                </tr>
                <!-- updated_at -->
                <tr>
                    <th>作成日時</th>
                    <td>{{{ $posts->updated_at }}}</td>
                </tr>
            </tbody>
        </table>
    @endsection