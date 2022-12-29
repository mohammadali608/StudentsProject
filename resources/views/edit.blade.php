<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="{{url('index')}}">Go to details</a>
    
        <h1>Edit User</h1>
        <form action="{{url('Update')}}/{{$student->id}}" method="post">
            @csrf
            <input type="text" 
                name="name"
                value="{{$student->name}}"
                placeholder="name"><br>

            <input type="text" 
                    name="email"
                    value="{{$student->email}}"
                    placeholder="email"><br>
            <input type="text" 
                   name="fees"
                   value="{{$student->fees}}" 
                   placeholder="fees"><br>
            <input type="submit" value="Update"><br>
        </form>
</body>
</html>