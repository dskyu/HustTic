<?php

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'HustTic官网',
	 
	// preloading 'log' component
	'preload'=>array('log'),
	
	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),
	
	'defaultController'=>'Site',
	
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
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=husttic',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '111111',
			'charset' => 'utf8',
			'tablePrefix' => '',
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