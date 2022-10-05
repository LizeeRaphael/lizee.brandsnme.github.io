<?php

include("mysqlconnect.php");
if(isset($_POST['submit'])){
    // $first_name =mysqli_real_escape_string($conn, $_POST['firstname']);
   // $name =mysqli_real_escape_string($conn, $_POST['name']);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);

    if (empty($name)) {
      echo "<script>alert('name is empty')</script>";
    } else if(empty($email)) {
    echo "<script>alert('email is empty')</script>";
  } else if(empty($password)){
    echo "<script>alert('password is empty')</script>";
  
    $sql="SELECT email FROM softwareclients WHERE email='$email'";
$res= mysqli_query($conn, $sql);
if (mysqli_num_rows($res)>0){
  echo "email is taken!";
  }else{
$sql = "INSERT INTO sofwareclients (name, email, password) VALUES ('$name', '$email', '$hash')";

if(mysqli_query($conn,$sql)){
  echo "Successful";
  echo header("location:login.php");
}else{
  echo "Error!".mysqli_error($conn);
}
}
  }
  };

?>
 
 <!DOCTYPE html>
 <html>
     <body>
         <h2> Sign up form </h2>
         <form action="signup.php" method="POST">
             <fieldset>
                 <legend> Admin information:</legend>
                 Name: <br>
                 <input type="text" name="name">
                 
                 <br>
                 Email: <br>
                 <input type="email" name="email">
                 <br>
                 Password: <br>
                 <input type="password" name="password">
                 <br>
                 
                 <br>
                 <input type="submit" name="submit" value="click here" class="submit"><br><br>
                 Have an account? <a href="login.php">Login</a>


</fieldset>
</form>
</body>
</html>
