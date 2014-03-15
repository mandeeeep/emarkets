<?php
$path = "./";
require 'includes/banner.php';
require 'includes/middle.php';
require 'includes/lbar.php';
require 'includes/home.php';
?>
<legend>Services</legend>
<?php
if ($_GET['status'] == 1) {
    echo "Succesfully Changed";
} elseif ($_GET['status'] == 2) {
    echo "Unsuccessful";
} else {
    
}
?>
<form name="frm" method="post" action="setting_db.php" onsubmit="return check(this);">
    <table>
        <tr>
            <td><label>Name</label></td>
            <td><input type="text" name="f_name"></td>
        </tr>

        <tr>
            <td><label>Last Name</label></td>
            <td><input type="text" name="l_name"></td>
        </tr>

        <tr>
            <td><label>New password</label></td>
            <td><input type="password" name="n_pass"></td>
        </tr>

        <tr>
            <td><label>Confirm password</label>
            <td><input type="password" name="cn_pass"></td>
        </tr>

        <tr>
            <td><label>Address</label></td>
            <td><input type="text" name="n_add"></td>
        </tr>

        <tr>
            <td><label>City</label>
            <td><input type="text" name="n_city"></td>
        </tr>

        <tr>
            <td><label>Contact number</label>
            <td><input type="text" name="n_contact"></td>
        </tr>

        <tr>
            <td></td><td><input type="checkbox" name="agreement" value="agree" onclick="agreement1();">I am done with the changes.</td>
        </tr>

        <tr>
            <td>
                <input type="submit" name="btn" value="Submit" disabled>
            </td>
        </tr>
    </table>
</form>
<?
require 'includes/rbar.php';
require 'includes/footer.php';
?>