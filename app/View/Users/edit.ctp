<h2>Edit User</h2>
<?php
echo $this->Form->create('User');
echo $this->Form->input('first_name');
echo $this->Form->input('last_name');
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->input('phone_no');
echo $this->Form->input('accounts');
echo $this->Form->input('notes', array('rows' => '2'));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Changes');
echo $this->Html->link('Cancel',array('controller' => 'users', 'action' => 'userdata')); ?>