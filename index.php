<?php

$config=dirname(__FILE__).'/protected/config/main.php';
require_once(dirname(__FILE__).'/../yii/framework/yii.php');

// create a Web application instance and run
Yii::createWebApplication($config)->run();