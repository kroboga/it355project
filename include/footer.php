		<div class="container">
			<footer>
				<p class="pull-right"><a href="#">Back to top</a></p>
				<p>&copy; 2014 V-HUb, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
			</footer>
		</div>
		<?php
			if (!is_null($page))
			{
				echo "<script>$('#menu".$page."').addClass('active')</script>";
			}
		?>

	</body>
</html>
