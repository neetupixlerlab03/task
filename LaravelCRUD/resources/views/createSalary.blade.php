<html>
    <head>
        <title> Teacher Salary </title>
</head>
<body>
<h1> Teacher Salary </h1>
        <form method="post" action="{{ route('store') }}">
            {{csrf_field()}}
                  <label >Teacher Id</label>
                       <input type="text"  name="teacher_id"/><br><br>
                 <label>Teacher Salary</label>
                     <input type="text" name="teacher_salary"/><br><br>
                     <button type="submit">submit</button>
         
</form>
</body>
</html>