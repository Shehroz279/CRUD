<?php

session_start();
if ($_SESSION["user"] == "admin") {
    require_once 'section/header.php';

?>
    <div class="alert alert-warning" role="alert">
        There something Error
    </div>
<?php
    require_once 'section/footer.php';
} else { ?>
    <script>
        window.location.assign("./login.php");
    </script>
<?php
}
?>