<?php 
include "poloczenie.php";


	if (isset($_POST['update'])) {
		$dane_id = $_POST['dane_id'];
		$imie = $_POST['imie'];
		$nazwisko = $_POST['nazwisko'];
		$telefon = $_POST['telefon'];
		$email = $_POST['email'];
		$adres = $_POST['adres'];
		$miejsce = $_POST['miejsce'];
		$kraj = $_POST['kraj'];

		
		$sql = "UPDATE `dane` SET `imie`='$imie',`nazwisko`='$nazwisko',`telefon`='$telefon',`email`='$email',`adres`='$adres',`miejsce`='$miejsce',`kraj`='$kraj' WHERE `id`='$dane_id'";

		// execute the query
		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "Zaktualizowano rekord.";
		}else{
			echo "Błąd:" . $sql . "<br>" . $conn->error;
		}
	}



if (isset($_GET['id'])) {
	$dane_id = $_GET['id'];

	 
	$sql = "SELECT * FROM `dane` WHERE `id`='$dane_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$imie = $row['imie'];
			$nazwisko = $row['nazwisko'];
			$telefon = $row['telefon'];
			$email = $row['email'];
			$adres  = $row['adres'];
			$miejsce = $row['miejsce'];
			$kraj = $row['kraj'];
			$id = $row['id'];
		}

	?>
	
<!DOCTYPE html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Edytowanie</title>
	<meta name="author" content="Dawid Laskowski">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<script src=" js/bootstrap.js"></script>

		
	
</head>
<body>
		 
         <div class ="formularz">
		<form action="" method="post">
		  <fieldset>
		    <legend>Informacje:</legend>
		    Imie:<br>
		    <input type="text" name="imie" value="<?php echo $imie; ?>">
		    <input type="hidden" name="dane_id" value="<?php echo $id; ?>">
		    <br>
		    Nazwisko:<br>
		    <input type="text" name="nazwisko" value="<?php echo $nazwisko; ?>">
		    <br>
			Telefon:<br>
		    <input type="text" name="telefon" value="<?php echo $telefon; ?>">
		    <br>
		    Email:<br>
		    <input type="email" name="email" value="<?php echo $email; ?>">
			 <br>
		    Adres:<br>
		    <input type="adres" name="adres" value="<?php echo $adres; ?>">
			 <br>
		    Miejsce:<br>
		    <input type="miejsce" name="miejsce" value="<?php echo $miejsce; ?>">
			 <br>
		    Kraj:<br>
		    <input type="kraj" name="kraj" value="<?php echo $kraj; ?>">		    
		    <br><br>
		    <input type="submit" class="btn btn-success" value="Aktualizuj" name="update">
			<input type="button"class="btn btn-info" value="Powrót" onClick="location.href='tabele.php';" />
		  </fieldset>
		</form>
		</div>
		 

		
		




	<?php
	} else{
		// Jesli jest problem z wartością id przekieruj użytkownika z portotem('Location: tabele.php');
	}

}
?>
</body>
</html>