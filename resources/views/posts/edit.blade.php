@extends('app')

    @section('content')
        <h2 class="page-header">記事編集</h2>
        {!! Form::open(['action' => ['PostsController@postEdit', $posts->id]]) !!}

        <!-- Varidation Error -->
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

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
        <!-- Category -->
        <div class="form-group">
            <label>カテゴリ : </label>
            {{ Form::select('category_id', $categoryList, $posts->category_id) }}
        </div>
        <!-- button -->
        <button type="submit" class="btn btn-default">編集</button>
        {!! Form::close() !!}
    @endsection