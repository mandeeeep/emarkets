<?php
session_start();
if (isset($_SESSION[email])) {

} else {
    $status = 2;
    echo "<script type='text/javascript'>window.location='login_mem.php?status=$status'</script>";
}
?>
