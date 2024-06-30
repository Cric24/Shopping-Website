<?php

$con= mysqli_connect("localhost","root","","userregistration");
$response = array();
if ($con){
    $sql= "select * from product";
    $result = mysqli_query($con,$sql);
    if ($result){
        header("Content-Type: JSON");
        $i=0;
        while($row = mysqli_fetch_assoc($result)){
            $response[$i][' Product_ID']= $row['Product_ID'];
            $response[$i]['Product_Name']= $row['Product_Name'];
            $response[$i]['Product_Price']= $row['Product_Price'];
            $response[$i]['File_name']= $row['File_name'];

            $i++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}

else {
    echo "Database connection failed";
}

?>