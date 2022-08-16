<?php
$products =[
    
    ['name'=>'redoy saha','price'=>20],
    ['name'=>'abtahi','price'=>50],
    ['name'=>'sajib','price'=>30],
    ['name'=>'asad','price'=>10],
    ['name'=>'tanvin','price'=>15],
    ['name'=>'nipa','price'=>35],

  ];

  foreach($products as $product){

    if($product['name']=== 'lighting bolt'){
        break;
    }

    if ($product['price'] > 15){
        continue;
    }

    echo $product['name'].'<br />';

  }

?>

<!DOCTYPE html>
<html>
<head>
    
  <title> PHP Tutorial </title>
</head>
<body>
    
</body>
</html>