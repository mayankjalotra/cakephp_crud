<?php
class AttachmentsController extends AppController{
	var $name = 'Attachments';
	
	function attachmentdata(){
		$this->set('attachments',$this->Attachment->find('all'));
	}
}