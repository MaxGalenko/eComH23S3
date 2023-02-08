<?php $this->view('shared/header', 'List of clients'); ?>

<a href="/Client/create">Create a new client</a>
<table>
	<tr><th>First name</th><th>Last name</th><th>Middle name</th><th>actions</th></tr>
<?php
// assume that data is an array of client objects
foreach ($data as $client) { ?>
	<tr><td><?= htmlentities($client->first_name) ?></td>
		<td><?= htmlentities($client->last_name) ?></td>
		<td><?= htmlentities($client->middle_name) ?></td>
		<td><a href='/Client/delete/<?=$client->client_id?>'>delete</a></td></tr>
<?php	
}
?>
</table>

<?php $this->view('shared/footer'); ?>