
<html>
    <head>
        <title> display image </title>
    </head>
    <body>
        

    <form action="" method="POST" enctype="multipart/form-data"></form>
    <table>
        <tr>
            <th> image </th>
            <th> Username </th>
            <th> designatiom </th>
</tr>
<?php
$connection= mysqli_connect("localhost","root","");
$db= mysqli_select_db($connection,'userregistration');

$query="SELECT * FROM 'product'";
$query_run = mysqli_query($connection,$query);

while($row=mysqli_fetch_array($query_run))
{
    ?>
    <tr>
        <td> <?php echo '<img src ="data:image;base64,'.base64_encode($row['image']).'" alt="image" style="width:100px; height: 100px;" >'; ?>> </td>
        <td> <?php echo $row['Product_Name'];?></td>
        <td> <?php echo $row['Product_Price'];?></td>
</tr>

    <?php
}
?>
</table>
</body>
</html>