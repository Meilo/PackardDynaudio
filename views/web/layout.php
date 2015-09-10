<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="<?php echo $metaDescription ?>">
	<meta name="author" content="Ludovic Elice , Mehdi Stocky">
	<meta name="copyright" content="">
	<meta name="keywords" content="<?php echo $keywords ?>">
	<meta name="Language" content="fr">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="views/web/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="views/web/css/reset.css">
	<link rel="stylesheet" type="text/css" href="views/web/css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<title><?php echo $title ?></title>
</head>
<body>
	<header>
		<!-- Header ici -->
		<div class="row header-principale">
			<div class="col-md-12 container-menu">
				<nav class="menu">
				<!-- Menu ici -->
					<div class="row">
						<div class="col-md-5 nav-classique">
							<ul class="list-unstyled list-inline navig-1">
								<li>Marque</li>
								<li><a href="#">Menu 1</a></li>
								<li><a href="#">Menu 2</a></li>
								<li><a href="#">Menu 3</a></li>
							</ul>
						</div>
						<div class="col-md-3 nav-connexion">
							<ul class="list-unstyled list-inline navig-1">
								<li><a href="#">Menu 1</a></li>
								<li>ou</li>
								<li><a href="#">Menu 2</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
		
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