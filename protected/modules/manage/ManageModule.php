<?php

class ManageModule extends CWebModule
{
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'manage.models.*',
			'manage.components.*',
		));
		Yii::app()->user->loginUrl = Yii::app()->homeUrl.'manage/user/login';
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			$controller->layout='application.modules.manage.views.layouts.main';
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}
}
