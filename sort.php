<?php 
$countries = array("America","London","Canada");
sort($country); // will sort countries asscending order
$clength = count($countries);
for($x = 0; $x < $clength; $x++) {
    echo $countries[$x];
    echo "<br>";
}
?>
output: 
America
Canada
London

<?php 
$countries = array("America","London","Canada");
rsort($country); // will sort countries descending order
$clength = count($countries);
for($x = 0; $x < $clength; $x++) {
    echo $countries[$x];
    echo "<br>";
}
?>
output: 
London
Canada
America


