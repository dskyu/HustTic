<?php

class SiteController extends Controller
{
	public function actionIndex()
	{
		$this->render(index);
	}
	
	public function actionLogin()
	{
		$this->render(index);
		
	}
	
}