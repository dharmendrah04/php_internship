<?php 
//numerical Array
echo "<h1>Numerical Array</h1>";
//method 1
$a[0]=10;
$a[2]=120;
$a[3]=20.26;
$a[4]="r";
$a[5]="008";
//method 2 //index dynamic array
$a[]=10;
$a[]=20;
$a[]=20.50;
$a[]="Ronak";
$a[]="190163107008";
//method 3 use always
$a = array(10,20,30,"ronak","abhi",10.50);
// print array value
echo $a[3];
//print whole array
for($i=0;$i<count($a);$i++){
	echo "<br/>".$a[$i];
}
//inbuilt array function to debug array
echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);
echo "<pre>";
?>
