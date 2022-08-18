<?php
// if(isset($_GET['submit'])){
//     echo $_GET['email'];
//     echo $_GET['title'];
//     echo $_GET['amount'];
// }


$title = $email = $amount = '';
$errors = array ('email'=>'','title'=>'','amount'=>'');

if(isset($_POST['submit'])){
    // echo htmlspecialchars($_POST['email']);
    // echo htmlspecialchars ($_POST['title']);
    // echo htmlspecialchars($_POST['amount']);

    // check email
    if(empty($_POS['email'])){
    echo 'An email is required <br />';
}else{
    if(!filt_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email']= 'email must be a valid email address';

    }
 }

   // check title
   if(empty($_POS['title'])){
    echo 'An title is required <br />';
}else{
    if(!filt_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['title']= 'title must be a valid email address';
    }
 }

   // check amount
   if(empty($_POS['amount'])){
    echo 'An amount is required <br />';
}else{
    if(!filt_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['amount']= 'amount must be a valid email address';
    }
 }

 if(array_filter($errors)){
    //echo 'errror in the form';
 }else{
    //echo 'form is valid';
    header('Loacation: index.php');
 }

} // end of POST check.

?>



<!DOCTYPE html>
<html>
<?php include("templates/header.php"); ?>

<section class = "container grey-text">
<h4 class="center">Add a Coffee</h4>
<form class="white" action ="add.php" methode="POST">
    <label>Your Email: </label>
    <input type="text" name = "email" value="<?php echo $email ?>" >
    <div class="red-text"><?php echo $errors['email'] ?></div>
    <label>Coffee Title: </label>
    <input type="text" name = "title" value="<?php echo $title ?>">
    <div class="red-text"><?php echo $errors['title'] ?></div>
    <label>Coffee Amount: </label>
    <input type="text" name = "amount" value="<?php echo $amount ?>">
    <div class="center">
    <div class="red-text"><?php echo $errors['amount'] ?></div>
        <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">

    </div>
</from>

</section>

<?php include("templates/footer.php"); ?>
    

</html>