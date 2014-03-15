<?php
$path = "./";
require 'includes/banner.php';
require 'includes/middle.php';
require 'includes/lbar.php';
require 'includes/home.php';
?>
<legend>Registration</legend>
<?php
if ($_GET['status'] == 1) {
    echo "Registration Successful";
} elseif ($_GET['status'] == 2) {
    echo "Registration unsuccessful";
} else {
    echo "";
}
?>
<form name="reg_frm" method="post" action="reg_db.php" onsubmit="return validate_registration(this);">
    <table>
        <tr>
            <td><label>First Name</label></td>
            <td><input type="text" name="usr_fname"></td>
        </tr>

        <tr>
            <td><label>Last Name</label></td>
            <td><input type="text" name="usr_lname"></td>
        </tr>

        <tr>
            <td><label>Email</label></td>
            <td><input type="text" name="usr_email"></td>
        </tr>

        <tr>
            <td><label>Password</label></td>
            <td><input type="password" name="usr_pass"></td>
        </tr>

        <tr>
            <td><label>Confirm password</label></td>
            <td><input type="password" name="c_pass"></td>
        </tr>

        <tr>
            <td><label>Address</label></td>
            <td><input type="text" name="usr_add"></td>
        </tr>

        <tr>
            <td><label>City</label></td>
            <td><input type="text" name="usr_city"></td>
        </tr>

        <tr>
            <td><label>Contact</label></td>
            <td><input type="text" name="usr_contact"></td>
        </tr>

        <tr>
            <td><input type="checkbox" name="agree" value="agr" onclick="agreement();">I agree with the terms and conditions.</td>
        </tr>

        <tr>
            <td>
                <input type="submit" name="btn" value="Agree" disabled>
                <input type="reset" name="res" value="Cancel">
            </td>
        </tr>
    </table>
</form>
<?php
require 'includes/rbar.php';
require 'includes/footer.php';
?>