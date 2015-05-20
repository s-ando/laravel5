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
            {!! Form::open(['method' => 'DELETE', 'route' => ['todo.destroy', $val->id], 'name' => 'form'.'_'.$val->id]) !!}
            <!-- <th>{!! link_to("todo/{$val->id}", "削除", $attributes = array(), $secure = null, ['onClick' => "postFunc(this)"]) !!}</th> -->
            <th>
                {!! Form::input('hidden', 'id', $val->id, ['id' => 'post']) !!}
                <a href="javascript:void(0)", onClick="postFunc('{{ "form"."_".$val->id }}')" >削除</a>
            </th>
            {!! Form::close() !!}
        </tr>
        @endforeach
    </table>
</body>
<script type="text/javascript">
function postFunc(name){
    ret = confirm("削除してよろしいですか？");
    if(ret){
        console.log(name);
        document.forms[name].submit();
    }
}
</script>
</html>
