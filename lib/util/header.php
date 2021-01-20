<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/assets/fa/css/all.min.css">
	<link rel="stylesheet" href="/assets/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/datatables/datatables.min.css">
	<link rel="stylesheet" href="/assets/datatables/Buttons-1.6.5/css/buttons.bootstrap.min.css">
	<link rel="stylesheet" href="/assets/custom/style.css">
	<title>HMIS | <?= $user['name'] ?></title>

	<script src="/assets/jquery/dist/jquery.min.js"></script>
	<script src="/assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="/assets/datatables/datatables.min.js"></script>
	<script src="/assets/datatables/Buttons-1.6.5/js/buttons.bootstrap4.min.js"></script>
	<script src="/assets/datatables/Buttons-1.6.5/js/dataTables.buttons.min.js"></script>
</head>

<body>
	<aside id='main-aside'>
		<div>
			<div class="profile-section">
				<a href="/profile.php" class="profile-img"><img src="/image/avatar1.png" alt=""></a>
				<p class="profile-name"><?= $user['name'] ?></p>
				<p class="profile-office"><?= $user['designation'] ?></p>
			</div>
			<ul class="aside-links">
				<li class="aside-item"><a href='/<?= strtolower($user['officeid']) ?>'>Dashboard</a></li>
				<?= createAside(ASIDE[$user['officeid']]) ?>
				<li class="aside-item"><a href="/logout.php">Log Out</a></li>
			</ul>
		</div>
	</aside>
	<main>