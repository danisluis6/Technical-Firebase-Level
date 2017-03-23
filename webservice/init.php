<?php
/**
 * Created by PhpStorm.
 * User: enclaveit
 * Date: 23/03/2017
 * Time: 16:50
 */
    $host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "schoolmate";

    $con = mysqli_connect($host,$db_user,$db_password,$db_name);

    if($con)
        echo "Connection Success ... ";
    else
        echo "Connection Error ... ";

?>