<?php

$con= mysqli_connect("localhost","root","","userregistration");
$response = array();
if ($con){
    $sql= "select * from usertable";
    $result = mysqli_query($con,$sql);
    if ($result){
        header("Content-Type: JSON");
        $i=0;
        while($row = mysqli_fetch_assoc($result)){
            $response[$i]['email']= $row['email'];
            $response[$i]['password']= $row['password'];

            $i++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}

else {
    echo "Database connection failed";
}

?>