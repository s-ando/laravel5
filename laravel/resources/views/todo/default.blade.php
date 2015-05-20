<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
<script type="text/javascript">
function postFunc(name){
    ret = confirm("削除してよろしいですか？");
    if(ret){
        document.forms[name].submit();
    }
}
</script>
</html>
