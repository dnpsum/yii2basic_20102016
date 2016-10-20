<?php

namespace app\controllers;

class ReportcomserviceController extends \yii\web\Controller
{
    public function actionIndex()
    {
        //////
        // 
        // ดึง connecttion
        $conn =\Yii::$app->db;
        $sql = 'SELECT c.brand, s.* FROM com_service s LEFT JOIN com c ON c.com_id=s.com_id';
        // query
        $cmd = $conn->createCommand($sql);
        // ดึง query ทั้งหมด
        $data = $cmd->queryAll();
        
//        print_r($data);
//        die();
        
        return $this->render('index',['data'=>$data]);
    }

}
