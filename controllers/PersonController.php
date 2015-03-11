<?php
namespace app\controllers;
use \yii\web\Controller;  // path ของ controller เพื่อจะได้ย่อโดยไม่ต้องใส่เต็มๆๆ
use app\models\PersonForm;
use yii;


//ชื่อ class ตามด้วย controller
class PersonController extends Controller{
    public function actionTest(){
        // action ที่ render 
        //$name = $this->getName();
        $name ="<br/>   เกรียงไกร ชาติสุทธิ์ <br/>";
        $hosname =" โรงพยาบาลศรีสังวรสุโขทัย";
        return $this->render('test',['myname'=>$name,'myhp'=>$hosname]);
        
    }
    public function actionPerson(){
        $model = new PersonForm;
        
        if($model->load(Yii::$app->request->post())){
            $value =$_POST['PersonForm'];
        }else{
            $value = null;
        }
        
        return $this->render('person',['model'=>$model,'value'=>$value]);
      
    }
      

        // function รับค่า
    public function getName(){
        $name = "เกรียงไกร ชาติสุทธิ์";
        return $name;
    }
}
