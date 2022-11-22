<?php
require './connect.php';
if(isset($_GET['state']))
{
    $state = $_GET["state"];
    
    $q = mysqli_query($connection, "select * from city where stateid ='{$state}'");
    echo "City : <select name='city'>";
    while ($cdata = mysqli_fetch_row($q))
    {
        echo "<option value='$cdata[0]'>$cdata[1]</option>";
    }
    echo "</select>";
}
   ?>
