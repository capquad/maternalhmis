<?php
// Initialize all settings, config, database, security and authorization
require '../units/header.php';
?>
<div class="container py-5">
	<a class="btn btn-primary" href="patients.php">View Patients</a>
	<a class="btn btn-dark" href="addpatient.php">Add Patient</a>
	<a class="btn btn-danger" href="patientdata.php">Download Patient Data</a>
</div>
<?php
require '../lib/util/footer.php';
