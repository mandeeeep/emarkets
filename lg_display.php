<?php
$path="./";
require ("includes/connect.php");
require 'includes/banner.php';
require 'includes/middle.php';
require 'includes/lbar.php';
require 'includes/home.php';
?>
<legend>L.G.</legend>

<?php
$q1 = "SELECT i.item_id,i.name,i.description,i.time_period,i.price,b.brand_name,i.condition,i.negotiable,i.market_price,i.model,i.contact,i.warranty,i.photo,i.regid
    FROM items i,brands b
    WHERE i.brand=b.brand and i.brand=4";
$result1 = mysql_query($q1, $connect);
while ($arr = mysql_fetch_array($result1)) {
    if ($arr[6] == 1) {
        $arr[6] = FirstHand;
    } else {
        $arr[6] = SecondHand;
    }
    if ($arr[7] == 1) {
        $arr[7] = Yes;
    } else {
        $arr[7] = No;
    }
    if ($arr[11] == 1) {
        $arr[11] = Dealer;
    } elseif ($arr[11] == 2) {
        $arr[11] = Manufaturer;
    } else {
        $arr[11]=No."<&nbsp;>".Warranty;
    }
?>
<table class="myTable">
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
require 'includes/rbar.php';
require 'includes/footer.php';
?>
 