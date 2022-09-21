<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `admin` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$phone=$row['phone'];
$password=$row['password'];

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$password=$_POST['password'];

	$sql="update `admin` set id=$id, name='$name',email='$email', phone='$phone', password='$password' where id=$id";
	$result=mysqli_query($con,$sql);
	if($result){
		//echo "update successfully";
		header('location:display.php');
	}else{
		die(mysqli_error($con));
	}

}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
	<form method="post">
	<div class="mb-3">
		<label>Name</label>
		<input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value=<?php echo $name;?>>
	</div>
	<div class="mb-3">
		<label>Email</label>
		<input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value=<?php echo $email;?>>
	</div>
	<div class="mb-3">
		<label>Phone</label>
		<input type="text" class="form-control" placeholder="Enter your phone number" name="phone" autocomplete="off"value=<?php echo $phone;?>>
	</div>
	<div class="mb-3">
		<label>Password</label>
		<input type="password" class="form-control" placeholder="Enter your password" name="password"value=<?php echo $password;?>>
	</div>
    
  	<button type="submit" class="btn btn-primary" name="submit">Update</button>
	</form>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
<?php
	