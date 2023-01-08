<?php
require_once 'connect_db.php';  
if(isset($_POST['search']))
            {
                $branch=$_POST['search_input'];
                $query="SELECT * FROM branch WHERE Branch_Name='$branch'";
                $query_exe=mysqli_query($con, $query);
            }
?>