<?php

session_start();
if($_SESSION["user"]=="admin")
{
require_once 'section/header.php';
?>

<form action="db/insert.php" method="POST" autocomplete="off" onsubmit="return checkform()">
    
        <table class="table">
            <tr>
                <td>
                    <strong>Branch Name </strong>  
                </td>
                <td>
                    <div class="col-sm-10">
                        <input type="text" required class="form-control mb-2" name="bname" placeholder="">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Branch Type </strong>
                </td>
                <td>
                    <div class="form-check form-check-inline">
                        <div class="form-check">
                            <input type="radio" name="type" required class="form-control mb-2" value="restaurant">
                            <label>
                                Restaurant
                            </label>
                        </div>
                        </label>
                        <div class="form-check">
                            <input type="radio" name="type" required class="form-control mb-2" value="retail">
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
                        <input type="text" name="location" required class="form-control mb-2" placeholder="">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Installation Date </strong>
                </td>
                <td>

                    <div class="col-sm-5">
                        <input type="date" name="ins_date" required class="form-control mb-2" class="form-control">

                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Expiry Date </strong>
                </td>
                <td>

                    <div class="col-sm-5">
                        <input type="date" name="exp_date" required class="form-control mb-2" class="form-control">

                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Contact No </strong>
                </td>
                <td>
                    <div class="col-sm-10 con">
                        <span id="code">+92 </span><input type="text" required id="contact" name="contact" class="form-control mb-2" placeholder="">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Anydesk Id </strong>
                </td>
                <td>
                    <div class="col-sm-10">
                        <input type="text" name="any_id" id="anydesk" class="form-control mb-2" placeholder="">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Name (Head of Branch)</strong>
                </td>
                <td>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control mb-2" placeholder="">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>License </strong>
                </td>
                <td>
                    <div class="col-sm-10">
                        <input type="text" name="license" class="form-control mb-2" placeholder="">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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