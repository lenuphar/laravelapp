<html>
<head>
</head>
<body>
    <h1>Blade/Index</h1>
    @isset ($name)
    <p>Hello, {{$name}}-san.</p>
    @else
    <p>Write something.</p>
    @endisset
    <form method="POST" action="/hello">
        {{ csrf_field() }}
        <input type="text" name="name">
        <input type="submit">
    </form>
</body>
</html>