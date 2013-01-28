<?php

class RegisterForm extends CFormModel
{
	public $username;
	public $password;
	public $password_confirm;
	public $nickname;
	public $email;
	public $birthday;
	public $sex;
	public $tel;
	public $qq;
	public $verifyCode;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
		//	array('username, password, password_confirm','required'),
			array('username, email, password, password_confirm, nickname,birthday,tel,qq', 'required'),
			array('username, password, nickname','length','min'=>6),
			array('username, password, nickname','length','max'=>20),
			array('password_confirm','compare','compareAttribute'=>'password'),
			array('tel,qq','numerical','integerOnly'=>true),
			array('email', 'email'),
			// verifyCode needs to be entered correctly
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			'verifyCode'=>'Verification Code',
		);
	}
}