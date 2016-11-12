<!DOCTYPE html>
<html>
<head>
<?php
	include('templates/head.php');
?>
</head>
<body>

<?php
	include('templates/header.php');
?>

<main>

	<div class="slider"></div>

	<div class="container">
		<div class="destinations">
			<h1><a href="#">Подорожі</a></h1>
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

			<button class="see-more">Більше пропозицій</button>

		</div>
		<div class="publications">
			<h1><a href="#">Публікації</a></h1>
			<div class="big-col">
				<img src="../img/vatican.jpeg">
				<h2>Ватикан</h2>
				<p>Суверенна країна Ватикан найменша в світі. Площа її території 44 гектари, населення менше тисячі осіб. Місто-держава Ватикан розташоване в межах території вічного міста Рим, в західній його частині. Межі карликової держави чітко огороджені фортечною стіною з бастіонами. Заблукати у Ватикані не можна, тут всього чотири вулиці і дві міські площі - вулиці Порта Анджеліка, Льва VI, Ватикано, Делла Сагрестія та площі Святого Петра і Рісорджіменто.</p>
				<button class="see-more">Читати далі</button>
			</div>
			<div class="big-col">
				<img src="../img/morocco.jpg">
				<h2>Марокко</h2>
				<p>Марокко - єдина країна на континенті, що не є членом Африканського союзу. Але політичні погляди Королівства не впливають на любов до цієї країни тисяч туристів, які прагнуть потрапити у східну казку. Ця країна унікальна тим, що в ній не одна столиця, як у всіх державах світу, а цілих чотири: Марракеш, Фес, Мекнес, Рабат (це місто є офіційною столицею держави). Втім, всі ці столиці – історичні, їх в Марокко також називають Імперськими містами.</p>
				<button class="see-more">Читати далі</button>
			</div>
			<div class="big-col">
				<img src="../img/australia.jpeg">
				<h2>Австралія</h2>
				<p>Австралія – країна абсолютно дивна: цивілізована, упорядкована і в той же час дика самобутня. Австралія – райський відпочинок наодинці із природою. Тут вона тропічна і неповторна: зелені оксамитові ліси, кристальні річки, доглянуті парки, безкрайні золоті піски пустелі, узбережжя, що вабить до себе. Тут круглий рік багато сонця, приголомшливі коралові рифи, багатюща флора та фауна, безкінечні пляжі із білим піском, блакитні лагуни, тихі бухти.</p>
				<button class="see-more">Читати далі</button>
			</div>
			<button class="see-more">Більше статтей</button>
		</div>
	</div>

</main>

<?php
	include('templates/footer.php');
	include('templates/_js.php');
?>

</body>
</html>