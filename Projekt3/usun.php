<?php 
include "poloczenie.php";

 
if (isset($_GET['id'])) {
	$dane_id = $_GET['id'];

	 
	$sql = "DELETE FROM `dane` WHERE `id`='$dane_id'";

	 

	$result = $conn->query($sql);

	if ($result == TRUE) {
		echo "Usunieto rekord.";
	}else{
		echo "Błąd:" . $sql . "<br>" . $conn->error;
	}
}

?>

<!DOCTYPE html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Usuwanie</title>
	<meta name="author" content="Dawid Laskowski">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<script src=" js/bootstrap.js"></script>

		
	
</head>
<body>
<br/>
<input type="button"class="btn btn-info" value="Powrót" onClick="location.href='tabele.php';" />
</body>
</html>