<!DOCTYPE HTML>
<html>
	<head>
		<title>Studi Kasus 1</title>
	</head>

	<body>
		
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Pasaran
		<select name="hari">
			<option value="Kliwon">Kliwon
			<option value="Legi">Legi
			<option value="Pahing">Pahing
			<option value="Pon">Pon
			<option value="Wage"Selected>Wage
			
		</select> <br />
		
		<input type="submit" value="OK" />
		</form>
		
		<?php
			if (isset($_POST['hari'])) {
				echo $_POST['hari'];
			}
		?>
		
	</body>
</html>