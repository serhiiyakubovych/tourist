<!DOCTYPE html>
<html>
<head>
<?php
	$title = "Контакти - ";
	include('templates/head.php');
?>
	<link rel="stylesheet" type="text/css" href="../css/contacts.css">
</head>
<body>

<?php
	include('templates/header.php');
?>

<main>
	<div class="container">
		<div class="publications">
			<h1>Контакти</h1>
			<div class="big-col">
				<img src="../img/contacts.jpeg">
				<div class="contact-list">
					<h2>Туристична компанія Mannelig</h2>
					<ul class="contact-list">
		                <li>Електронна скринька: <a href="mailto:mannelig@tourist.kl.com.ua">mannelig@tourist.kl.com.ua</a></li>
		                <li>Телефон: +380978654321</li>
		                <li>Адреса: м. Київ, вул. Одеська, 152</li>
		            </ul>
		            <h2>Напишіть нам</h2>
		            <form class="send-message-form" action="#" method="">
		            	<label>Тема
		            		<input type="text" name="" placeholder="Тема вашого повідомлення" required>
		            	</label>
		            	<label>Email
		            		<input type="email" name="" placeholder="Введіть вашу електронну скриньку" required>
		            	</label>
		            	<label>Телефон
		            		<input type="tel" name="" placeholder="Введіть ваший телефон">
		            	</label>
		            	<label>
		            		Ваше повідомлення
		            		<textarea placeholder="Текст повідомлення" required></textarea>
		            	</label>
		            	<button type="submit">Надіслати</button>
	            	</form>
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