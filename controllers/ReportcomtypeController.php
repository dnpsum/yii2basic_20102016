<?php

namespace app\controllers;

class ReportcomtypeController extends \yii\web\Controller
{
    public function actionIndex()
    {
        //////
        // 
        // ดึง connecttion
        $conn =\Yii::$app->db;
        $sql = 'SELECT * FROM com_type';
        // query
        $cmd = $conn->createCommand($sql);
        // ดึง query ทั้งหมด
        $data = $cmd->queryAll();
        
//        print_r($data);
//        die();
        
        
        
        return $this->render('index',['data'=>$data]);
    }

}
