<?php
include "conn.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sq="select * from student where id=$id";
    $res=mysqli_query($conn,$sq);
    $row=mysqli_fetch_assoc($res);
    $sn=$row['name'];
    $se=$row['email'];
    $sp=$row['pass'];

}
if(isset($_GET['id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pass'])&& isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $id = $_GET['id'];
    $q="update student set name = '$name', email = '$email', pass = '$pass' WHERE id = $id";
    mysqli_query($conn,$q);
    header("location:index.php");
    
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="bootstrap-5.3.0-dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body class="bg-black text-white ">
    <div class="container d-flex m-auto justify-content-between bg-dark mt-2">
        <h1 class="text-info m-5 ">Update Data</h1>
        <p class="text-info m-5 ">
            <a class="btn btn-primary m-1 w-100 h-75" href="index.php">Back</a>
        </h1>
    </div>
    <div class="container p-3 m-auto bg-dark mt-4 text-center">
     <form action="" method="post">
        <div class="form-group">
            <input type="text"class="form-control m-2" placeholder="Name"value='<?php echo $sn;?>'     name="name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control m-2" placeholder="Email"value='<?php echo $se;?>'    name="email">
        </div> 
        <div class="form-group">
            <input type="password" class="form-control m-2" placeholder="Password" value='<?php echo $sp;?>' name="pass">
        </div>
        <div>
            <input type="submit" class="btn btn-primary m-2" placeholder="sumbit"   name="submit" >
        </div>
      
     </form>
    </div>
</body>
</html>