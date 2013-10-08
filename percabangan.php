<HTML>
	<HEAD>
		<TITLE>Percabangan</TITLE>
	</HEAD>
	
	<BODY>
		<?php
			$makan = 'sarapan';
			
			print "<h1> $makan <BR><BR>";
			
			switch ($makan)
			{
				case 'sarapan':
					echo "Nasi Pecel";
				break;
				case 'maksi';
					echo "Rawon Nguling";
				break;
				case 'dinner';
					echo "Nasi Goreng";
				break;
				default:
					echo "Puasa";
				break;
			}
		?>
	</BODY>
</HTML>