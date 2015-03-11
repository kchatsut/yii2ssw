
<?php
use yii\grid\GridView;
use yii\widgets\Pjax;

Pjax::begin();  //ใช้ Pjax ครอบ เพื่อให้เร็วขึ้น ๆ  จริงๆๆ ไหม ต้องทดสอบ
echo GridView::widget([
   'dataProvider'=>$dataProvider,
    'options'=>['class'=>'table-responsive','id'=>'mytable'] //กำหนด class แบบ boostrab แบบ ที่ 1
]);
Pjax::end();
Pjax::begin();
echo GridView::widget([
   'dataProvider'=>$dataProvider1,
    'options'=>['class'=>'table-responsive','id'=>'yourtable'] //กำหนด class แบบ boostrab แบบ ที่ 2
]);
Pjax::end();
?>
