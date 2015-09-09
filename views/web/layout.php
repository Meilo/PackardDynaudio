<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="<?php echo $metaDescription ?>">
	<meta name="author" content="Ludovic Elice , Mehdi Stocky">
	<meta name="copyright" content="">
	<meta name="keywords" content="<?php echo $keywords ?>">
	<meta name="Language" content="fr">
	<link rel="stylesheet" type="text/css" href="views/web/css/style.css">
	<link rel="stylesheet" type="text/css" href="views/web/css/bootstrap.min.css">
	<title><?php echo $title ?></title>
</head>
<body>
	<header>
		<!-- Header ici -->
		<nav>
			<!-- Menu ici -->
		</nav>
	</header>
	<section>
		<?php $action = $_REQUEST['action'];
		include(actionView($action)); ?>
	</section>
	<footer>
		<!-- Footer ici -->
	</footer>
	<script type="text/javascript" charset="utf8" src="views/web/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" charset="utf8" src="views/web/js/bootstrap.min.js"></script>
</body>
</html>