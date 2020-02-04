<?php
include('connect.php');
error_reporting(0);
?>

<html>
<head>
    <title>Login page</title>
    </head>
    <link href="styles.css" type="text/css" rel="stylesheet"/>
    

<body>
<form method="POST" action="connect.php">
    <div class="loginbox">
      
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQHfAE3U0VRz0dPLMVzPz-N9jT5jqsm82YZ5l8s3AxGc5eyOteU " class="avatar"/>
        <div class="container">
            
       <p> ID</p><input type="text" name="no1"/><br/>
       <p>NAME</p><input type="text" name="no2"/><br/>
       <p>POST</p><input type="text" name="no3"/><br/>
       <input type="submit" value="LOGIN"/></div>

       
</form>
    </div>
</body>
</html>