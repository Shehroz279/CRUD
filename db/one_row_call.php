<?php

function call($id)
{  
    
require_once 'connect_db.php';    
    $query_view = "SELECT * FROM branch WHERE Branch_ID='$id'";
    $query_view_execute = mysqli_query($con, $query_view);
    $query_view_row = mysqli_fetch_array($query_view_execute);
    return $query_view_row;
}
?>