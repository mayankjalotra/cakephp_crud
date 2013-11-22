<?php
class NotesController extends AppController{

	var $name='Notes';

	function notedata()
	{
		$this->set('notes',$this->Note->find('all'));
	}
}