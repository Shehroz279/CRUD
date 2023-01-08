<?php

require_once 'connect_db.php';
if (isset($_POST['submit'])) {

    $bn = $_POST['bname'];
    $ty = $_POST['type'];
    $loc = $_POST['location'];
    $i_date = $_POST['ins_date'];
    $e_date = $_POST['exp_date'];
    $cont = "+92".$_POST['contact'];
    $a_id = $_POST['any_id'];
    $name = $_POST['name'];
    $license = $_POST['license'];
    $query_insert = "INSERT INTO branch (Branch_Name,Branch_Type,Location,Installation_Date,Expire_Date,Contact_No,Anydesk_Id,Head_Name,License) VALUES ('$bn','$ty','$loc','$i_date','$e_date','$cont','$a_id','$name','$license')";
    $query_insert_exe = mysqli_query($con, $query_insert);

    if ($query_insert_exe) { ?>
        <script>
            window.location.assign("../branch.php");
        </script>
    <?php
    } else {
    ?>
        <script>
            window.location.assign("../errors.php");
        </script>
<?php
    }
}
?>