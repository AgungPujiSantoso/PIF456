<!DOCTYPE HTML>
<html>
	<head>
		<title>Studi Kasus 2</title>
	</head>

	<body>
		
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
		Hobi
			<input type="checkbox" name="makanan[]" value="Soto"
			/>Soto
			
			<input type="checkbox" name="makanan[]" value="Nasgor"
			/>Nasgor
			
			<input type="checkbox" name="makanan[]" value="Rawon"Checked
			/>Rawon
			
			<input type="checkbox" name="makanan[]" value="Pecel"
			/>Pecel <br />
			
			<input type="submit" value="OK" />
		</form>
		
		<?php
		//Ekstraksi Nilai
		if (isset($_POST['makanan'])){
			foreach ($_POST['makanan'] as $key => $val){
				echo $key . ' -> ' .$val . '<br />';
			}
		}
		?>

	</body>
</html>