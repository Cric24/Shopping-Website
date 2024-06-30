<?php

$servername="localhost";
$feed="root";
$des="";
$database_name="webpage";

$conn=mysqli_connect($servername, $feed, $des, $database_name);

if(!$conn)
{
    die("connection failed:" . mysqli_connect_error());
}
if(isset($_POST['save']))
{
    $feed = $_POST['feedback'];
    
    
    $sql_query = "INSERT INTO feedback (feedback) VALUES ('$feed')";

    if (mysqli_query($conn, $sql_query))
    {
        header('location:http://localhost/index1.html');
    }
    else
    {
        echo "error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>