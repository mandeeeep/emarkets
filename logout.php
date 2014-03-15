<?php
$path = "./";
require 'includes/banner.php';
require 'includes/middle.php';
require 'includes/lbar.php';
require 'includes/home.php';
?>
<?php
if(isset($_SESSION[email]))
{
?>
<legend>Are you sure you want to logout?</legend>
<table>
    <tr><ul>
        <td><li><a href="<?= $path ?>profile.php">I can't quit at this moment!</a></li></td>
            <td><li><a href="<?= $path ?>includes/session_end.php">But I am too tired to continue...</a></li>
            </td>
    <ul></tr>
</table>
<?php
}
else
{
    echo "<legend>You can't log out!</legend>";
    echo "You Gotta login first!";
}
?>
<?php
require 'includes/rbar.php';
require 'includes/footer.php';
?>