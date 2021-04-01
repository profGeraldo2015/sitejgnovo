<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html lang="pt-br">

<head>
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-MFW79N4');
	</script>
	<!-- End Google Tag Manager -->
	<?php
	session_start();
	require_once('Model/Config.php');
	require_once('Model/conexao.php');
	if (empty($_SESSION['usuario'])) {
		$usuario = '';
	} else {
		$usuario = $_SESSION['usuario'];
	}
	?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121305952-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-121305952-1');
	</script>
	<title>Principal | JG Art e Design Marcenaria Artesanal</title>
	<?= SITE['meta'] ?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/estilo.css">
	<link rel="stylesheet" href="./css/bootstrap-social.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





	<!-- 






	
	-->
	<script src="https://kit.fontawesome.com/db8e11e317.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="./js/funcoes.js"></script>
	<link REL="SHORTCUT ICON" HREF="images/faviconjg.ico">
	<style>
		.error {
			color: red;
		}

		form {
			animation-name: fade;
			animation-duration: 500ms;
		}

		@keyframes fade {
			from {
				opacity: 0;
				transform: scale(0.9);

			}

			to {
				opacity: 1;
				transform: scale(1);

			}
		}
	</style>
</head>

<body align="center">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MFW79N4" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<header>
		<?php include_once("pages/menu.php"); ?>
		<div class="msgusuario">
			<?php echo "Bem-vindo " . $usuario; ?>
		</div>
	</header>
	<div id="container">
		<?php

		if (isset($_GET['pages'])) {
			$pagina = $_GET['pages'];
			$page = explode(".", $pagina);
			$pagina = $page[0];

			if (file_exists("pages/$pagina.php")) {
				include_once("pages/$pagina.php");
			} else {
				include_once("pages/home.php");
			}
		} else {
			include_once("pages/home.php");
		}
		?>
	</div>

	<?php include_once("pages/footer3.html"); ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<script>
		/*	$(document).ready(function() {
			let containerA = document.getElementById("circleA");

			let circleA = new ProgressBar.Circle(containerA, {

				color: '#64DAF9',
				strokeWidth: 8,
				duration: 1400,
				from: {
					color: '#AAA'
				},
				to: {
					color: '#650AF9'
				},

				step: function(state, circle) {

					circle.path.setAttribute('stroke', state.color);
					let value = Math.round(circle.value() * 60);
					circle.setText(value);

				}
			});

			circleA.animate(1.0);

		});
*/

		const titulo = document.querySelector('h2');
		typewrite(titulo);

		function typewrite(elemento) {
			const textoArray = elemento.innerHTML.split('');
			elemento.innerHTML = '';
			textoArray.forEach((letra, i) => {
				setTimeout(function() {
					elemento.innerHTML += letra;
				}, 75 * i);
			});

		}
		const target = document.querySelectorAll('[data-anime]');
		const animationClass = 'animate';

		function animeScroll() {
			const windowTop = window.pageYOffset + ((window.innerHeight * 3) / 4); //500
			//       console.log(windowTop);
			target.forEach(function(element) {
				console.log(element);
				if (windowTop > element.offsetTop) {
					//             console.log(' >  ' + windowTop);
					element.classList.add(animationClass);
				} else {
					element.classList.remove(animationClass);
				}
			})
		}
		animeScroll();
		if (target.length) {
			window.addEventListener('scroll', function() {
				animeScroll();
			})
		}
	</script>
</body>

</html>