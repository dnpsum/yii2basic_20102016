<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div>
        <img src="<?=  Yii::getAlias('@web')?>/img/header.png" class="img-responsive" alt="header" > <!-- ใส่รูป header -->
    </div>
    <?php
    NavBar::begin([
        'brandLabel' => '<span class="glyphicon glyphicon-th-large"></span> ศูนย์อนามัยที่ 2',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse', //navbar-fixed-top
        ],
    ]);
    
    $setting = [
        ['label' => '<span class="glyphicon glyphicon-list"></span> สถานะคอมพิวเตอร์', 'url' => ['/comstatus']],
        ['label' => '<span class="glyphicon glyphicon-list"></span> ประเภทคอมพิวเตอร์', 'url' => ['/comtype']],
    ];
    
    $regist = [
        ['label' => '<span class="glyphicon glyphicon-list"></span> ทะเบียนคอมพิวเตอร์', 'url' => ['/com']],
    ];
    
    $report = [
        ['label' => '<span class="glyphicon glyphicon-list"></span> รายงานประเภทคอม', 'url' => ['/reportcomtype']],
        ['label' => '<span class="glyphicon glyphicon-list"></span> รายงานปัญหาคอม', 'url' => ['/reportcomservice']],
    ];
    
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        
        'encodeLabels' => false, //เอาไว้ใส่ icon glyphicon
        'items' => [
            ['label' => '<span class="glyphicon glyphicon-home"></span> หน้าแรก', 'url' => ['/site/index']],
            ['label' => '<span class="glyphicon glyphicon-map-marker"></span> ลงทะเบียน', 'items' => $regist],
            ['label' => '<span class="glyphicon glyphicon-book"></span> รายงาน', 'items' => $report],
            ['label' => '<span class="glyphicon glyphicon-map-marker"></span> ทดสอบ', 'url' => ['/first1/index']],
            ['label' => '<span class="glyphicon glyphicon-map-marker"></span> ตั้งค่าระบบ', 'items' => $setting],
            Yii::$app->user->isGuest ? (
                ['label' => '<span class="glyphicon glyphicon-thumbs-up"></span> เข้าระบบ', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
