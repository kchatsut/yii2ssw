<?php
//print_r($contact);

use yii\grid\GridView;

echo GridView::widget([
   'dataProvider'=>$contact,
    'options'=>['class'=>'table-responsive','id'=>'mytable'] //กำหนด class แบบ boostrab แบบ ที่ 1
]);
?>
