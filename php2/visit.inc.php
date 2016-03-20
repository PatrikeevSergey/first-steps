<?php
$pages = explode("|", $_SESSION['pages']);
if(is_array($pages)){
    echo "<ol>";
    array_pop($pages);
    foreach($pages as $p){
        echo "<li>$p</li>";
    }
    echo "</ol>";
}
?>
