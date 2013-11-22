<?php
class AccountsController extends AppController{

	var $name='Accounts';

	function accountdata()
	{
		$this-> set('accounts', $this->Account->find('all'));
	}
}