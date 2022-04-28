<?php
	if(!isset ($_GET['psl'])){
		$page = "";
	}
	else{
		$page = $_GET['psl'];
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Darbas</title>
		<?php 
		//if($page == "ArticlePage")
		//	echo '<link rel="stylesheet" type="text/css" href="include/css/bootstrap.css" />';

		?>	
		<link rel="stylesheet" type="text/css" href="include/css/main.css" />
		<link rel="stylesheet" type="text/css" href="include/css/form.css" />
	
	</head>

	<body href="javascript:void(0);" onload="setImgMargin()" onresize="setImgMargin()">

		<?php 
		
		$aktyvi = "active";
		$neakt = '';
		
		include "pagesElements/Header.php";
		?>
		
		
		<?php
		// puslapis
		switch($page) {
			case '':
				include "pages/HomePage.php";
			break;
			case 'AboutPage':
				include "pages/AboutPage.php";
			break;
			case 'ArticlePage':
				include "pages/ArticlePage.php";
			break;
			case 'ArticlesPage':
				include "pages/ArticlesPage.php";
			break;
			case 'ClientPage':
				include "pages/ClientPage.php";
			break;
			case 'ClientsPage':
				include "pages/ClientsPage.php";
			break;
			case 'GaleryItemPage':
				include "pages/GaleryItemPage.php";
			break;
			case 'GaleryPage':
				include "pages/GaleryPage.php";
			break;
			case 'NewsPage':
				include "pages/NewsPage.php";
			break;
			case 'ContactsPage':
				include "pages/ContactsPage.php";
			break;
			case 'ActionPage':
				include "pages/ActionPage.php";
			break;
			default:
				include "pages/ErrorPage.php";
			break;
		}
		include "pagesElements/Footer.php";
		?>

	<script src="include/js/dynamicElements.js"></script>
	<script>
		function showMenu() {
		  var x = document.getElementById("myTopnav");
		  if (x.className === "navbaras") {
			x.className += " show";
		  } else {
			x.className = "navbaras";
		  }
		}
	</script>
	<script>
		function setImgMargin() {
			var img = document.getElementById("homePageMidImg");
			var cont = document.getElementById("homePageCont");
			if ((cont !== null) || (img !== null)) {
				var style = cont.currentStyle || window.getComputedStyle(cont);

				margin = parseFloat(style.marginRight);
				padding = parseFloat(style.paddingRight);

				img.style.marginRight = -(margin + padding) + "px";
			}
		}
	</script>
	
	</body>
</html>