<?php
  //loops
  $redoy=['saha','oishi','shayam'];
  // for ($i=0; $i < count($redoy) ; $i++) { 
  //   echo $redoy [$i].  '<br/>';
  // }


  //  foreach($redoy as $kumar){
  //   echo $kumar.'<br/>';
  //  }
  $products =[
    
    ['name'=>'redoy saha','price'=>20],
    ['name'=>'abtahi','price'=>50],
    ['name'=>'sajib','price'=>30],
    ['name'=>'asad','price'=>10],
    ['name'=>'tanvin','price'=>15],
    ['name'=>'nipa','price'=>35],

  ];
  // foreach($products as $product){
  //   echo $product['name']. ' - ' . $product['price'];
  //   echo '<br/>';
  // }



  // $i =0;
  // while ($i < count($products)){
  //   echo $products[$i]['name'];
  //   echo '<br/>';
  //   $i++;
  // }





?>

<!DOCTYPE html>
<html>
<head>
    
  <title> PHP Tutorial </title>
</head>
<body>

<h1>products</h1>
<ul>
  <?php foreach($products as $product){ ?>
     <h3>
      <?php echo $product['name']; ?></h3>
      <p> <?php echo $product['price'];?> </p>

    <?php } ?>
</ul>
    
</body>
</html>