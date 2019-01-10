<?php
use yii\helpers\Html;

 $this->beginPage(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>KUK</title>
        <?php $this->head(); ?>
    </head>
    <body>
        <?php $this->beginBody(); ?>
        <h1>KUK</h1>
        <div class="container" style="margin-top: 80px">
            <?=$content ?>
        </div>
        <br/>
        <?= (Yii::$app->language == 'en') ? 'English' :
        Html::a( 'English', '/web/en') ?> |
        <?= (Yii::$app->language == 'lv') ? 'Latviešu' :
        Html::a( 'Latviešu', '/web/lv') ?>
        <?php $this->endBody(); ?>
    </body>
</html>
<?php $this->endPage(); ?>


