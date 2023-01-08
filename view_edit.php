<?php

session_start();
if($_SESSION["user"]=="admin")
{
        
require_once 'section/header.php';
require_once 'db/one_row_call.php';
if(isset($_GET['upd']))
{
    $update=$_GET['upd'];
    $row_selected=call($update);
}
?>


<form method="POST" action="db/update.php" autocomplete="off" onsubmit="return checkform_edit()">    
        <table class="table">
            <tr>
                <td>
                    <strong>Branch Name </strong>
                </td>   
                <td>
                    <div class="col-sm-10">
                        <input type="text" class="form-control mb-2" name="bname" value="<?php echo $row_selected['Branch_Name'] ?>">
                    </div>
                </td>
            </tr>
            <input type="hidden" name="id" value="<?php echo $row_selected['Branch_ID'] ?>">
            <tr>
                <td>
                    <strong>Branch Type </strong>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <div class="form-check">
                            
                            <input type="radio" class="form-control mb-2" name="type" value="restaurant" <?php if($row_selected['Branch_Type']=="restaurant"){?> checked<?php }?> >
                            <label>
                                Restaurant
                            </label>
                        </div>
                        </label>
                        <div class="form-check">
                            <input type="radio" class="form-control mb-2" name="type" value="retail" <?php if($row_selected['Branch_Type']=="retail"){?> checked <?php } ?> >
                            <label>
                                Retail
                            </label>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Location </strong>
                </td>
                <td>
                    <div class="col-sm-10">
                        <input type="text" class="form-control mb-2" name="location" value="<?php echo $row_selected['Location']; ?>" >
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Installation Date </strong>
                </td>
                <td>

                    <div class="col-sm-5">
                        <input type="date" class="form-control mb-2" name="ins_date" class="form-control" value="<?php echo $row_selected['Installation_Date']; ?>">

                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Expiry Date </strong>
                </td>
                <td>

                    <div class="col-sm-5">
                        <input type="date" class="form-control mb-2" name="exp_date" class="form-control" value="<?php echo $row_selected['Expire_Date']; ?>">

                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Contact No </strong>
                </td>
                <td>
                    <div class="col-sm-10 con">
                    <span id="code">+92 </span><input type="text" required id="contact_edit" name="contact" value="<?php echo substr($row_selected['Contact_No'],3); ?>" class="form-control mb-2" placeholder="">
                   </div>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Anydesk Id </strong>
                </td>
                <td>
                    <div class="col-sm-10">
                        <input type="text" id="anydesk_edit" class="form-control mb-2" name="any_id" value="<?php echo $row_selected['Anydesk_Id']; ?>">
                    </div>
                </td>
            </tr>
            <tr>
                
                <td>
                    <strong>Name (Head of Branch)</strong>
                </td>
                <td>
                    <div class="col-sm-10">
                        <input type="text" class="form-control mb-2" name="name" value="<?php echo $row_selected['Head_Name']; ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>License </strong>
                </td>
                <td>
                    <div class="col-sm-10">
                        <input type="text" class="form-control mb-2" name="license" value="<?php echo $row_selected['License']; ?>">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="update" class="btn btn-success">Update</button>
                </td>
            </tr>
        </table>
</form>

<?php
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
