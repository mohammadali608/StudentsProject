<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h1>Student Details</h1>

      <table>
          <tr>
            
          <th>Name</th>
          <td>{{$student->name}}</td>
          </tr>
          <tr>
            
          <th>Email</th>
          <td>{{$student->email}}</td>
          </tr>
          <tr>
            
          <th>Fees</th>
          <td>{{$student->fees}}</td>
          </tr>
        
      </table>
  
</body>
</html>