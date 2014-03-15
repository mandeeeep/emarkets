<?php
$path="./";
require 'includes/banner.php';
require 'includes/middle.php';
require 'includes/lbar.php';
require 'includes/home.php';
?>
<legend>Login</legend>
<?php
if ($_GET[status] == 1) {
    echo "Invalid email or password";
} elseif ($_GET[status] == 2) {
    echo "LOGIN first!";
} else {

}
?>
        <form name="login_frm" method="POST" action="login_memdb.php" onsubmit="return validate_login(this)">
            <table>
                <tr>
                    <td><label>Email</label></td>
                    <td><input type="text" name="usr_email"></td>
                </tr>

                <tr>
                    <td><label>Password</label></td>
                    <td><input type="password" name="usr_pass"></td>
                </tr>               

                <tr>
                    <td>
                        <input type="submit" name="btn" value="Login">
                    </td>

                    <td>
                        <input type="reset" name="btn_reset" value="Cancel">
                    </td>
                </tr>                
            </table>
        </form>
<?php
require 'includes/rbar.php';
require 'includes/footer.php';
?>