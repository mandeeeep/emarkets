<?php
session_start();
if (isset($_SESSION[admin])) {

} else {
    $status = 2;
    echo "<script type='text/javascript'>window.location='../admin/index.php?status=$status'</script>";
}
?>
