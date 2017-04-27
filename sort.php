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

<?php
$age = array("akash"=>"28", "jack"=>"37", "Joe"=>"43");
arsort($age); // will Sort the Array (Descending Order), According to Value - arsort()

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>
output:
Key=Joe, Value=43
Key=jack, Value=37
Key=akash, Value=28



