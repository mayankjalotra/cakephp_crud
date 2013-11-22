<h2>View all Users</h2>


<?php echo $this->Html->link(
    'Add User',
    array('controller' => 'users', 'action' => 'add')
); ?>

<table>
	<tr>
		<th>FIRST NAME</th>
		<th>Accounts</th>
		<th>Phone No.</th>
		<th>Attachment</th>
	    <th>Notes</th>
	    <th>Action</th>
	</tr>
	
	<?php foreach($users as $user):?>
	<tr>
		<td><?php echo $this->Html->link($user['User']['first_name'],
		array('controller' => 'users','action'=>'view',$user['User']['id'])); ?> </td>
		<td><?php echo $user['User']['accounts'] ;?></td>
		<td><?php echo $user['User']['phone_no'];?></td>
		<td><?php echo $user['User']['attachments'];?></td>
		<td><?php echo $user['User']['notes'];?></td>
		<td><?php echo $this->Html->link('Edit', 
		array('controller' => 'users','action'=>'edit',$user['User']['id'])); ?></td>
		<td>
            <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $user['User']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
        </td>
	</tr>
	
	<?php endforeach; ?>
</table>