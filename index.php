 <?php
 /*
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $v){
echo "I like " . $v. "<br>";
}
$x=false;
if($x){
    echo 'x is true';
}
elseif (!$x){
    echo 'x is false';
}*/

?> 
<html>
    <head>
  <title>FabLab Queue System </title>
</head>
    <h1>FabLab Queue System</h1>
    <link rel="stylesheet" type="text/css" href="index_style.css" />
<body>
    <a href="manage.php">Admin Login</a>  <br> <br>
    
    <form action="display_queue.php" method="post">
  NETID: <input type="text" name="nid" placeholder="Your NETID">
  <br> <br>
  Email: <input type="text" name="email" placeholder="Email (Optional)">
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "action_page.php".</p>

</body>
</html>
