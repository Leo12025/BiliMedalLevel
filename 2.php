<?php
header("Content-type:text/html;charset=utf-8");

  echo '<link rel="stylesheet" href="medal.css"/>';
  for ($x=1; $x<=20; $x++) {
echo '<div class="fans-medal-item level-'.$x.'">';
echo '<span class="label">萌动</span>';
echo '<span class="level">'.$x.'</span></div> ';
if($x%4==0){echo '<br/>';}
} 

?>