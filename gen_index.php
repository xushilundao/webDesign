<?php
//php如何将数组元素在html标签内输出

header("Content-type:text/html;charset=utf-8");
$arr=array("Volvo","BMW","Toyota");
foreach ($arr as $k=>$v){
echo '<p>'.$v.'</p >';
}
?>
