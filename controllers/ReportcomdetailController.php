<?php

namespace app\controllers;

class ReportcomdetailController extends \yii\web\Controller
{
    public function actionIndex($id)
    {
        //////
        // 
        // ดึง connecttion
        $conn =\Yii::$app->db;
        $sql = 'SELECT * FROM com WHERE com_type_id=:id';  
        
        // query
        $cmd = $conn->createCommand($sql);
        
        // ใส่ค่าให้กับ parameter ข้อดีเพื่อป้องกัน sql injection
        $cmd->bindValue(':id',$id);
        
        // ดึง query ทั้งหมด
        $data = $cmd->queryAll();
        
//        print_r($data);
//        die();
        
        
        
        return $this->render('index',['data'=>$data]);
    }

}
