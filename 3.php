<?php
 $a = array("lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");
sort($a);
$clength = count($a);
for($i = 0; $i < $clength; $i++) {
    echo $a[$i];
    echo "<br>";
}
?>
