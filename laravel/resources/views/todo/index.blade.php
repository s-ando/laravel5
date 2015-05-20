<html>
<head>
</head>
<body>
    <h1>掲示板</h1>
    <table>
        <tr>
            <th>タイトル</th>
            <th>コメント</th>
            <th>編集</th>
            <th>削除</th>
        </tr>
        @foreach($ret as $val)
        <tr>
            <th>{{$val->title}}</th>
            <th>{{$val->comment}}</th>
            <th>{!! link_to("todo/{$val->id}/edit", "編集", $attributes = array(), $secure = null) !!}</th>
            {!! Form::open(['method' => 'DELETE', 'route' => ['todo.destory', $ret->id], 'class' => 'form']) !!}
            <th>{!! link_to("todo/{$val->id}", "削除", $attributes = array(), $secure = null, onClick="postFunc") !!}</th>
            {!! Form::input('hidden', 'id', $ret->id, class="post") !!}
            {!! Form::close() !!}
        </tr>
        @endforeach
    </table>
</body>
<script>
function postFunc(){
    ret = confirm("削除してよろしいですか？");
    if(ret){
        document.frm.submit();
    }
}
</script>
</html>
