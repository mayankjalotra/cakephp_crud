<h2>Welcome to My Model View Controller Example</h2>
<table>
	<tr>
		<th>Go To...</th>
	</tr>
	
	<?php foreach($dashboards as $user):?>
	<tr>
		<td><?php echo $user['Dashboard']['name']; ?></td>
	</tr>
	
	<?php endforeach; ?>
</table>