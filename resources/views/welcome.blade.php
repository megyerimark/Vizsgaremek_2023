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
			<style>
				header{
	 background-image: url('{{ asset('img/paris.jpg') }}');
	 width: auto;
		height: 100vh;
		background-size: cover;
		background-repeat: no-repeat;
		display: flex;
		
				}
			</style>
			<nav>
				
	
				
			</nav>
	
			<div class="content">
				<div>
					<h3 class="animate__animated aanimate__lightSpeedInRight">A legjobb</h3>
					<h1 class="animate__animated animate__bounce">Budapesti étterem</h1>
						<h4 class="animate__animated animate__fadeInDown">Foglaljon online, vagy hívjon minket <span>(06 40) 50 50 50</span></h4>
		
					<a href="{{route('reservation.step-one')}}" type="button" class="sub-heading animate__animated animate__fadeInDown"> Foglalj most </a>
				</div>
			</div>
			<img src="">
	
		</header>
		
	
	
		<section class="our-story">
			<div class="banner">
				<h3 class="sub-heading">Rólunk</h3>
				<h1 class="heading animate__animated animate__lightSpeedInRight">A kezdet</h1>
			</div>
	
			<strong>
				<blockquote>“A Dentre Bistro Budapest nyüzsgő, élettel és energiával teli negyedében, a(z) 1065 Révay Utca 16.
					Budapest szám alatt nyílt meg.”</blockquote>
			</strong>
	
			<p>A teljesen felújított, modern és hangulatos bár az élőzenés éjjeli bárokat kedvelők pesti zarándokhelye. Ám, a Dentre Bistro több, mint egy étterem, ahol a kezedben egy itallal hallgatod a zongoristát, a hegedűst, dúdolod az ismert és kedvelt melódiákat és ahol vörös rózsával szerelmet vallhatsz kedvesednek. A Budapest Bistro vacsorázó hely is, ahol a betérő vendégek megtalálhatják a kedvükre való finom falatokat a hozzá illő italokkal. Vacsorával, vagy anélkül, egyedül, vagy párban, társasággal, a Dentre Bistro Hétfőtől-Vasárnapig élményt kínál.</p>
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
			
				<div class="asd">
					<div  class="mapouter"><div class="gmap_canvas"><iframe width="437" height="395" id="gmap_canvas" src="https://maps.google.com/maps?q=K%C3%BClkereskedelmi%20Technikum&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:395px;width:437px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:395px;width:437px;}</style></div></div>
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
					<h3>Jöjjön el hozzánk</h3>
					<h4>1065 Révay utca 16.<br> Budapest
						<br>
					</h4>
				</div>
	
				<div>
					<h3>Foglalás</h3>
					<h4>(06 1) 123 4567 <br><a href="{{route('reservation.step-one')}}"> Foglaljon most</a></h4>
				</div>
	
				<div>
					<h3>Nyitvatartási Idő</h3>
					<h4>Hétfő - Vasárnap 10:00 - 23:00<br>
						
					</h4>
				</div>
			</div>
	
			<div class="footer-icon">
				<ul>
					<a href="https://www.facebook.com/kulkergimi/?locale=hu_HU">
						<li><i class='bx bxl-facebook'></i></li>
					</a>
					
					<li><i class='bx bxl-instagram'></i></li>
					
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
	
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	</html>
	

	</x-guest-layout>
	
	
	