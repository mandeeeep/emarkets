<?php
require ("includes/connect.php");
/*never ever add session checking pages in the login working page.....*/
$email = $_POST['usr_email'];
$pwd = $_POST['usr_pass'];
$q = "select email,`password` from registration where email='$email' and `password`='$pwd'";
$result = mysql_query($q, $connect);
//$login = mysql_fetch_array($result);
$check = mysql_num_rows($result);
if ($check > 0) {
    session_start();
    $_SESSION[email] = $email or die("Error");
    echo "<script type='text/javascript'>window.location='index.php'</script>";
} else {
    $status = 1;
    echo "<script type='text/javascript'>window.location='login_mem.php?status=$status'</script>";
}
?>



