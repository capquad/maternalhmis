<?php
// Initialize all settings, config, database, security and authorization
require '../units/header.php';
$scripts = ['patients.js'];
?>

<div class="container">
	<h2 class="my-5">Patients</h2>
	<table id="patients_table" class="display">
		<thead>
			<tr>
				<th></th>
				<th>Name</th>
				<th>Name</th>
				<th>Name</th>
				<th>Name</th>
			</tr>
		</thead>
		<tbody></tbody>
	</table>
</div>

<?php
require '../lib/util/footer.php';