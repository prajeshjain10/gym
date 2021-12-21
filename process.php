<?php
$servername="localhost";
$username="root";
$password="";
$database="gym";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con){
    die("Error deleting record:".mysqli_error($con));
}
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $locality=$_POST['locality'];
   
    $sql="insert into gym(name,age,email,phone,locality) 
    values('".$name."','".$age."','".$email."','".$phone."','".$locality."')";
    if(mysqli_query($con,$sql))
    {
        echo "<script>alert('Successfully Registered')</script>";
    }
    else
    {
        echo "error:".mysqli_error($con);
    }
    mysqli_close($con);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PJ's Gym</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="Left">
        <img src="logo.png" alt="logo">
        PJ's Gym
    </div>
    <div class="Mid">
        <nav class="navbar">
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact Us</a></li>
        </nav>
    </div>
    <div class="Right">
        <input id="cu" type="button" value="Contact Us">
        <input id="eu" type="button" value="Email Us"> 
        
    </div>
    <div class="container">
        <form method="post" action="process.php">
            <h3>Fill this form to join</h3>
            <label for="name">Name</label>
            <input type="name" class="form-control" id="name" aria-describedby="name" placeholder="Enter name" name="name">
            <br>
            <label for="age">Age</label>
            <input type="age" class="form-control" id="age" aria-describedby="age" placeholder="Enter age" name="age">
            <br>
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter email" name="email">
            <br>
            <label for="phone">Phone</label>
            <input type="phone" class="form-control" id="phone" aria-describedby="phone" placeholder="Enter phone" name="phone">
            <br>
            <label for="locality">Locality</label>
            <input type="locality" class="form-control" id="locality" aria-describedby="locality" placeholder="Enter locality" name="locality">
            <br>
            <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
        </form>
    </div>
</body>
</html>