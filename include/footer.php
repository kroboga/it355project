		<footer>
			<p class="pull-right"><a href="#">Back to top</a></p>
			<p>&copy; 2014 V-HUb, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
		</footer>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<?php
			if (!is_null($page))
			{
				echo "<script>$('#menu".$page."').addClass('active')</script>";
			}
		?>
	</body>
</html>
