<?php
require ("/includes/connect.php");
$q = "INSERT INTO registration(first_name,last_name,email,password,address,city,contact)
    VALUES('$_POST[usr_fname]','$_POST[usr_lname]','$_POST[usr_email]','$_POST[usr_pass]','$_POST[usr_add]','$_POST[usr_city]','$_POST[usr_contact]')";
$result = mysql_query($q, $connect);
if ($result) {
    $status = 1;
} else {
    $status = 2;
}
mysql_close($connect);
?>
<script type='text/javascript'>
    window.location='reg.php?status=<?php echo $status; ?>';
</script>




