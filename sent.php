<?php

$servername="localhost";
$email="root";
$password="";
$database_name="userregistration";

$conn=mysqli_connect($servername, $email, $password, $database_name);

if(!$conn)
{
    die("connection failed:" . mysqli_connect_error());
}
if(isset($_POST['save']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql_query = "INSERT INTO usertable (email,password) VALUES ('$email','$password')";

    if (mysqli_query($conn, $sql_query))
    {
        header('location:http://localhost/index.html');
    }
    else
    {
        echo "error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>