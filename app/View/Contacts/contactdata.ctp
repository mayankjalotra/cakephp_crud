<h2>View all Contacts</h2>
<table>
	<tr>
		<th>PHONE NUMBER</th>
		<th>NAME</th>
		<th>ADDRESS</th>
	</tr>
	
	<?php foreach($contacts as $user):?>
	<tr>
		<td><?php echo $user['Contact']['phone_num']; ?> </td>
		<td><?php echo $user['Contact']['name']; ?></td>
		<td><?php echo $user['Contact']['address']; ?></td>
	</tr>
	
	<?php endforeach; ?>
</table>