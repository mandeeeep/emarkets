<?php
$path="./";
$connect = mysql_connect("localhost", "root", "");
require 'includes/banner.php';
require 'includes/middle.php';
require 'includes/lbar.php';
require 'includes/home.php';
mysql_select_db('emarkets', $connect);
$q = "select * from items where name like '$_POST[srch_name]%' and brand='$_POST[srch_brand]' and `condition`='$_POST[srch_condn]'
and `negotiable`='$_POST[srch_nego]'";
$result = mysql_query($q, $connect);
if ($result) {
    $status = 1;
} else {
    $status = 2;
}
$q2 = "select count(name) from items where name='$_POST[srch_name]' and brand='$_POST[srch_brand]' and `condition`='$_POST[srch_condn]'
and `negotiable`='$_POST[srch_nego]'";
$n = mysql_query($q2, $connect);
$i = 0;
while($arr = mysql_fetch_array($result)){
?>
<legend>Search</legend>
<table class='myTable'>    
    <tr valign="top">

        <td><label>Model</label></td>
        <td><?= $arr[1]; ?></td>
        <td rowspan="33" ><img src="<?php echo $path.$arr[13]; ?>"/></td>
    </tr>

    <tr>
        <td><label>Brand</label></td>
        <td><?= $arr[5]; ?></td>
    </tr>

    <tr>
        <td><label>Description</label></td>
        <td><?= $arr[2]; ?></td>
    </tr>

    <tr>
        <td><label>Time Period</label></td>
        <td><?= $arr[3]; ?></td>
    </tr>

    <tr>
        <td><label>Price</label></td>
        <td><?= $arr[4]; ?></td>
    </tr>

    <tr>
         <td><label>Condition</label></td>
        <td><?= $arr[6]; ?></td>
    </tr>

    <tr>
        <td><label>Negotiable</label></td>
        <td><?= $arr[7]; ?></td>
    </tr>

    <tr>
         <td><label>Market Price</label></td>
        <td><?= $arr[8]; ?></td>
    </tr>

    <tr>
        <td><label>Model</label></td>
        <td><?= $arr[9]; ?></td>
    </tr>

    <tr>
        <td><label>Contact</label></td>
        <td><?= $arr[10]; ?></td>
    </tr>

    <tr>
         <td><label>Warranty</label></td>
        <td><?= $arr[11]; ?></td>
    </tr>
</table>
<hr align="center">

<?
}
mysql_close($connect);
require 'includes/rbar.php';
require 'includes/footer.php';
?>

