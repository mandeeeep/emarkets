<?php
$path="./";
if ($_GET[status] == 1) {
    echo "Invalid admin name or password";
} elseif ($_GET[status] == 2) {
    echo "LOGIN first!";
} else {

}
?>
<html>
    <head>
        <script type="text/javascript" src="./includes/js/emrakets.js">
        </script>
       <link rel="stylesheet" type="text/css" href="<? echo $path; ?>/includesstyles/index.css">
    </head>
    <body>
        <form name="admin_frm" method="POST" action="login_admindb.php" onsubmit="return validate_login_admin(this)">
            <table>
                <tr>
                    <td><label>Admin</label></td>
                    <td><input type="text" name="admin"></td>
                </tr>

                <tr>
                    <td><label>Password</label></td>
                    <td><input type="password" name="admin_pass"></td>
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
    </body>
</html>
