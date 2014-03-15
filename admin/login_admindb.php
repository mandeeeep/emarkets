<?php
$path="../";
require ($path."includes/connect.php");
/*never ever add session checking pages in the login working page.....*/
$admin = $_POST['admin'];
$pass = $_POST['admin_pass'];
$q = "select admin,pass from admins where admin='$admin' and pass='$pass'";
$result = mysql_query($q, $connect);
//$login = mysql_fetch_array($result);
$check = mysql_num_rows($result);
if ($check > 0) {
    session_start();
    $_SESSION[admin] = $admin or die("Error");
    echo "<script type='text/javascript'>window.location='admin.php'</script>";
} else {
    $status = 1;
    echo "<script type='text/javascript'>window.location='index.php?status=$status'</script>";
}
?>





