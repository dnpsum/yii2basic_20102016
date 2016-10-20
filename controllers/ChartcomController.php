<?php

namespace app\controllers;

class ChartcomController extends \yii\web\Controller
{
    public function actionIndex()
    {
         //////
        // 
        // ดึง connecttion
        $conn =\Yii::$app->db;
        $sql = 'SELECT t.com_type_name, COUNT(com_id) as cdata FROM com c  
            LEFT JOIN com_type t ON t.com_type_id=c.com_type_id 
            GROUP BY c.com_type_id';
        // query
        $cmd = $conn->createCommand($sql);
        // ดึง query ทั้งหมด
        $data = $cmd->queryAll();
        
        foreach ($data as $item) {
            $chart[]=['name'=>$item['com_type_name'],'data'=>[intval($item['cdata'])]];
        }
        
//        print_r($data);
//        die();
        
        return $this->render('index',['chart'=>$chart]);
    }

}
