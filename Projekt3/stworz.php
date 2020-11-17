<?php 
include "poloczenie.php";

	if (isset($_POST['submit'])) {
		if(!empty($_POST)){
			require 'poloczenie.php';
		}
		
		$walidacja = true;
		
		$imie = $_POST['imie'];
		$nazwisko = $_POST['nazwisko'];
		$telefon = $_POST['telefon'];
		$email = $_POST['email'];
		$adres = $_POST['adres'];
		$miejsce = $_POST['miejsce'];
		$kraj = $_POST['kraj'];
		
		$imieblod = null;
		$nazwiskoblod = null;
		$telefonblod = null;
		$emailblod = null;
		$adresblod = null;
		$miejsceblod = null;
		$krajblod = null;
		
		if(empty($imie)){
			$walidacja = false;
			$imieblod = " Wpisz dane";			
		}
			if(empty($nazwisko)){
			$walidacja = false;
			$nazwiskoblod = " Wpisz dane";			
		}
			if(empty($telefon)){
			$walidacja = false;
			$telefonblod = " Wpisz dane";			
		}
			if(empty($email)){
			$walidacja = false;
			$emailblod = " Wpisz dane";			
		}
			if(empty($adres)){
			$walidacja = false;
			$adresblod = " Wpisz dane";			
		}
		if(empty($miejsce)){
			$walidacja = false;
			$miejsceblod = " Wpisz dane";			
		}
		if(empty($kraj)){
			$walidacja = false;
			$krajblod = " Wpisz dane";			
		}

		if($walidacja){

		$sql = "INSERT INTO `dane`(`imie`, `nazwisko`,`telefon`, `email`, `adres`, `miejsce`,`kraj`) VALUES ('$imie','$nazwisko','$telefon','$email','$adres','$miejsce','$kraj')";
		
		

		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "Nowy rekord został utoworzony.";
		}else{
			echo "Błąd:". $sql . "<br>". $conn->error;
		}

		$conn->close();
		}

	}



?>

<!DOCTYPE html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Dodawanie</title>
	<meta name="author" content="Dawid Laskowski">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<script src=" js/bootstrap.js"></script>

		
	
</head>

<body>
 
<div class ="formularz">
<form action="" method="POST">
  <fieldset>
    <legend>Dane Biura Podróży</legend>
    Imie:<br>
    <input type="text" name="imie">
	<?php if (!empty($imieblod)) : ?>
	<div class='text-danger'> <?php echo $imieblod; ?> </div>
	<?php endif; ?>
	
    <br>
    Nazwisko:<br>
    <input type="text" name="nazwisko">
	<?php if (!empty($nazwiskoblod)) : ?>
	<div class='text-danger'> <?php echo $nazwiskoblod; ?> </div>
	<?php endif; ?>
    <br>
	Telefon:<br>
    <input type="text" name="telefon">
	<?php if (!empty($telefonblod)) : ?>
	<div class='text-danger'> <?php echo $telefonblod; ?> </div>
	<?php endif; ?>
    <br>
    Email:<br>
    <input type="email" name="email">
	<?php if (!empty($emailblod)) : ?>
	<div class='text-danger'> <?php echo $emailblod; ?> </div>
	<?php endif; ?>
    <br>
    Adres:<br>
    <input type="text" name="adres">
	<?php if (!empty($adresblod)) : ?>
	<div class='text-danger'> <?php echo $adresblod; ?> </div>
	<?php endif; ?>
    <br>
    Miejsce:<br>
    <input type="text" name="miejsce">
	<?php if (!empty($miejsceblod)) : ?>
	<div class='text-danger'> <?php echo $miejsceblod; ?> </div>
	<?php endif; ?>
    <br>
	Kraj:<br>
    <input type="text" name="kraj">
	<?php if (!empty($krajblod)) : ?>
	<div class='text-danger'> <?php echo $krajblod; ?> </div>
	<?php endif; ?>
    <br><br>
    <input type="submit" name="submit" class="btn btn-success" value="Wyślij"> <input type="button" class="btn btn-success" value="Powrót" onClick="location.href='tabele.php';" />
	
  </fieldset>
</form>
</div>
 
</body>
</html>