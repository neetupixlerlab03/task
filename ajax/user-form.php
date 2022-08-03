<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!--====form section start====-->
<div class="user-detail">
    <h2>Insert User Data</h2>
    <p id="msg"></p>
    <form id="userForm" method="POST">
          <label>Full Name</label>
          <input type="text" placeholder="Enter Full Name" name="fullName" required><br><br>
          <label>Email Address</label>
          <input type="email" placeholder="Enter Email Address" name="emailAddress" required><br><br>
          <label>City</label>
          <input type="city" placeholder="Enter Full City" name="city" required><br><br>
          <label>Country</label>
          <input type="text" placeholder="Enter Full Country" name="country" required><br><br>
          <button type="submit">Submit</button>
    </form>
        </div>
</div>
<!--====form section start====-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="ajax-script.js"></script>
</body>
</html>