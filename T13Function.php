<?php

function sayHello($name = 'redoy',$time = 'night'){
    echo "goood $time $name";
}

//sayHello('saha');
sayHello('anup');

function fromatProduct($product){
    //echo "{$product['name']} cost {$product['price'] } tk to buy <br />";
     return "{$product['name']} cost {$product['price'] } tk to buy <br />";
}
$formatted = fromatProduct(['name'=>'gold star','price'=> 20]);
//echo $formatted;
?>

<!DOCTYPE html>
<html>
<head>
    
  <title> PHP Tutorial </title>
</head>
<body>
    
</body>
</html>
  