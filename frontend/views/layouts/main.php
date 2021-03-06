<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

Yii::$app->name="goodoper";
$this->title = "goodoper";

AppAsset::register($this);
$this->registerCss('
     body{
                font-family: "Cloud-Light";
                font-size: 16px;
            }
     ul.service-item{
       list-style-type: none;
       text-align: center;
       display: inline-table;
     }
     ul.service-item >li{
        float: left;
        font-size: 18px;
        padding-left: 5px;
        padding-right: 5px;
        width: 33%;
     }
     .about-text {
        text-align: center;
        background-color: #c7ddef;
        padding-top : 20px;
        padding-bottom: 100px;
    }
    .good-contact{
        margin-bottom: 20px;
    }
    #myBtn {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 30px;
      z-index: 99;
      font-size: 18px;
      border: none;
      outline: none;
      background-color: #2aabd2;
      color: white;
      cursor: pointer;
      padding: 15px;
      border-radius: 4px;
    }

    #myBtn:hover {
        background-color: #555;
    }
    
    .navbar-brand{
      color: #1b6d85;
      font-weight: bold;
      font-size: 26px;
    }
    #nav-home,#nav-service,#nav-port,#nav-about,#nav-contact,#nav-product{
      color: #000000;
      font-size: 18px;
    }
    .nav-menu{
      color: #000000;
    }

');

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" type="image/ico" href="logo2.ico" />
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        //'brandLabel' => Yii::$app->name,
        'brandLabel' => "<image src='../web/images/1.png' style='width: 60%;margin-top: -5px;'></image>",
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'nav navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'หน้าแรก', 'options'=>['id'=>'nav-home','style'=>'color: #000;font-weight: bold']],
        ['label' => 'บริการ', 'options'=>['id'=>'nav-service','href'=>'#good-service','style'=>'color: #000;font-weight: bold']],
        ['label' => 'สินค้า', 'options'=>['id'=>'nav-product','href'=>'#good-product','style'=>'color: #000;font-weight: bold']],
        ['label' => 'ผลงาน', 'options'=>['id'=>'nav-port','href'=>'#good-port','style'=>'color: #000;font-weight: bold']],
        ['label' => 'เกี่ยวกับเรา', 'options'=>['id'=>'nav-about','href'=>'#good-about','style'=>'color: #000;font-weight: bold']],
        ['label' => 'ติดต่อเรา','options'=>['id'=>'nav-contact','href'=>'#good-contact','style'=>'color: #000;font-weight: bold']],
    ];
    if (Yii::$app->user->isGuest) {
      //  $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
      //  $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right nav-menu'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

<!--    <div class="container">-->
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
<!--    </div>-->
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?php //echo Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
