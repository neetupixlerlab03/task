<?php

include("database.php");
$db=$conn;
// fetch query
function fetch_data(){
 global $db;
  $query="SELECT * from usertable ";
  $exec=mysqli_query($db, $query);
  if(mysqli_num_rows($exec)>0){
    $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
    return $row;  
        
  }else{
    return $row=[];
  }
}
$fetchData= fetch_data();
show_data($fetchData);

function show_data($fetchData){
 echo '<table border="1">
        <tr>
            <th>S.N</th>
            <th>Id</th>
            <th>Full Name</th>
            <th>Email Address</th>
            <th>City</th>
            <th>Country</th>
            <th>Edit</th>
            
        </tr>';

 if(count($fetchData)>0){
      $sn=1;
      foreach($fetchData as $data){ 

  echo "<tr>
          <td>".$sn."</td>
		   <td>".$data['id']."</td>
          <td>".$data['fullName']."</td>
          <td>".$data['emailAddress']."</td>
          <td>".$data['city']."</td>
          <td>".$data['country']."</td>
		  <td><a href='update-form.php?editData=".$data['id']."'>Edit</a></td>
         
         
   </tr>";
   
   
   
   
   
   
   
   
   
   
  $sn++; 
     }
}else{
     
  echo "<tr>
        <td colspan='7'>No Data Found</td>
       </tr>"; 
}
  echo "</table>";
}

?>
