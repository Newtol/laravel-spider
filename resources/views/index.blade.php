<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>课表查询</h1>
    <form action="title" method="post">
        {!!csrf_field()!!}
        <p>
            学号:<input type="text" name="title">
        </p>
        <input type="submit" value="查询">
    </form>
</body>
</html>