<?php
//BACKEND VIEW TICKETS
session_start();
include('dbcon.php');

$query = "SELECT * FROM usertickets";
$query_run = mysqli_query($con, $query);

    if(query_run)
    {
        while($row = mysqli_fetch_array($query_run))
        {
            echo $row['id'];
            echo $row['subject'];
            echo $row['created_at'];
        }
    }
    else
    {
        echo "No Record Found!";
    }



?>