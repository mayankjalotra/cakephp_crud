<h2>Add User</h2>
<?php
echo $this->Html->link('Add Attachment',array('controller' => 'users', 'action' => 'attachm'));
echo $this->Form->create('User');
echo $this->Form->input('first_name');
echo $this->Form->input('last_name');
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->input('phone_no');
echo $this->Form->input('accounts');
echo $this->Form->input('notes', array('rows' => '2'));
echo $this->Form->end('Save User');
echo $this->Html->link('Cancel',array('controller' => 'users', 'action' => 'userdata'));  ?>