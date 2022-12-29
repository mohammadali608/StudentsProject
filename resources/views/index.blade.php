<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="container">
  
    <h1>Student Data</h1>

    <a href="/">Create New</a>
      <table class="table table-dark">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Fees</th>
          <th></th>
        </tr>
          @foreach($student as $std)

            <tr>
              <td> <a href="detail/{{$std->id}}">{{$std->name}}</a> </td>
              <td>{{$std->email}}</td>
              <td>{{$std->fees}}</td>
              <td> 
                <form 
                    action="{{url('delete')}}/{{$std->id}}"       
                     method="get">


                     <a href="edit/{{$std->id}}" class="btn btn-info">edit</a> 
               

                  <input type="submit" value="delete" class="btn btn-danger">
                </form>
            
            </td>
            </tr>
          @endforeach
      </table>
</body>
</html>