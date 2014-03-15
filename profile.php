<?php
$path="./";
session_start();
require "includes/session_chk.php";
require ("includes/connect.php");
require 'includes/banner.php';
require 'includes/middle.php';
require 'includes/lbar.php';
require 'includes/home.php';
?>
<legend>Profile</legend>

<?php
$q1 = "SELECT *
    FROM registration
    WHERE email='$_SESSION[email]'";
$result1 = mysql_query($q1, $connect);
while ($arr = mysql_fetch_array($result1)) {
//    if ($arr[6] == 1) {
//        $arr[6] = FirstHand;
//    } else {
//        $arr[6] = SecondHand;
//    }
//    if ($arr[7] == 1) {
//        $arr[7] = Yes;
//    } else {
//        $arr[7] = No;
//    }
//    if ($arr[11] == 1) {
//        $arr[11] = Dealer;
//    } elseif ($arr[11] == 2) {
//        $arr[11] = Manufaturer;
//    } else {
//        $arr[11]=No."<&nbsp;>".Warranty;
//    }
?>
<table class="myTable">
    <tr valign="top">

        <td><label>Name</label></td>
        <td><?= $arr[1]; ?> <?= $arr[2]; ?></td>
        <td rowspan="33" ><img src="<?php echo $path.$arr[13]; ?>"/></td>
    </tr>

    <tr>
        <td><label>Email</label></td>
        <td><?= $arr[3]; ?></td>
    </tr>

    <tr>
        <td><label>Address</label></td>
        <td><?= $arr[5]; ?></td>
    </tr>

    <tr>
        <td><label>City</label></td>
        <td><?= $arr[6]; ?></td>
    </tr>

    <tr>
        <td><label>Contact</label></td>
        <td><?= $arr[7]; ?></td>
    </tr>
    
</table>
<hr align="center">
<?
}
require 'includes/rbar.php';
require 'includes/footer.php';
?>
 