<?php
include "conn.php";

if(isset($_GET['id']) ){
    $id = $_GET['id'];
    $q="delete from student where id = $id";
    mysqli_query($conn,$q);
    header("location:index.php");}
    ?>