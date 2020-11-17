<?php 
include "poloczenie.php";

$sql = "SELECT * FROM dane";

$result = $conn->query($sql);

?>



<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Piekne miejsca</title>
	<meta name="author" content="Dawid Laskowski">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<script src=" js/bootstrap.js"></script>

		
	
</head>

<body>
	
	<main>
		
		<section class="zdjecie">
		
			<div class="container">
				
			<header>
				<nav class="navbar navbar-dark bg-secondary navbar-expand-lg">
		
				<a class="navbar-brand" href="index.html">Strona Główna</a>
		
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Przełącznik nawigacji">
					<span class="navbar-toggler-icon"></span>
				</button>
		
			<div class="collapse navbar-collapse" id="menu">
			
				<ul class="navbar-nav mr-auto">
									
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"> Ranking </a>
						
						<div class="dropdown-menu" aria-labelledby="submenu">
						
							<a class="dropdown-item"> Najpiękniejsze miejsca </a>
							<a class="dropdown-item">Najbardziej spotykane </a>
							
							<div class="dropdown-divider"></div>
							
							<a class="dropdown-item"> Najciekawsze miejsca </a>
							<a class="dropdown-item"> Najchętniej odwiedzane </a>
						
						</div>
						
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="tabele.php"> CRUD PHP </a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="galeria.html"> Galeria </a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="formularz.html"> Formularz </a>
					</li>
				
				</ul>
			
				<form class="form-inline">
				
					<input class="form-control mr-1" type="search" placeholder="Wyszukaj" aria-label="Wyszukaj">
					<button class="btn btn-light" type="submit">Znajdź</button>
				
				</form>
			
			</div>
		
		</nav>
					
					<h1>Klienci Biura Podróży</h1>
				
						
				</header>
				
				<div class="row">
					

<table class="table table-success">
	<thead>
		<tr>
		<th>Id</th>
		<th>Imie</th>
		<th>Nazwisko</th>
		<th>Telefon</th>
		<th>Email</th>
		<th>Adres</th>
		<th>Miejsce</th>
		<th>Kraj</th>
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['imie']; ?></td>
					<td><?php echo $row['nazwisko']; ?></td>
					<td><?php echo $row['telefon']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['adres']; ?></td>
					<td><?php echo $row['miejsce']; ?></td>
					<td><?php echo $row['kraj']; ?></td>
					<td><a class="btn btn-success" href="stworz.php?id=<?php echo $row['id']; ?>">Dodaj</a>&nbsp;<a class="btn btn-info" href="edytuj.php?id=<?php echo $row['id']; ?>">Edytuj</a>&nbsp;<a class="btn btn-danger" href="usun.php?id=<?php echo $row['id']; ?>">Usuń</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	</div>
				
					
				</div>
				
			</div>	
				
		</section>
		
	</main>
	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>