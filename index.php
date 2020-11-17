
<?php
/////////////////////
echo "TASK 1 <hr>";
// <!-- Create a script that displays 1-2-3-4-5-6-7-8-9-10on one line. 
// There will be nohyphen(-) at the starting and ending position -->
for ($x=1; $x <= 10; $x++) {
  
    $var = substr_replace($x, '-', 1);
    
     if ($x == 10) {
    echo $x;
    break;
    }
    echo $var;
};

/////////////////////
echo "TASK 2 <hr>";
//  Create a script using a for loop to add all theintegers 
// between 0 and 30 anddisplay the total.

for ($x=0; $x<=30; $x++){
    echo $x.'<br>';
    $total += $x;  
}
echo "total is $total";

/////////////////////
echo '<br>';
echo '<br>';
echo "TASK 3 <hr>";
// Create a script to construct the following pattern,
// using nested for loop.


for($i=0; $i<=5; $i++) 
{

for($j='A'; $j<='E'; $j++)  
{
    echo str_repeat('A', 5-$i).str_repeat($j, $i).'<br>';
    if ($i++ > $i){
    break;
    }
}
}
/////////////////////
echo '<br>';
echo '<br>';
echo "TASK 4 <hr>";

for($i=0; $i<=5; $i++) 
{
    
for($j=1; $j<=5; $j++)  
{
    $n = '00000';
    echo substr_replace($n, $j, $j-1, 1).'<br>';
    if ($i++ > $i){
    break;
    }
}
   // echo str_repeat(0, 5).str_replace($i, $j, $i).'<br>';
    // if ($i++ > $i){
    // break;
    // }

// echo substr_replace("Demo text","word",5);
}


// $string = 'bcadef abcdef';
// $substr = 'a';

// //$position = strpos($string, 'a');

// $newstring = str_replace($substr, $substr, $string);

// // bca+++def a+++bcdef

/////////////////////
echo '<br>';
echo '<br>';
echo "TASK 6 <hr>";
$i=0;
$g=0;
$f = 0;

while ($i<=5) {
   $i++;
  
while ($f<=3){
    $g+=$i; // 1 - 3
    echo $g.'<br>'; // 1 - 3
    $i+=$g; // 2 - 5
    echo $i.'<br>'; // 2 - 5
    $f++;
}
     
}
// 
// 
// 1 + 1 = 2
// 2 + 1 = 3
// 3  + 2 = 5
// 5 + 3 = 8
//8 + 5 = 13


?>