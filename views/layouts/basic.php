<?php
use app\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\ActiveForm;
AppAsset::register($this);

$this->title = 'Main';
?>
<?php $this->beginPage() ?>
    <!doctype html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $this->title ?></title>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
<?php $form = ActiveForm::begin(['options' => ['id' => 'UserForm']]) ?>
    <div class="wrap">
        <div class="container">
            <?php
            NavBar::begin([
                'brandLabel' => 'TestWork',
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);

            echo Nav::widget(
                [
                    'options' => ['class' => 'navbar-nav navbar-right'],
                    'items' => [
                        ['label' => 'Пользователи', 'url' => ['user/update']]
                    ]
                ]
            );
            NavBar::end();
            ?>
            <?= $content ?>
<?php ActiveForm::end() ?>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>