<?php

class UsersController extends AppController{
	
	var $name='Users';
	
	function userdata()
	{
		$this-> set('users', $this->User->find('all'));
	}
	
	function hello_world()
	{
		
	}
	function view($id=NULL){
		if (!$id) {
			throw new NotFoundException(__('Invalid User'));
		}
		
		$user = $this->User->findById($id);
		if (!$user) {
			throw new NotFoundException(__('Invalid User'));
		}
		$this->set('user', $user);
	}
		
	public function add(){
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'userdata'));
			}
			$this->Session->setFlash(__('Unable to add the user.'));
		}
	}
	

	public function edit($id){
		if (!$id) {
			throw new NotFoundException(__('Invalid User'));
		}
		
		$user = $this->User->findById($id);
		if (!$user) {
			throw new NotFoundException(__('Invalid User'));
		}
		
		if ($this->request->is(array('post', 'put'))) {
			$this->User->id=$id;
		    if(empty($this->data)){
		    	$this->data=$this->User->read(Null,$id);
		    }
		    else{
				if ($this->User->save($this->request->data)) {
					$this->Session->setFlash(__('The user has been updated.'));
					return $this->redirect(array('action' => 'userdata'));
				}
				$this->Session->setFlash(__('Unable to edit user.'));
		    }	
		if (!$this->request->data) {
			$this->request->data = $post;
			}
		}
		
	}
	
	
	public function delete($id) {
	    if ($this->request->is('get')) {
	        throw new MethodNotAllowedException();
	    }
	
	    if ($this->User->delete($id)) {
	        $this->Session->setFlash(__('The post with id: %s has been deleted.', h($id)));
	        return $this->redirect(array('action' => 'userdata'));
	    }
	}
	
	public function attachm(){
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'userdata'));
			}
			$this->Session->setFlash(__('Unable to add the user.'));
		}
	}
	
}

