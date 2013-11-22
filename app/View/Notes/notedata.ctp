<h2>View all Notes</h2>
<table>
	<tr>
		<th>NAME</th>
		<th>ABOUT</th>
	</tr>
	
	<?php foreach($notes as $user):?>
	<tr>
		<td><?php echo $user['Note']['name']; ?> </td>
		<td><?php echo $user['Note']['about']; ?></td>
	</tr>
	
	<?php endforeach; ?>
</table>