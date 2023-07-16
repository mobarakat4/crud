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
    <div class="container d-flex m-auto justify-content-between bg-dark">
        <h1 class="text-info m-5 ">All Data</h1>
        <p class="text-info m-5 ">
            <a class="btn btn-primary m-1 w-100 h-75" href="create.php">Create</a>
        </h1>
    </div>
    <div class="container p-3 m-auto">
        <table class="table table-dark table-bordered m-auto">
            <thead>
                <tr><th scope="col" class="col">Name</th><th scope="col" class="col">Email</th><th scope="col" class="col">Pass</th><th scope="col" class="col">Action</th></tr>
            </thead>
            <tbody>
                <?php
                include "conn.php";
                $q="select * from student";
                $res=mysqli_query($conn,$q);
            while($row=mysqli_fetch_assoc($res)){
                $id=$row['id'];
                        echo '<tr>';
                        echo '<td class="col">';
                        echo $row['name'];
                        echo '</td>';
                        echo '<td class="col">';
                        echo $row['email'];
                        echo '</td>';
                        echo '<td class="col">';
                        echo $row['pass'];
                        echo '</td>';
                        echo '<td class="col">';
                        
                        echo '<a class="btn btn-warning m-1" href="update.php?id='.$id.'">Update</a>';
                        echo '<a class="btn btn-danger m-1" href="delete.php?id='.$id.'">Delete</a>';
                        echo '</td>';
                        echo '</tr>';
                    }
                    ?>
            </tbody>
        </table>
    </div>
</body>
</html>