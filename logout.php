<?php

session_start();

if (session_destroy()){
    echo header ("location:login.php");
};
?>