<html>

<head>
<title>Menciptakan Database</title>
</head>
<body>
<?php
require "koneksi.php";
echo '<br/>';
$res = mysql_query("CREATE TABLE pemain (
nomor VARCHAR(12) NOT NULL,
nama VARCHAR(40) NOT NULL,
posisi VARCHAR(100),
PRIMARY KEY(nomor))");
if($res) {
echo '<br/>';
echo 'Tabel Dibuat';
} else {
echo mysql_error();
}
?>

</body>
</html>