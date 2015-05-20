<html>
<head>
</head>
    <body>
        {!! Form::open(array('route' => 'todo.store', 'class' => 'form')) !!}
        <div>
            <p>タイトル</p>
            {!! Form::input('text', 'title', null, ['required', 'class' => 'form']) !!}
        </div>
        <div>
            <p>コメント</p>
            {!! Form::textarea('comment', null, ['required', 'class' => 'form']) !!}
        </div>
        <button type="submit" class="btn">投稿</button>
        {!! Form::close() !!}
    </body>
</html>
