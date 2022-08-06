<?php

//multi dimensional arrays//

$blogs =  [
    ['title'=>'mario party','auther'=> 'mario','content'=>'redoy','like'=>30],
    ['title'=>'redoy kumar shaha','auther'=> 'saha','content'=>'noyon','like'=>25],
    ['title'=>'oishi rani saha','auther'=>'link','content'=>'tom','like'=> 50]
];

//print_r($blogs[1][3]);
// echo $blogs[2]['auther'];
// echo count($blogs);
$blogs[] = ['title'=>'mother','auther'=>'bobita rani','content'=>'rani','like'=> 500];
//print_r($blogs);


$pooped = array_pop($blogs);
print_r($pooped);










?>





<!DOCTYPE html>
<html>
<head>
    
  <title> PHP Tutorial </title>
</head>
<body>
    
</body>
</html>