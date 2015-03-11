<?php
namespace app\controllers;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use app\models\Contact;

class WidgetsController extends Controller{
    
    public function actionGrid(){
        $dataProvider = new ActiveDataProvider([
            'query' => contact::find(),
        ]);
        return $this->render('grid',['dataProvider'=>$dataProvider]);
        
    }
    
    public function actionList(){
        $dataProvider = new ActiveDataProvider([
            'query' => contact::find(),
            'pagination'=>['pageSize'=>3 //ให้แสดง.....แต่ละหน้ามีกี่บรรทัด
                
                ]
        ]);
        return $this->render('list',['dataProvider'=>$dataProvider]);
    }
    
    public function actionDetail($id){
        $model = contact::findOne($id);
        return $this->render('detail',['model'=>$model]);
    }
}