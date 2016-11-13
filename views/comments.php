<!DOCTYPE html>
<html>
<head>
<?php
	$title = "Відгуки - ";
	include('templates/head.php');
?>
	<link rel="stylesheet" type="text/css" href="../css/comments.css">
</head>
<body>

<?php
	include('templates/header.php');
?>

<main>
	<div class="container">
		<div class="publications">
			<h1>Відгуки</h1>
			<div class="big-col">
				<button class="add-comment">Залишити відгук</button>
				<div class="comment clear">
					<div class="user">
						<div class="user-photo"></div>
						<span class="user-name">John Smith</span>
					</div>
					<div class="content clear">
						<p>Тут найнижчі ціни і найякісніші послуги, однозначно 5+.</p>
					</div>
					<span class="date">2016-11-13</span>
				</div>
				<div class="comment clear">
					<div class="user">
						<div class="user-photo"></div>
						<span class="user-name">Зірка Василь</span>
					</div>
					<div class="content clear">
						<p>Чудова компанія! Рекомендую!</p>
					</div>
					<span class="date">2016-11-13</span>
				</div>
				<div class="comment clear">
					<div class="user">
						<div class="user-photo"></div>
						<span class="user-name">Noname Nonameovich</span>
					</div>
					<div class="content clear">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
					<span class="date">2016-11-13</span>
				</div>

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