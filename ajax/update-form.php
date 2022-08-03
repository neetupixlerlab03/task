<!DOCTYPE html>
<?php 
include ('database.php');
//include('update-data.php');


?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link rel="stylesheet" href="style.css">-->
</head>
<body>


<!--====form section start====-->
<div class="user-detail">
    <h2>Update User Data</h2>
    <p id="msg"></p>
    <form id="updateForm" method="POST">
      
          <label>Full Name</label>
          <input type="text" placeholder="Enter Full Name" name="fullName" required><br><br>
          <label>Email Address</label>
          <input type="email" placeholder="Enter Email Address" name="emailAddress"  required><br><br>
          <label>City</label>
          <input type="city" placeholder="Enter Full City" name="city" required><br><br>
          <label>Country</label>
          <input type="text" placeholder="Enter Full Country" name="country" required><br><br>
          <button type="submit" name="updateId">Update</button>
    </form>
        </div>
</div>

</body>
</html>

