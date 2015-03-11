<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Contact;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii;
use \yii\data\ArrayDataProvider;

class QueryController extends Controller{
    public function actionQuery1(){
        $data= Contact::find() 
                ->where('id>2') //ใส่เงื่อนไขในการดึงข้อมูล
                ->orderBy('firstname','lastname');
        $dataProvider = new ActiveDataProvider([
            'query'=>$data,            
        ]);
        return $this->render('query1',
                ['dataProvider'=>$dataProvider]);
    }
    
    // ดึงข้อมูบ
    public function actionQuery2(){
        $query = new Query;
        $query->select('*')
              ->from('contact')
              ->all();
        $dataProvider = new ActiveDataProvider([
            'query'=>$query,
        ]);
        ///// ทำการแสดงข้อมูลที่ต้องการเลือกเฉพาะชื่อและสกุล เท่า เปลียนตรง Select เท่านั้น
        $query1 = new Query;
        $query1->select('firstname,lastname')
              ->from('contact')
              ->all();
        $dataProvider1 = new ActiveDataProvider([
            'query'=>$query1,
        ]);
        return $this->render('query2',
            ['dataProvider'=>$dataProvider,'dataProvider1'=>$dataProvider1]);

    }
// Query SQL Connection ตรงๆ และนำไปลงใน gridViwe อ.ยังไม่ได้สอน โดยใช้ Query มาวางได้เลย
    public function actionQuery3(){
           $connection = yii::$app->db;
           $contact = $connection->createCommand('select id,firstname,lastname from contact') // where id=2')
                   ->queryAll();
           $dataProvider= new ArrayDataProvider([
               'allModels'=>$contact,
               'pagination'=>['pageSize'=>2
                   ]
           ]);
          return $this->render('query3',['contact'=>$dataProvider]);
    }
    
}