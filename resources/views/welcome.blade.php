<x-guest-layout>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Budapest Bistro</title>

	
	<link rel="stylesheet" type="text/css" href="style.css">

	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;300;400;700&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nothing+You+Could+Do&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>
<body>
	
	<header>
		<nav>
			

			<!-- <div>

				<i class='bx bx-menu-alt-left' onclick="openNav()"></i>
			</div> -->
		</nav>

		<div class="content">
			<div>
				<h3 class="sub-heading animate__animated animate__fadeInDown">A legjobb</h3>
				<h1 class="heading animate__animated animate__fadeInDown">Budapesti étterem</h1>
				<h4 class="animate__animated animate__fadeInDown">Foglaljon online, vagy hívjon minket <span>(06 40) 50 50 50</span></h4>
				<a href="{{route('reservation.step-one')}}" type="button" class="sub-heading animate__animated animate__fadeInDown"> Foglalj most </a>
			</div>
		</div>
<!-- 
		<div id="mySidenav" class="sidenav">
			<a href="#" class="closebtn" onclick="closeNav()"><i class='bx bx-x'></i></a>
			<a href="#">Főoldal</a>
			<a href="#">Menü</a>
			<a href="#">Rólunk</a>
		</div> -->
	</header>
	


	<section class="our-story">
		<div class="banner">
			<h3 class="sub-heading">Rólunk</h3>
			<h1 class="heading">A kezdet</h1>
		</div>

		<blockquote>“A Budapest Bistro Budapest nyüzsgő, élettel és energiával teli negyedében, a Vigadó tér 5. szám alatt nyílt meg.”</blockquote>

		<p>A teljesen felújított, modern és hangulatos bár az élőzenés éjjeli bárokat kedvelők pesti zarándokhelye. Ám, a Budapest Bistro több, mint egy étterem, ahol a kezedben egy itallal hallgatod a zongoristát, a hegedűst, dúdolod az ismert és kedvelt melódiákat és ahol vörös rózsával szerelmet vallhatsz kedvesednek. A Budapest Bistro vacsorázó hely is, ahol a betérő vendégek megtalálhatják a kedvükre való finom falatokat a hozzá illő italokkal. Vacsorával, vagy anélkül, egyedül, vagy párban, társasággal, a Budapest Bistro Hétfőtől-Szombatig élményt kínál.</p>
	</section>
	


	

	<section class="image-gallery">
		<a href="{{route('menus.index')}}">
			<h3 class="sub-heading">Menüink</h3>
		</a>

		<div class="gallery">
			
		</div>
	</section>

	<section class="our-team">
		<h3 class="sub-heading">Ismerd meg</h3>
		<h1 class="heading">A séfeket</h1>

		<div class="team-member">
			<div>
				
			</div>

			<div>
				
			</div>

			<div>
				
			</div>
		</div>
	</section>




	<section class="our-restaurant">
		<div class="image">
			<img src="img/back-pic.png">
		</div>

		<div class="content">
			<h3>Egész Budapest</h3>
			<h2>Bisztrója</h2>
			<p>
				Férőhelyek<br>
				Céges buli - 35 fő <br>
				Esküvő - 50 fő <br>
				Üzleti megbeszélés - 40 fő <br>
				Családi vacsora - 15 fő <br>
			</p>
		</div>

	</section>



	<section class="footer-section">
		<div class="footer">
			<div>
				<img src="img/logo.png">
			</div>

			<div>
				<h3>Jöjjön el hozzánk</h3>
				<h4>1105 Vigadó tér,<br> Budapest
					<br>
				</h4>
			</div>

			<div>
				<h3>Foglalás</h3>
				<h4>(06 1) 123 4567 <br> Foglaljon most</h4>
			</div>

			<div>
				<h3>Nyitvatartási Idő</h3>
				<h4>Hétfő - Péntek 9:30 - 21:00<br>
					Szombat - 8:00 - 22:00
				</h4>
			</div>
		</div>

		<div class="footer-icon">
			<ul>
				<li><i class='bx bxl-facebook'></i></li>
				
				<li><i class='bx bxl-instagram'></i></li>
				<li><i class='bx bxl-copyright'></i></li>
				
			</ul>
		</div>

		<center>
			Megyeri Márk, Bognár Dávid, Orosz Levente
		</center>
	</section>


	<script type="text/javascript">
		function openNav() {
			document.getElementById('mySidenav').style.width="350px";
		}

		function closeNav() {
			document.getElementById('mySidenav').style.width="0px";
		}
	</script>
</body>

<link rel="stylesheet" href="css/style.css">

</html>
</x-guest-layout>


