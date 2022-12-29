<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="index">Go to details</a>
    
        <form action="Insert" method="post">
            @csrf
            <input type="text" name="name" placeholder="name"><br>
            <input type="text" name="email" placeholder="email"><br>
            <input type="text" name="fees" placeholder="fees"><br>
            <input type="submit" value="submit"><br>
        </form>
</body>
</html>