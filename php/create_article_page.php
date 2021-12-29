<?php
$page = fopen(".php","w+");
fwrite($page," <?php
echo 'banana';
  ?>");
fclose($page);
header("Location: roba.php");
 ?>
