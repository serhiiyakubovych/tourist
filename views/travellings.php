<!DOCTYPE html>
<html>
<head>
<?php
	$title = "Подорожі - ";
	include('templates/head.php');
?>
</head>
<body>

<?php
	include('templates/header.php');
?>

<main>
	<div class="container">
		<div class="destinations">
			<h1><a href="<?=$SERVER['SERVER_NAME']?>/travellings">Подорожі</a></h1>
			<div class="row">
				<div class="col">
					<img src="../img/france.jpeg">
					<p>
						Франція
						<span class="price">7199 грн.</span>
					</p>
					<button class="see-more">Детальніше</button>
				</div>
				<div class="col">
					<img src="../img/norway.jpg">
					<p>
						Норвегія
						<span class="price">6899 грн.</span>
					</p>
					<button class="see-more">Детальніше</button>
				</div>
				<div class="col">
					<img src="../img/greece.jpg">
					<p>
						Греція
						<span class="price">6399 грн.</span>
					</p>
					<button class="see-more">Детальніше</button>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<img src="../img/turkey.jpeg">
					<p>
						Туреччина
						<span class="price">6499 грн.</span>
					</p>
					<button class="see-more">Детальніше</button>
				</div>
				<div class="col">
					<img src="../img/usa.jpg">
					<p>
						США
						<span class="price">10499 грн.</span>
					</p>
					<button class="see-more">Детальніше</button>
				</div>
				<div class="col">
					<img src="../img/italy.jpeg">
					<p>
						Італія
						<span class="price">9999 грн.</span>
					</p>
					<button class="see-more">Детальніше</button>
				</div>
			</div>
	</div>
</main>

<?php
	include('templates/footer.php');
	include('templates/_js.php');
?>

</body>
</html>