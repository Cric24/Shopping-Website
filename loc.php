<?php
     if (isset($_POST["submit_address"]))
     {
         $address=$_POST["address"];
         $address= str_replace("","+", $address);
         ?>
          <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo
          $address; ?>&output=embed"></iframe>
         <?php
     }
     if (isset($_POST["submit_coordinates"]))
     {
         $latitude = $_POST["latitude"];
         $longitude = $_POST["longitude"];
         ?>

         <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo
         $latitude; ?>,<?php echo $longitude; ?>&output=embed"></iframe>
         <?php
     }
?>

<h1><center>Please enter the Address</center></h1>
<form align="center" methods="POST">
    <p>
        <input type="text" name="address" placeholder="Enter address">
    </P>
    <input type="submit" name="submit_address">

</form>
<center><h1>Please enter the latitude and longitude</center>

<form align="center" method="POST">
    <p>
        <input type="text" name="latitude" placeholder="Enter latitude">
    </p>

    <p>
        <input type="text" name="longitude" placeholder="Enter longitude">
    </p>

    <input type="submit" name="submit_coordinates">

</form>
