<?php
$path="../";
require ($path."includes/session_chk_admin.php");
if ($_GET[status] == 1) {
    echo $_GET[brand] . " added to brand list.";
} elseif ($_GET[status] == 2) {
    echo $_GET[brand] . " couldn't be added to brand list.";
} else {
    
}
?>
<html>
    <head>
        <script type="text/javascript" src="<?php echo $path;?>includes/js/emarkets.js">
        </script>
        <link rel="stylesheet" type="text/css" href="<? echo $path; ?>/includes/styles/index.css">
    <head>
    <body onload="document.add_brand.submit_btn.disabled=true">
        <form name="add_brand" action="add_brand_db.php" onsubmit="return validate_brand(this)" method="post">
            <table>
                <tr>
                    <td>Brand</td>
                    <td><input type="text" name="brand"></td>
                </tr>

                <tr>
                    <td><input type="checkbox" name="agree" onclick="agreement();">Are you sure about the brand?</td>
                </tr>

                <tr>
                    <td><input type="submit" name="submit_btn" value="Create"></td>
                    <td><input type="reset" name="reset_btn" value="Back"></td>
                </tr>
            </table>
        </form>
    </body>
</html>

