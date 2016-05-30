<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>variables</title>
</head>

<body>
<?php

$a="hello";
$hello="hello everyone.";
echo $$a;
$a="waqas";
$b="shahbaz";
$c="moeez";
$arr=array('a','b','c');
foreach($arr as $array){
	echo $$array."<br/>";
	
}


//for fibnacci series
$first=0;
$second=1;
$count=50;
for($i=0;$i<=$count;$i++)
{
	$sum=$first+$second;
	$first=$second;
	$second=$sum;
	echo $sum."<br>";
}

//function for sort an array
$array=array('2','4','8','5','1','7','6','9','10','3');

for($j=0;$j<=count($array);$j++)
{
	for($i=0;$i<=count($array)-1;$i++)
		{
			if($array[$i]>$array[$i+1])
			{
				$temp=$array[$i+1];
				$array[$i+1]=$array[$i];
				$array[$i]=$temp;
				
			}
		}
}
		print_r($array);
		

//for print asterick
for($i=1;$i<=5;$i++){
        for($j=1;$j<=$i;$j++){
                    echo "*";
        }
        echo "<br />";
    }
//for paramid asterik
$n = 5;
$i = 0;

for($i=1; $i<=$n; $i++){

    echo "<pre>";   
    echo str_repeat("&nbsp;", $n-$i);
    echo str_repeat("*&nbsp;", $i);
}
?>
</body>
</html>