@extends('app')

    @section('content')
        <h2 class="page-header">記事編集</h2>
        {!! Form::open(['action' => ['PostsController@postEdit', $posts->id]]) !!}
        <!-- title -->
        <div class="form-group">
            <label>タイトル</label>
                {!! Form::input('text', 'title', $posts->title, ['required', 'class' => 'form-control']) !!}
        </div>
        <!-- body -->
        <div class="form-group">
            <label>本文</label>
            {!! Form::textarea('body', $posts->body, ['required', 'class' => 'form-control']) !!}
        </div>
        <!-- button -->
        <button type="submit" class="btn btn-default">編集</button>
        {!! Form::close() !!}
    @endsection