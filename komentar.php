<form method="post">
	<tr>
		<td>Komentar </td>
		<td>:</td>
		<td><input type="text" name="komen"></td>
	</tr>
	<tr>
		<td><input type="submit" name="kirim"></td>
	</tr>
</form>

<?php

if (isset($_POST['kirim'])) {
	$komen = $_POST['komen'];
	if (str_word_count($komen)>=5) {
		echo $komen;
		# code...
	}elseif (str_word_count($komen)<5) {
		echo "Salah";
		# code...
	}
	# code...
}

?>
