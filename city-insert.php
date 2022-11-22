<?php
require './connect.php';
$msg = "";
if($_POST)
{
    $cname =$_POST['cname'];
    $sname =$_POST['sname'];
    
    $q = mysqli_query($connection,"insert into city (cityname,stateid) values ('{$cname}','{$sname}')");
    if($q)
    {
        $msg = "<font color='green'>Data Inserted</font>";
    }
}
?>
<html>
    <body>
        <form method="post">
            <h1>City Insert</h1>
            <?php
            echo $msg;
            ?>
            <table>
                <tr>
                    <td>CityName</td>
                    <td><input type="text" name="cname"></td>
                </tr>
                <tr>
                    <td>State</td>
                    <td>
                        <?php
                        $q = mysqli_query($connection, "select * from state");
                        echo "<select name='sname'>";
                        while($data = mysqli_fetch_row($q))
                        {
                            echo "<option value='$data[0]'>$data[1]</option>";
                        }
                        echo "</select>";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>