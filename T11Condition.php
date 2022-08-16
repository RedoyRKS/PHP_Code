<?php
//conditional statements
$price = 20;

// if($price < 10) {
//     echo 'the codition is met';
// }elseif ($price < 30) {
//     echo 'elseif condition met';
// }else{
//     echo 'condition not met';
// }

$products =[
    
    ['name'=>'redoy saha','price'=>20],
    ['name'=>'abtahi','price'=>50],
    ['name'=>'sajib','price'=>30],
    ['name'=>'asad','price'=>10],
    ['name'=>'tanvin','price'=>15],
    ['name'=>'nipa','price'=>35],

  ];

  foreach($products as $product){

    // if($product['price']>30 || $product ['price']<2){
    //     echo $product['name']. '<br />';
    // }

  }


?>


<!DOCTYPE html>
<html>
<head>
    
  <title> PHP Tutorial </title>
</head>
<body>
 <div>
    <ul>
        <?php foreach ($products as $product){ ?>
            <?php if ($product ['price'] > 15){ ?>
                <li><?php echo $product['name']; ?> </li>

           <?php } ?>

      <?php  } ?>
    </ul>
 </div>   
</body>
</html>