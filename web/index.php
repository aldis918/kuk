<?php
define ('YII_DEBUG', true);//Izvadam kļūdu paziņojumus
require (__DIR__ . '/../vendor/autoload.php');//Pārbaudām vai ir klase, ja nav tad tā tiek ielādēta
require (__DIR__ . '/../vendor/yiisoft/yii2/yii.php');//Pats galvenais Yii2 modulis
$config = require (__DIR__ . '/../config/web.php');//Konfigurators
$app = new yii\web\Application($config);//Apl. ar šo konfigurāciju
$app -> run();//palaižam apl.
?>