<?php echo file_get_contents("html/header.html"); ?>
<?php echo file_get_contents("html/body.html"); ?>
<?php echo file_get_contents("html/footer.html"); ?>

<?php
require_once('conection.php');
$x = "red";
echo " Mi carro es color ". $x ."<br>";
?>

