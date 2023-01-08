<?php
require_once 'connect_db.php';
if (isset($_POST['update'])) {

    $uid = $_POST['id'];
    $bn = $_POST['bname'];
    $ty = $_POST['type'];
    $loc = $_POST['location'];
    $i_date = $_POST['ins_date'];
    $e_date = $_POST['exp_date'];
    $cont = "+92".$_POST['contact'];
    $a_id = $_POST['any_id'];
    $name = $_POST['name'];
    $license = $_POST['license'];

    $query_update = "UPDATE branch SET Branch_Name='$bn',Branch_Type='$ty',Location='$loc',Installation_Date='$i_date',Expire_Date='$e_date',Contact_No='$cont',Anydesk_Id='$a_id',Head_Name='$name',License='$license' WHERE Branch_ID=$uid";
    $query_update_exe = mysqli_query($con, $query_update);
    if ($query_update_exe) {
?>
        <script>
            window.location.assign("../branch.php");
        </script>
    <?php
    } else { ?>
        <script>
            window.location.assign("../errors.php");
        </script>
<?php
    }
}
?>