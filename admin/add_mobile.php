<?php
$path="../";
require ("../includes/session_chk_admin.php");

if ($_GET['status'] == 1) {
    echo "Succesfully added";
} elseif ($_GET['status'] == 2) {
    echo "Action Unsuccesful";
} elseif ($_GET['status'] == 3) {
    echo "Action unsuccessful(File related error)";
} else {
    echo "";
}
?>
<html>
    <head>
        <script type="text/javascript" src="../includes/js/emarkets.js">
        </script>
        <link rel="stylesheet" type="text/css" href="<? echo $path; ?>includes/styles/index.css">
    </head>
    <body>
        <form name="add_mobile" action="add_mobiledb.php" method="post" enctype="multipart/form-data" onsubmit="return validate_mob(this)">
            <table>
                <tr>
                    <td><label>Model</label></td>
                    <td><input type="text" name="mob_model"></td>
                </tr>
                
                <tr>
                    <td><label>Brand</label></td>
                    <td><select name="mob_brand">
                            <?php
                            require ("../includes/connect.php");
                            $q1 = "SELECT * FROM brands";
                            $result1 = mysql_query($q1, $connect);
                            while ($bname = mysql_fetch_array($result1)) {
                                echo "<option value=" . $bname[0] . ">" . $bname[1] . "</option>";
                            }
                            ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td><label>Description</label></td>
                    <td><textarea name="mob_desc"></textarea></td>
                </tr>

                <tr>
                    <td><label>Announced</label></td>
                    <td><input type="text" name="mob_date"></td>
                </tr>

                <tr>
                    <td><label>Size/Dimension</label></td>
                    <td><input type="text" name="mob_size_dm"></td>
                </tr>

                <tr>
                    <td><label>Size/Weight</label></td>
                    <td><input type="text" name="mob_size_wt"></td>
                </tr>

                <tr>
                    <td><label>Display/type</label></td>
                    <td><input type="text" name="mob_disp_type"></td>
                </tr>

                <tr>
                    <td><label>Display/size</label></td>
                    <td><input type="text" name="mob_disp_size"></td>       
                </tr>

                <tr>
                    <td><label>Sound/Speakerphone</label></td>
                    <td><input type="text" name="mob_sound"></td>
                </tr>

                <tr>
                    <td><label>Memory/phonebook</label></td>
                    <td><input type="text" name="mob_mem_phnbk"></td>
                </tr>

                <tr>
                    <td><label>Memory/internal</label></td>
                    <td><input type="text" name="mob_mem_int"></td>
                </tr>

                <tr>
                    <td><label>Memory/External</label></td>
                    <td><input type="text" name="mob_mem_ext"></td>
                </tr>

                <tr>
                    <td><label>Data/Gprs</label></td>
                    <td><input type="text" name="mob_data_gprs"></td>
                </tr>

                <tr>
                    <td><label>Data/Edge</label></td>
                    <td><input type="text" name="mob_data_edge"></td>
                </tr>

                <tr>
                    <td><label>Data/3G</label></td>
                    <td><input type="text" name="mob_data_3g"></td>
                </tr>

                <tr>
                    <td><label>Data/Bluetooth</label></td>
                    <td><input type="text" name="mob_data_bt"></td>
                </tr>

                <tr>
                    <td><label>Data/USB</label></td>
                    <td><input type="text" name="mob_data_usb"></td>
                </tr>

                <tr>
                    <td><label>Data/WLAN</label></td>
                    <td><input type="text" name="mob_data_wlan"></td>
                </tr>

                <tr>
                    <td><label>Camera/Primary</label></td>
                    <td><input type="text" name="mob_cam_pri"></td>
                </tr>

                <tr>
                    <td><label>Camera/Features</label></td>
                    <td><input type="text" name="mob_cam_fea"></td>
                </tr>

                <tr>
                    <td><label>Camera/Video</label></td>
                    <td><input type="text" name="mob_cam_vid"></td>
                </tr>

                <tr>
                    <td><label>Camera/Secondary</label></td>
                    <td><input type="text" name="mob_cam_sec"></td>
                </tr>

                <tr>
                    <td><label>Features/OS</label></td>
                    <td><input type="text" name="mob_fea_os"></td>
                </tr>

                <tr>
                    <td><label>Features/CPU</label></td>
                    <td><input type="text" name="mob_fea_cpu"></td>
                </tr>

                <tr>
                    <td><label>Features/Radio</label></td>
                    <td><input type="text" name="mob_fea_radio"></td>
                </tr>

                <tr>
                    <td><label>Features/Games</label></td>
                    <td><input type="text" name="mob_fea_game"></td>
                </tr>

                <tr>
                    <td><label>Features/Color</label></td>
                    <td><input type="text" name="mob_fea_color"></td>
                </tr>

                <tr>
                    <td><label>Features/Java</label></td>
                    <td><input type="text" name="mob_fea_java"></td>
                </tr>

                <tr>
                    <td><label>Battery/Type</label></td>
                    <td><input type="text" name="mob_btry_type"></td>
                </tr>

                <tr>
                    <td><label>Battery/TalkTime</label></td>
                    <td><input type="text" name="mob_btry_tt"></td>
                </tr>

                <tr>
                    <td><label>Battery/StandBY</label></td>
                    <td><input type="text" name="mob_btry_sb"></td>
                </tr>

                <tr>
                    <td><label>Market Price</label></td>
                    <td><input type="text" name="mob_price"></td>
                </tr>

                <tr>
                    <td><label>Photo</label></td>
                    <td><input type="file" name="mob_img"></td>
                </tr>

                <tr>
                    <td><input type="submit" name="submit" value="Insert"></td>
                    <td><input type="reset" name="reset" value="Cancel"></td>
                </tr>
            </table>
        </form>
    </body>
    <html>
    </body>
</html>