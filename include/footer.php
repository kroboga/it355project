		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<?php
			if (!is_null($page))
			{
				echo "<script>$('#menu".$page."').addClass('active')</script>"
			}
		?>
	</body>
</html>
