<html>
<head>
    <title> mysql images </title>
    <link rel="stylesheet" href="style6.css">

</head>

<body>
<table width ="100%">
            <tr>
                <th>PRODUCT NAME</th>
                <th>PRODUCT PRICE</th>
            </tr>
    <h1> Registered products</h1>
    <?php
    $mysqli = new mysqli('localhost', 'root', '', 'userregistration') or die($mysqli->connect_error);
    $table = 'product';

    $result = $mysqli->query("SELECT * FROM $table") or die($mysqli->error);

    while ($data = $result->fetch_assoc()){
    ?>
        <tr>
            <td> <?php echo $data['Product_Name'];?></td> 
            <td> <?php echo $data['Product_Price'];?></td>
    </tr>
    <?php
    }




?>
</table>
</body>

</html>