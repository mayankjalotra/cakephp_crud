<h2>View all Accounts</h2>
<table>
	<tr>
		<th>ACCOUNT NUMBER</th>
		<th>ACCOUNT NAME</th>
		<th>ACCOUNT HOLDER</th>
	</tr>
	
	<?php foreach($accounts as $user):?>
	<tr>
		<td><?php echo $user['Account']['acc_number']; ?> </td>
		<td><?php echo $user['Account']['name']; ?></td>
		<td><?php echo $user['Account']['acc_holder']; ?></td>
	</tr>
	
	<?php endforeach; ?>
</table>