 
<?php
include("pass.php")
?>
 
 <?php
require ('mysqlconnect.php');
$id="";

if (isset($_GET["id"])){
    $id=$_GET["id"];


if(isset($_POST['submit'])){
    $email = ($_POST['email']);
    $password = ($_POST['password']);
    $gender = ($_POST['name']);
    $hash = password_hash($password, PASSWORD_DEFAULT);

echo $gender;

if(isset($_POST['gender'])){
    echo $gender;
}else{
    echo "no";
}

$sql="UPDATE softwareclients SET email='$email', password='$hash', name='$name' WHERE id='$id'";
if (mysqli_query($conn, $sql)){
echo $gender;
echo header ("location:index.php");
}
else{
    echo "Error Updating" .mysqli_error($conn);
}
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="update.css">
</head>

<body>

<div class="upd_form">
          <h2> Update Form </h2>
          <form method="POST" action="update.php?id=<?php echo $id; ?>">
             <fieldset>
                 <legend> Information:</legend>
                <h3>Edit Email: </h3>
                 <input type="email" name="email" class="edit">
                 <br><br>
                 <h3>Edit First name:</h3>
                 <input type="text" name="first_name" class="edit">
                 <br><br>
                 <h3>Edit Last name:</h3>
                 <input type="text" name="last_name" class="edit">
                 <br><br>
                 <h3>New Password:</h3>
                 <input type="password" name="password" class="edit"><br><br>
                 <h3>Confirm New Password:</h3>
                 <input type="password" name="password" class="edit"><br><br>
                 <h3>Edit Gender:</h3>
                 <input type="radio" name="gender" value="female">Female
                 <input type="radio" name="gender" value="male">Male
                 <input type="submit" name="submit" value="Update" class="submit"><br><br>

                
                
</fieldset>
</form>
</div>
</body>
</html>




  