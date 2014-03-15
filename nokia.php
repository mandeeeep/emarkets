<?php
$path = "./";
require $path . "includes/connect.php";
?>

<?php
require $path . "includes/banner.php";
require $path . "includes/middle.php";
require $path . "includes/lbar.php";
require $path . "includes/home.php";
?>

<?php
$q1="SELECT * FROM mobiles WHERE brand=1";
$result1=  mysql_query($q1,$connect);
while($arr=  mysql_fetch_array($result1)){
?>
<legend><?= $arr[1]; ?></legend>
<table class="myTable">
    <!--tr>
        <td rowspan="33" ><img src="<?php echo $path.$arr[33]; ?>"/></td>
    </tr!-->

    <tr>
        <td><label>Model</label></td>
        <td><?= $arr[1]; ?></td>
        <td rowspan="4"><img src="<?php echo $path.$arr[33]; ?>"/></td>
    </tr>

    <tr>
        <td><label>Brand</label></td>
        <td><?= $arr[2]; ?></td>
    </tr>

    <tr>
        <td><label>Description</label></td>
        <td><?= $arr[3]; ?></td>
    </tr>

    <tr>
        <td><label>Announced</label></td>
        <td><?= $arr[4]; ?></td>
    </tr>

    <tr>
        <td><label>Size</label></td>
        <td><label>Dimension</label></td>
        <td><?= $arr[5]; ?></td>
    </tr>

    <tr>
        <td>&nbsp;</td>
         <td><label>weight</label></td>
        <td><?= $arr[6]; ?></td>        
    </tr>

    <tr >
        <td><label>Display</label></td>
        <td><label>Type</label></td>
        <td><?= $arr[7]; ?></td>
    </tr>

    <tr>
        <td>&nbsp;</td>
         <td><label>Size</label></td>
        <td><?= $arr[8]; ?></td>
    </tr>

    <tr >
        <td><label>Sound</label></td>
        <td><label>Speakerphone</label></td>
        <td><?= $arr[9]; ?></td>
    </tr>

    <tr>
        <td><label>Memory</label></td>
        <td><label>Phonebook</label></td>
        <td><?= $arr[10]; ?></td>
    </tr>

    <tr>
        <td>&nbsp;</td>
         <td><label>Internal</label></td>
        <td><?= $arr[11]; ?></td>
    </tr>

    <tr>
        <td>&nbsp;</td>
         <td><label>External</label></td>
        <td><?= $arr[12]; ?></td>
    </tr>

     <tr>
        <td><label>Data</label></td>
        <td><label>GPRS</label></td>
        <td><?= $arr[13]; ?></td>
    </tr>

    <tr>
        <td>&nbsp;</td>
         <td><label>Edge</label></td>
        <td><?= $arr[14]; ?></td>
    </tr>

    <tr>
        <td>&nbsp;</td>
         <td><label>Bluetooth</label></td>
        <td><?= $arr[15]; ?></td>
    </tr>

    <tr>
        <td>&nbsp;</td>
         <td><label>WLAN</label></td>
        <td><?= $arr[16]; ?></td>
    </tr>

    <tr>
        <td>&nbsp;</td>
         <td><label>USB</label></td>
        <td><?= $arr[17]; ?></td>
    </tr>

    <tr>
        <td>&nbsp;</td>
         <td><label>3G</label></td>
        <td><?= $arr[18]; ?></td>
    </tr>

    <tr>
        <td><label>Camera</label></td>
        <td><label>Primary</label></td>
        <td><?= $arr[19]; ?></td>
    </tr>

    <tr>
        <td>&nbsp;</td>
         <td><label>Secondary</label></td>
        <td><?= $arr[20]; ?></td>
    </tr>

     <tr>
        <td>&nbsp;</td>
         <td><label>Feature</label></td>
        <td><?= $arr[21]; ?></td>
    </tr>

     <tr>
        <td>&nbsp;</td>
         <td><label>Video</label></td>
        <td><?= $arr[22]; ?></td>
    </tr>

    <tr>
        <td><label>Feature</label></td>
        <td><label>OS</label></td>
        <td><?= $arr[23]; ?></td>
    </tr>

    <tr>
        <td>&nbsp;</td>
         <td><label>CPU</label></td>
        <td><?= $arr[24]; ?></td>
    </tr>

    <tr>
        <td>&nbsp;</td>
         <td><label>Radio</label></td>
        <td><?= $arr[25]; ?></td>
    </tr>

    <tr>
        <td>&nbsp;</td>
         <td><label>Games</label></td>
        <td><?= $arr[26]; ?></td>
    </tr>

    <tr>
        <td>&nbsp;</td>
         <td><label>Color</label></td>
        <td><?= $arr[27]; ?></td>
    </tr>

    <tr>
        <td>&nbsp;</td>
         <td><label>Java</label></td>
        <td><?= $arr[28]; ?></td>
    </tr>
    
     <tr>
        <td>&nbsp;</td>
        <td><label>Talk Time</label></td>
        <td><?= $arr[29]; ?></td>
    </tr>

    <tr>
        <td>&nbsp;</td>
        <td><label>Stand By</label></td>
        <td><?= $arr[30]; ?></td>
    </tr>

    <tr>
        <td>&nbsp;</td>
        <td><label>Type</label></td>
        <td><?= $arr[31]; ?></td>
    </tr>
    
    <tr>
        <td><label>Market Price</label></td>
        <td><label>Price</label></td>
        <td><?= $arr[32]; ?></td>
    </tr>




    
    
</table>

<?php
}
require $path . "includes/rbar.php";
require $path . "includes/footer.php";
?>