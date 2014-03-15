<?php
$path = "./";
session_start();
require 'include/connect.php';
require 'include/session_chk.php';
$q = "UPDATE registration
    SET first_name='$_POST[f_name]',last_name='$_POST[f_name]',`password`='$_POST[n_pass]'
    address='$_POST[n_add]',city='$_POST[n_city]',contact='$_POST[n_contact]'
    WHERE email='$_SESSION[email]'";
$result = mysql_query($q, $connect);
if (!$result) {
    $status = 2;
} else {
    $status = 1;
}
?>
<script type="text/javascript">
    window.location="setting.php?status=<?php echo $status; ?>";
</script>