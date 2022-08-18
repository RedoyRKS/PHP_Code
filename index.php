<?php
// connect to database
$cone = mysqli_connect('localhost','shaun','test1234','ninja_coffee');

//check connection
if(!$cone){
    echo 'Connection errror : ' . mysqli_connect_error();
}

//write query for all coffee
$sql = 'SELECT title, amount,id FROM Coffee ORDER BY ceated_at';

//make query & get result 
$result = mysqli_query($cone,$sql);

//fetch the resulting rows as an array 
$coffee = mysqli_fetch_all($result,MYSQLI_ASSOC);

//free result for memory
mysqli_free_result($result);

//close connection
mysqli_close($cone);

print_r($coffee);

?>



<!DOCTYPE html>
<html>
<?php include("templates/header.php"); ?>
<h4 class = "center grey-text"> Coffee!</h4>
<div class= " container">
    <div class = "row">

    <?php foreach($coffee as $coffee){ ?>
        <div class=class=" col s6 md3"></div>
        <div class=class"card z-depth-0"></div>
        <div class=class"card-content center"></div>
        

<?php } ?>
    </div>

</div>



<?php include("templates/footer.php"); ?>
    

</html>