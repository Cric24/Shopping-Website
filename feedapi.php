<?php

$con= mysqli_connect("localhost","root","","webpage");
$response = array();
if ($con){
    $sql= "select * from feedback";
    $result = mysqli_query($con,$sql);
    if ($result){
        header("Content-Type: JSON");
        $i=0;
        while($row = mysqli_fetch_assoc($result)){
            $response[$i]['feedback']= $row['feedback'];
            $i++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}

else {
    echo "Database connection failed";
}

?>