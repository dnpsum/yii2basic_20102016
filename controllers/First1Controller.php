<?php

namespace app\controllers;

class First1Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $title = 'ระบบรายงาน 1';
        
        $person = [
            ['fname' => 'สมชาย', 'lname' => 'ใจดี', 'email' => 'som@hotmail.com'],
            ['fname' => 'สมหญิง', 'lname' => 'ใจงาม', 'email' => 'ying@hotmail.com'],
            ['fname' => 'ดนพล', 'lname' => 'สำราญพงษ์', 'email' => 'danapon@hotmail.com']
        ];
        
        return $this->render('index',['title'=>$title, 
            'ps'=>$person]);
    }

}
