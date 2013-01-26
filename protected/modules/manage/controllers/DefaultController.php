<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
		print_r(Yii::app()->user);
		$this->render('index');
	}
	
}