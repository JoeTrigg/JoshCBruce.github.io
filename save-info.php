<?php
if (isset($_POST['data'])) {
	$data = $_POST['data'];
	$filename = date('Y-m-d_H-i-s') . '.txt';
	$file = fopen('logs/' . $filename, 'w');
	fwrite($file, $data);
	fclose($file);
}
?>
