<?php

session_start();
session_reset();
session_destroy();
?>
<script>
window.location.assign("./Login.php");
</script>
<?php
?>