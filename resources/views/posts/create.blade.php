@extends('app')

    @section('content')
        <h2 class="page-header">記事投稿</h2>
        {!! Form::open() !!}

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
                {!! Form::input('text', 'title', null, ['required', 'class' => 'form-control']) !!}
            </div>
            <!-- body -->
            <div class="form-group">
                <label>本文</label>
                {!! Form::textarea('body', null, ['required', 'class' => 'form-control']) !!}
            </div>
            <!-- Category -->
            <div class="form-group">
                <label>カテゴリ : </label>
                {{ Form::select('category_id', $categoryList, null, ['placeholder' => '選択してください']) }}
            </div>
            <!-- button -->
            <button type="submit" class="btn btn-default">投稿</button>
        {!! Form::close() !!}
    @endsection