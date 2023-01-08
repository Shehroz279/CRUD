<?php

session_start();
if($_SESSION["user"]=="admin")
{
require_once 'section/header.php';
require_once 'db/one_row_call.php';
if (isset($_GET['id'])) 
{
    $b = $_GET['id'];
    $row=call($b);

?>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title te">
                Branch Details 
            </h3>
            <br>
            <h5 class="card-text">
                Branch Name:
                <?php echo $row['Branch_Name']; ?>
            </h5>
            <h5 class="card-text">
                Branch Type:  
                <?php echo $row['Branch_Type']; ?>
            </h5>
            
            <h5 class="card-text">
                Location: 
                <?php echo $row['Location']; ?>
            </h5>
            <h5 class="card-text">
                Installation Date: 
                <?php echo $row['Installation_Date']; ?>
            </h5>
            <h5 class="card-text">
            Expiry Date: 
                <?php echo $row['Expire_Date']; ?>
</h5>
            <h5 class="card-text">
                Contact No: 
                <?php echo $row['Contact_No']; ?>
            </h5>
            <h5 class="card-text">
                Anydesk Id: 
                <?php echo $row['Anydesk_Id']; ?>
            </h5>
            <h5 class="card-text">
                Name (Head of Branch): 
                <?php echo $row['Head_Name']; ?>
            </h5>
            <h5 class="card-text">
                License: 
                <?php echo $row['License']; ?>
            </h5>
        </div>
    </div>
<?php


} else { ?>
    <h6 class="text-danger">Something WRONG</h6>
<?php
}

require_once 'section/footer.php';   
}
else
{?>
    <script>
window.location.assign("./login.php");
    </script>
<?php
}  
?>