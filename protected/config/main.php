<?php

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	 
	// preloading 'log' component
	'preload'=>array('log'),
	
	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),
	
	'defaultController'=>'Site',
	
	'modules'=>array(
		'gii'=>array(  
			'class'=>'system.gii.GiiModule',
			'password'=>'111111',  
             //ipFilters用于所在服务器不在本机的情况需开启  
          // 'ipFilters'=>array('192.168.1.10','::1'),
          ),
		'manage'=>array(
         ),
         
	),
	
	'components'=>array(
		'urlManager'=>array(
			'showScriptName'=>false,
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		
		'errorHandler'=>array(
			'errorAction'=>'error/error'
		),
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=husttic',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '111111',
			'charset' => 'utf8',
			'tablePrefix' => 'tic_',
		),
		
        'log'=>array(
            'class'=>'CLogRouter',
            'routes'=>array(
                array(
                    'class'=>'CWebLogRoute',
                ),
            ),
        ),
    ),
	
	
    // application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>require(dirname(__FILE__).'/params.php'),
);