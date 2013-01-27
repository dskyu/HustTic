<?php

/**
 * This is the model class for table "{{user}}".
 *
 * The followings are the available columns in table '{{user}}':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $nickname
 * @property integer $level
 * @property string $description
 * @property integer $group_id
 * @property string $birthday
 * @property integer $sex
 * @property string $otherskill
 * @property string $thumbnail_url
 * @property string $ori_url
 * @property string $hobby
 * @property string $weibo
 * @property string $renren
 * @property string $qq
 * @property string $tel
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, nickname, group_id, birthday, sex, tel', 'required'),
			array('level, group_id, sex', 'numerical', 'integerOnly'=>true),
			array('username, password, nickname, otherskill, thumbnail_url, ori_url, hobby, weibo, renren, qq, tel', 'length', 'max'=>255),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, nickname, level, description, group_id, birthday, sex, otherskill, thumbnail_url, ori_url, hobby, weibo, renren, qq, tel', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'nickname' => 'Nickname',
			'level' => 'Level',
			'description' => 'Description',
			'group_id' => 'Group',
			'birthday' => 'Birthday',
			'sex' => 'Sex',
			'otherskill' => 'Otherskill',
			'thumbnail_url' => 'Thumbnail Url',
			'ori_url' => 'Ori Url',
			'hobby' => 'Hobby',
			'weibo' => 'Weibo',
			'renren' => 'Renren',
			'qq' => 'Qq',
			'tel' => 'Tel',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('nickname',$this->nickname,true);
		$criteria->compare('level',$this->level);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('group_id',$this->group_id);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('sex',$this->sex);
		$criteria->compare('otherskill',$this->otherskill,true);
		$criteria->compare('thumbnail_url',$this->thumbnail_url,true);
		$criteria->compare('ori_url',$this->ori_url,true);
		$criteria->compare('hobby',$this->hobby,true);
		$criteria->compare('weibo',$this->weibo,true);
		$criteria->compare('renren',$this->renren,true);
		$criteria->compare('qq',$this->qq,true);
		$criteria->compare('tel',$this->tel,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}