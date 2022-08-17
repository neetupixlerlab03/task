<html>
   <head>
      
   </head>
   <body>
    <h1>Add Teacher Details</h1>
        <form method="post" action="{{ route('teacher.store') }}">
            {{csrf_field()}}
           
                       <input type="hidden"  name="id"/><br><br>
                  <label >Teacher Name</label>
                       <input type="text"  name="teacher_name"/><br><br>
                 <label>Teacher Email</label>
                     <input type="text" name="teacher_email"/><br><br>
                     <label>Teacher Address</label>
                     <input type="text" name="teacher_address"/><br><br>
                    
                  <button type="submit">Add</button>
                 </form>
                 </body>
                 </html>