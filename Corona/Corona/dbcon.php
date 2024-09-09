<?php


$server='localhost';
$user='root';
$passward='';
$db='Corona';
$con=mysqli_connect($server,$user,$passward,$db);
if($con){
    ?>
    <script>
    alert("connection successful");
    </script>
    <?php

}
else{
    ?>
    <script>
    alert("No connection");
    </script>
    <?php
}


?>