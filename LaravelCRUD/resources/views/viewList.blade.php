
         
                        <table >
                          <tr>
                           <th>Sr.no</th>
                           <th>Teacher_id</th>
                             <th>Name</th>
                              <th> Salary</th>
                             </tr>
            
        
                              @foreach ($salaryList as $list)
                            <tr>
                                <td>{{$list->id}}</td>
                                <td>{{$list->teacher->id}}</td>
                                <td>{{$list->teacher->name}}</td>
                                <td>{{$list->teacher_salary}}</td>
                            
                          
                            </tr>
                            @endforeach
                        
                        </table>

