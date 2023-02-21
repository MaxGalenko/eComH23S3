<?php $this->view('shared/header','Create a new client record'); ?>

<form method="post" action="">
	<label>First name:</label><input type="text" name="first_name"><br>
	<label>Last name:</label><input type="text" name="last_name"><br>
	<label>Middle name:</label><input type="text" name="middle_name"><br>
	<input type="submit" name="action" value='Create'>
	<a href="/Client/index">Cancel</a>
</form>

<?php $this->view('shared/footer'); ?>