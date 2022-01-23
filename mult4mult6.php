<?php
$m4=0;
$m6=0;
$m4m6=0;
$candidates = array(0,0,0,0,0,0);
echo "Numbers on the list: ";
echo count ($candidates);
echo "<br><br>";
echo "List of random numbers: <br>";
// fill candidates array with rand nums
for ($i=0; $i<6; $i++)
{
    $candidates[$i]=rand(1,120);
    echo $candidates[$i];
    echo "<br>";
}


// numbers that are multiples of 4
echo "<br>Multiples of 4:<br>";
for ($i=0; $i<6; $i++)
{
    if ($candidates[$i]%4==0) {
        $m4++;
        echo $candidates[$i];
        echo "<br>";
    }
}
echo "<br>Multiples of 4 count: $m4 <br>";


// numbers that are multiples of 6
echo "<br>Multiples of 6: <br>";
for ($i=0; $i<6; $i++)
{
    if ($candidates[$i]%6==0) {
        $m6++;
        echo $candidates[$i];
        echo "<br>";
    }
}
echo "<br>Multiples of 6 count: $m6 <br>";
    
  // numbers that are multiples of 4 or 6
echo "<br>Multiples of 4 or 6:<br>";
for ($i=0; $i<6; $i++)
{
    if ( ($candidates[$i]%4==0) or ($candidates[$i]%6==0) ) {
        $m4m6++;
        echo $candidates[$i];
        echo "<br>";
    }
}
echo "<br>Multiples of 4 or 6 count: $m4m6 <br>"; 
    
?>
