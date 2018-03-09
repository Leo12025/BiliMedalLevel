<?php
header("Content-type:text/html;charset=utf-8");
$level1=getmedal(21);
echo '<link rel="stylesheet" href="medal.css"/>';
echo '<div class="fans-medal-item level-'.$level1['level'].'">';
echo '<span class="label">'.$level1['name'].'</span>';
echo '<span class="level">'.$level1['level'].'</span></div>';
   
function getmedal($fans){
	/*
	 * 首先不推荐引用b站的数据，因为拉取数据需要二次判断，此处可以选择新增自定义字段获取数据
	 * 
	 * 默认的则遵循此处name
	 */
        $level = [
            0 => ['max' => 1000, 'min' => 0, 'name' => '新手', 'level' => 1],
            1 => ['max' => 10000, 'min' => 1000, 'name' => '小将', 'level' => 2],
            2 => ['max' => 20000, 'min' => 10000, 'name' => '中将', 'level' => 3],
            3 => ['max' => 50000, 'min' => 20000, 'name' => '上将', 'level' => 4],
            4 => ['max' => 100000, 'min' => 50000, 'name' => '大将', 'level' => 5],
            5 => ['max' => 999999999, 'min' => 100000, 'name' => '将军', 'level' => 6],
        ];
        foreach ($level as $value) {
            if (($fans >= $value['min']) && ($fans < $value['max'])) {
                return $value;
            }
        }
	}
?>