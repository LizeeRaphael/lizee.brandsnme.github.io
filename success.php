<!DOCTYPE html>
<html>
    <head>
        <title>Successful</title>
        <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
<body> 


<?php
include("pass.php")
?>
<?php
require ('mysqlconnect.php');

// $id="";
// if (isset($_GET["id"])){
//     $id=$_GET["id"];
// }

// $del="DELETE FROM softwareclients WHERE id='$id'";
// if (mysqli_query($conn, $del)){


    echo '<script>
    swal({
        title: "Sent!",
        text: "We would respond shortly.",
        type: "success"
    }).then(function() {
        window.location = "brand.php";
    });
    </script>';

// }else{
//     echo "Error Displaying";
// }

?>

</body>
</html>


