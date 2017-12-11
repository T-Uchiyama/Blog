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
                <!-- Category -->
                <tr>
                    <th>カテゴリ</th>
                    @foreach ($categoryList as $key => $value)
                        @if ($key === $posts->category_id)
                            <td>{{ $value }}</td>
                        @endif
                    @endforeach
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