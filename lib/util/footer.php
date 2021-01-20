</main>
<footer class="bg-primary">
	<div class="container text-light text-center">
		<p class="copyright py-4">Maternal-Child Specialists' Clinics&copy; 2021</p>
	</div>
</footer>
<?php
foreach ($scripts as $script) {
	echo "<script src='/assets/custom/$script'></script>\n";
}
?>
</html>