<?php
$path = "./";
require ("/includes/session_chk.php");
require 'includes/banner.php';
require 'includes/middle.php';
require 'includes/lbar.php';
require 'includes/home.php';
?>
<legend>Insert Items</legend>
<?php
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
<form name="itm_frm" action="item_db.php" method="post" enctype="multipart/form-data" onsubmit="return validate_item(this)">
    <table>
        <tr>
            <td><label>Name</label></td>
            <td><input type="text" name="itm_name"></td>
        </tr>

        <tr>
            <td><label>Description</label></td>
            <td><textarea name="itm_desc"></textarea></td>
        </tr>

        <tr>
            <td><label>Time Period(in months)</label></td>
            <td><input type="text" name="itm_time"></td>
        </tr>

        <tr>
            <td><label>Price</label></td>
            <td><input type="text" name="itm_price"></td>
        </tr>

        <tr>
            <td><label>Brand</label></td>
            <td><select name="itm_brand">
<?php
require ("/includes/connect.php");
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
            <td><label>Condition</label></td>
            <td>
                <input type="radio" name="itm_condn" value="1">FirstHand&nbsp;&nbsp;
                <input type="radio" name="itm_condn" value="2">SecondHand
            </td>
        </tr>

        <tr>
            <td><label>Negotiable</label></td>
            <td>
                <input type="radio" name="itm_nego" value="1">Yes&nbsp;&nbsp;
                <input type="radio" name="itm_nego" value="0">No
            </td>
        </tr>

        <tr>
            <td><label>Indicative Market Price</label></td>
            <td><input type="text" name="itm_mprice"></td>
        </tr>

        <tr>
            <td><label>Model</label></td>
            <td><input type="text" name="itm_model"></td>
        </tr>

        <tr>
            <td><label>Contact</label></td>
            <td><input type="text" name="itm_contact"></td>
        </tr>

        <tr>
            <td><label>Warranty</label></td>
            <td>
                <input type="radio" name="itm_wrnty" value="1">Dealer&nbsp;&nbsp;
                <input type="radio" name="itm_wrnty" value="2">Manufacturer&nbsp;&nbsp;
                <input type="radio" name="itm_wrnty" value="3">No warranty
            </td>
        </tr>

        <tr>
            <td><label>Photo</label></td>
            <td><input type="file" name="itm_img"></td>
        </tr>

        <tr>
            <td>
                <input type="submit" name="sub" value="Insert">
                <input type="reset" name="reset" value="Cancel">
            </td>
        </tr>


    </table>
</form>
<?
require 'includes/rbar.php';
require 'includes/footer.php';
?>