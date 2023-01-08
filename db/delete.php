<?php

require_once 'connect_db.php';

if (isset($_GET['del'])) {
    $delete = $_GET['del'];
    $query_delete = "DELETE FROM branch WHERE Branch_ID=$delete";
    $query_delete_execute = mysqli_query($con, $query_delete);
    if ($query_delete_execute) {
?>
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
