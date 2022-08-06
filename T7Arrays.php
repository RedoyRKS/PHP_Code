<?php
  
  ///index array\\
   
  $peopleOne = ['redoy', 'asad', 'sajib'];
  //echo $peopleOne [0];
  $peopleTwo = array('ken','saha','tanvin');
  //   echo $peopleTwo[2];

  $ages = [20,30,40,50];
  // print_r ($ages);

  $ages[1]= 25;
  //print_r ($ages); //override\\


  $ages [] = 60;
  //print_r ($ages);   //add to new index\\
  array_push ($ages, 70);
  //print_r ($ages); 

  //echo count ($ages);//count all input number\\

  $peopleThree =  array_merge($peopleOne, $peopleTwo);  //add array\\\
  //print_r($peopleThree);



  //.............associative arrays........\\
   
   $redoyOne = ['shayam'=>'gold', 'oishi'=>'diamond','redoy'=>'black'];
   //echo $redoyOne['oishi'];
   //print_r($redoyOne);


   $redoyTwo = ['Mouse'=>'white','water_pot'=> 'brown'];
   //print_r($redoyTwo);
   $redoyTwo['tom'] = 'blue';
   //print_r($redoyTwo);

   //echo count($redoyOne);

   $redoyThree =  array_merge($redoyOne, $redoyTwo);
   print_r($redoyThree);


?>

<!DOCTYPE html>
<html>
<head>
    
  <title> PHP Tutorial </title>
</head>
<body>
    
</body>
</html>