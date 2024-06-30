<?php
require_once("sent.php");
$sql = "INSERT INTO `product` (`Product_ID`, `Product_Name`, `Product_Price`, `File_name`) VALUES (NULL, '".$_POST['Product_Name']."', '".$_POST["Product_Price"]."',
'".md5($_POST['Product_Name'])."-img.jpg')";
//$sql = "INSERT INTO 'product'('Product_ID', 'Product_Name', 'Product_Price', 'File_name') VALUES (NULL,'".$_POST['Product_Name']."', '".$_POST["Product_Price"]."', '".$_POST['fileToUpload']."',
//'".md5($_POST['Product_Name'])."-img.jpg')";

    $target_dir = "C:/xampp/htdocs/resources/products/";
    $target_file = $target_dir . basename(md5($_POST['Product_Name'])."-img.jpg");
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
                move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
    }
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        header('Location: http://localhost/index1.html');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();


?>