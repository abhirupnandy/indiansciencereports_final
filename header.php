<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta and others-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Indian Science Reports</title>
	<link rel="icon" href="images/logo/title-logo.png" type="image/x-icon">
	<!-- CSS links -->
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.css">
    <!-- Datatable CSS -->
    <link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>

</head>

<body>
	<header>
		<div class="container-fluid topbar bg-dark">
			<div class="row">
				<div class="col-12 col-sm-4 text-center">
					<i class="fa fa-envelope-o"></i>
					<span>Mail us: </span>
					<a href="mailto:vivek@bhu.ac.in" class="link">vivek@bhu.ac.in</a>
				</div>
				<div class="col-12 col-sm-4 text-center">
					<i class="fa fa-map-marker"></i>
					<span>Visit us: </span>
					<a href="https://goo.gl/maps/yacrZeD2GESPgu149" target="_blank" class="link">
						Information Science Research Group</a>
				</div>
				<div class="col-12 col-sm-4 text-center">
					<span>Follow Us: </span>
					<a href="#"><i class="fa fa-facebook-f fa-inverse link"></i></a>
					<a href="#"><i class="fa fa-twitter fa-inverse link"></i></a>
					<a href="#"> <i class="fa fa-linkedin fa-inverse link"></i></a>
				</div>
			</div>
		</div>
	</header>
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-sm-9 align-self-center">
					<img class="img-fluid" src="images/logo/logo.png" alt="Logo">
				</div>
				<div class="col-12 col-sm-3 align-self-center pb-2">
					<button data-toggle="modal" data-target="#loginModal" class="btn btn-dark">
						<span class="fa fa-sign-in"></span> Login</button>
				</div>
			</div>
		</div>
	</header>
	<nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
		<!-- Brand -->
		<!-- Toggler/collapsibe Button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<!-- Links -->
		<div class="collapse navbar-collapse justify-content-sm-center" id="collapsibleNavbar">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<!-- Dropdown -->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
						Productivity
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="prod_overview.php">Overview</a>
						<a class="dropdown-item" href="#">Overall</a>
						<a class="dropdown-item" href="#">Thematic Areas</a>
						<a class="dropdown-item" href="#">Discipline Based</a>
					</div>
				</li>
				<!-- Dropdown -->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
						International Collaboration
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Overall</a>
						<a class="dropdown-item " href="#">Institution-wise</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="gender_analysis.php">Gender Analysis</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="open_access.php">Open Access</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="altmetrics.php">Altmetrics</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="publication.php">Publications</a>
				</li>
				<!-- Search Bar -->
                <li class="nav-item">
                    <form class="form-inline" method="get" action="search_page.php">
                        <input class="form-control form-control-sm ml-3 w-75 search" type="text"
                                   placeholder="Search for Institutes"><i class="fa fa-search"></i>
                    </form>
                </li>
			</ul>
		</div>
	</nav>
<!-- End Headers -->
