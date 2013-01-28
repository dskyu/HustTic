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
			array('tel,qq','numerical','integerOnly'=>true),
			array('email', 'email'),
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
			array('password_confirm','compare','compareAttribute'=>'password','message'=>'两次输入的密码不一样'),
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
			'username'=>'用户名',
			'password'=>'密码',
			'password_confirm'=>'密码确认',
			'email'=>'邮箱',
			'nickname'=>'昵称',
			'birthday'=>'生日',
			'tel'=>'电话',
			'qq'=>'QQ',
			'sex'=>'性别',
			'verifyCode'=>'验证码',
		);
	}
}