<?php
require ("/includes/connect.php");
require ("/includes/session_chk.php");
$email = $_SESSION[email];

if ($_FILES["itm_img"]["error"] == 0) {
    if (($_FILES["itm_img"]["type"] == "image/png" ||
        $_FILES["itm_img"]["type"] == "image/jpeg" ||
            $_FILES["itm_img"]["type"] == "image/gif"
            ) && ($_FILES["itm_img"]["size"] < 2000000)) {
        move_uploaded_file($_FILES['itm_img']['tmp_name'], "includes/images/" . $_FILES['itm_img']['name']);

        $loc = "includes/images/" . $_FILES['itm_img']['name'];

        $q1 = "SELECT regid FROM registration WHERE email='$email'";
        $result1 = mysql_query($q1, $connect);
        $reg = mysql_fetch_array($result1);
        $q2 = "INSERT INTO items(name,description,time_period,price,brand,`condition`,negotiable,market_price,model,contact,warranty,photo,regid)
    VALUES('$_POST[itm_name]','$_POST[itm_desc]','$_POST[itm_time]','$_POST[itm_price]','$_POST[itm_brand]','$_POST[itm_condn]',
'$_POST[itm_nego]','$_POST[itm_mprice]','$_POST[itm_model]','$_POST[itm_contact]','$_POST[itm_wrnty]','$loc',$reg[0])";
        $result2 = mysql_query($q2, $connect) or die(mysql_error());
        if ($result2) {
            $status = 1;
        } else {
            $status = 2;
        }
    } else {
        $status = 3;
    }
} else {
    $status = 3;
}

mysql_close($connect);
?>
<script type="text/javascript">
window.location="insert_item.php?status=<?php echo $status; ?>";
</script>
