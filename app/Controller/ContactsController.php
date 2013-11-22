<?php
class ContactsController extends AppController{
	var $name='Contacts';
	
	function contactdata(){
		$this->set('contacts',$this->Contact->find('all'));
	}
}