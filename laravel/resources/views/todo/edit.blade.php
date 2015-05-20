<html>
<head>
</head>
    <body>
        {!! Form::open(array('method'=>'put', 'route'=>array('todo.update', $ret->id), 'class' => 'form')) !!}
        <div>
            <p>タイトル</p>
            {!! Form::input('text', 'title', $ret->title, ['required', 'class' => 'form']) !!}
        </div>
        <div>
            <p>コメント</p>
            {!! Form::textarea('comment', $ret->comment, ['required', 'class' => 'form']) !!}
            {!! Form::input('hidden', 'id', $ret->id) !!}
        </div>
        <button type="submit" class="btn">投稿</button>
        {!! Form::close() !!}
    </body>
</html>
