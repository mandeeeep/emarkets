<?php
$path="../";
require ("../includes/connect.php");
require ("../includes/session_chk_admin.php");

if ($_FILES["mob_img"]["error"] == 0) {
    if (($_FILES["mob_img"]["type"] == "image/png" ||
        $_FILES["mob_img"]["type"] == "image/jpeg" ||
            $_FILES["mob_img"]["type"] == "image/gif"
            ) && ($_FILES["mob_img"]["size"] < 2000000)) {
        move_uploaded_file($_FILES['mob_img']['tmp_name'], "images/" . $_FILES['mob_img']['name']);

        $loc = "images/" . $_FILES['mob_img']['name'];
  
        $q2 = "INSERT INTO mobiles(model,brand,`description`,`announced`,`size/dimension`,`size/weight`,`display/type`,`display/size`,
        `sound/speakerphone`,`memory/phonebook`,`memory/internal`,`memory/external`,`data/gprs`,`data/edge`,`data/bt`,`data/wlan`,`data/usb`,
        `data/3g`,`camera/primary`,`camera/secondary`,`camera/feature`,`camera/video`,`feature/os`,`feature/cpu`,`feature/radio`,`feature/games`,
        `feature/color`,`feature/java`,`battery/talktime`,`battery/standby`,`battery/type`,`market_price`,`mob_img`)
    VALUES('$_POST[mob_model]','$_POST[mob_brand]','$_POST[mob_desc]','$_POST[mob_date]','$_POST[mob_size_dm]','$_POST[mob_size_wt]',
'$_POST[mob_disp_type]','$_POST[mob_disp_size]','$_POST[mob_sound]','$_POST[mob_mem_phnbk]','$_POST[mob_mem_int]','$_POST[mob_mem_ext]',
        '$_POST[mob_data_gprs]','$_POST[mob_data_edge]','$_POST[mob_data_bt]','$_POST[mob_data_wlan]','$_POST[mob_data_usb]',
        '$_POST[mob_data_3g]','$_POST[mob_cam_pri]','$_POST[mob_cam_sec]','$_POST[mob_cam_fea]','$_POST[mob_cam_vid]',
        '$_POST[mob_fea_os]','$_POST[mob_fea_cpu]','$_POST[mob_fea_radio]','$_POST[mob_fea_game]','$_POST[mob_fea_color]','$_POST[mob_fea_java]',
        '$_POST[mob_btry_tt]','$_POST[mob_btry_sb]','$_POST[mob_btry_type]','$_POST[mob_price]','$loc')";

        $result2 = mysql_query($q2, $connect) or die(mysql_error());
        echo $loc;
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
window.location="add_mobile.php?status=<?php echo $status; ?>";
</script>

