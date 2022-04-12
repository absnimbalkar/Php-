<html>
<body>
<?php
$temp = array(68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78,
68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83);

//Add the values in the array
$sum = array_sum($temp);
//Count the items in the array
$count = count($temp);
//Find the average
$average = ($sum/$count);
//Remove duplicate temp
$temp = array_unique($temp);
//Sort array from low to high 
sort($temp);

//Slice array for last 5 temp
$warmest = array_slice($temp, -5, 5);
//Slice array for first 5 temp
$coolest = array_slice($temp, 0, 5);
?>
 <p>The average high temp is: <?php echo round($average)."&degF"; ?></p>
<p>The 5 warmest high temps were: <?php foreach($warmest as $w){echo
"$w&degF, ";} ?></p>
<p>The 5 coolest high temps were: <?php foreach($coolest as $c){echo
"$c&degF, ";} ?></p>
</body>
</html> 