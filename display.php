<?php
include 'connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Crud operation</title>
</head>
<body>
<div class="container">
    <button class="btn btn-primary my-5"> <a href="admin.php" class="text-light"></a>
    Add </button>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Sl no</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Password</th>
            <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>


<?php

$sql="Select * from `admin`";
$result=mysqli_query($con, $sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $phone=$row['phone'];
        $password=$row['password'];
        echo '<tr> 
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$phone.'</td>
        <td>'.$password.'</td>
        <td>
        <button class="btn btn-primary"><a href="update.php?
        updateid='.$id.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php?
        deleteid='.$id.'" class="text-light">Delete</a></button>
    </td>
      </tr>';

    }
}
?>
    </tbody>
    </table>
</div>    
</body>
</html>
