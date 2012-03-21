<?php 
include "function.php";

$feed = php_net_feed();
?>
<ul>
<?php
foreach ($feed as $key) {
    echo "<li>". $key['title'] ."</li>";
}
?>
</ul>