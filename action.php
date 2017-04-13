
<html>
<body>

<?php
include 'logic.php';

function drawHtml($data)
{
	?><style>body{text-align: center;}</style><?php
	?> <h1> <?php echo $data->name; ?> </h1> <br> <?php
	?> <body> <?php echo $data->description;?> <br> <?php
	echo $data->reportedBy;?></body> <br> <?php
	echo $data->spottedWhere->name;?> <br><br> <?php
	echo $data->spottedWhen->date;?> <br>
	<br><form action ="index.php">
		<button input type="submit" name="Back">Tillbaka</button>
	</form><br>
	<img src="<?php echo $data->image; ?>">

<?php
}
 if (isset($_POST['btnSingleUnicorn'])){
	$data = getUnicorn($_POST["id"]);
	drawHtml($data);	
}

else if(isset($_POST['btnAllUnicorn'])){
	$data = getAllUnicorn();
	foreach($data as $value){
	echo $value->name; ?> <br> <?php
	}
}

else if (isset($_POST['1'])){
	$data = getUnicorn(1);
	drawHtml($data);
}
else if (isset($_POST['2'])){
	$data = getUnicorn(2);
	drawHtml($data);
}
else if (isset($_POST['3'])){
	$data = getUnicorn(3);
	drawHtml($data);
}
else if (isset($_POST['4'])){
	$data = getUnicorn(4);
	drawHtml($data);
}
else if (isset($_POST['5'])){
	$data = getUnicorn(5);
	drawHtml($data);
}
else if (isset($_POST['6'])){
	$data = getUnicorn(6);
	drawHtml($data);
}
else if (isset($_POST['7'])){
	$data = getUnicorn(7);
	drawHtml($data);
}
else if (isset($_POST['8'])){
	$data = getUnicorn(8);
	drawHtml($data);
}
else if (isset($_POST['9'])){
	$data = getUnicorn(9);
	drawHtml($data);
}
else if (isset($_POST['10'])){
	$data = getUnicorn(10);
	drawHtml($data);
}
else if (isset($_POST['11'])){
	$data = getUnicorn(11);
	drawHtml($data);
}
else if (isset($_POST['12'])){
	$data = getUnicorn(12);
	drawHtml($data);
}

?>
</body>
</html>
