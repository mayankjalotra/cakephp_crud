<?php
class User extends AppModel{
	
	var $name ='User';
	public $validate = array(
			
			'first_name' => array(
					'rule' => 'notEmpty'
			),
			'last_name' => array(
					'rule' => ''
			),
			'username' => array(
					'rule' => 'notEmpty'
			),
			'password' => array(
					'rule' => 'notEmpty'
			),
			'phone_no' => array(
					'rule' => ''
			),
			'accounts' => array(
					'rule' => ''
			),
			'notes' => array(
					'rule' => ''
			)

	);
}