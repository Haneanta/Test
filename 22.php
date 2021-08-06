<?php
$text = ($_POST['text']);
$arra =  str_split($text);
$cou=count($arra);
$modal=0;
for ($i = 0; $i < $cou; $i++) {
    if ($arra [$i] == '(') 
         {
        $modal++;
         }
    if ($arra [$i] == ')')
         {
     $modal--;
         }
    }
if ($modal==0){
  echo ("Equation is true");
    }
if ($modal<0 || $modal>0){
    echo ("Equation is not true");
    }

?>