<?php

$page = fopen("roba.php","w+");
fwrite($page," <?php
echo 'banana';
  ?>");
fclose($page);
header("Location: roba.php");
 ?>
