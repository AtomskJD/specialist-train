<pre>
<?php
	if($_FILES['file']['error'] == 0){
		$tmp = $_FILES['file']['tmp_name'];
		$name = "uploads/" . $_FILES['file']['name'];
		move_uploaded_file($tmp, $name);
	}
?>
</pre>
<form action="<?=$_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
	<input type="file" name="file">
	<input type="submit">
</forn>