<?php
$preg = "/\w+@\w+\.\w+/";

preg_match($preg, '321@qq.com',$arr);

var_dump($arr);

//正则匹配mysql关键字








//九九乘法表
for ($i=1; $i <=9 ; $i++) { 
	for ($j=1; $j <=$i ; $j++) { 
		echo $i.'*'.$j;
	}
	echo "<br>";
}



//交换值
$a = 1;
$b =2;
$c =$a;
$a = $b;
$b =$c;
echo $a.'和'.$b;

//1-99之间随机取10个数，求十个数中偶数的和



//
?>