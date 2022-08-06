<?php

 //echo 'Hello, Redoy';

     define('NAME', 'Kinley_Water');//Constant.
   //$name = "Shayam"; //1.not constant
   $age = 3;
  // $name = "anup";//2.not constant. replace/overried 1.


   //echo $name; 

 
?>


<!DOCTYPE html>
<html>
<head>
    
  <title>my first PHP file</title>
</head>
<body>
    <h1><?php echo 'Hello UIU';?></h1>
    <!--<div><?php echo $name; ?></div>--><!--replace variable name-->
    <div><?php echo $age; ?></div>
    <div><?php echo NAME; ?></div> <!--constant-->
</body>
</html>