<?php
require ("../includes/connect.php");
$brand = $_POST["brand"];
$q1 = "INSERT INTO brands(brand_name)
    VALUES('$brand')";
$result1 = mysql_query($q1, $connect) or die("qweqwe");
if ($result1) {
    $status = 1;
} else {
    $status = 2;
}
mysql_close($connect);
?>
<script type="text/javascript">
    window.location="add_brand.php?status=<?php echo $status ?>&&brand=<?php echo $brand ?>";
</script>
