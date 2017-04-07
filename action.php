
<html>
<body>

<?php
include 'logic.php';
 if (isset($_POST['btnSingleUnicorn'])){
	$data = getUnicorn($_POST["id"]);
	foreach($data as $value){
	echo $value; ?> <br> <?php
	}
}
else if(isset($_POST['btnAllUnicorn'])){
	$data = getAllUnicorn();
	foreach($data as $value){
	echo $value->name;  ?> <br> <?php
	}
echo $data;
}
?>
</body>
</html>
