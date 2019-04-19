<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Required meta tags -->
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="/img/favicon.png" type="image/png">
        <title><?php echo $page_title." ".$title; ?></title>
        <!-- Bootstrap CSS -->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
        <link rel="stylesheet" href="vendors/flaticon/flaticon.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- rdbms and toggle get grouped for better mobile display -->
						<a class="navbar-rdbms logo_h" img src="img/logo.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="/">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="/about-us.php">About</a></li> 
								<li class="nav-item"><a class="nav-link" href="/services.php">Services</a></li> 
								<li class="nav-item submenu dropdown">
									<a href="/index.php#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="/project.php?p=1">Apostille</a></li>
										<li class="nav-item"><a class="nav-link" href="/project.php?p=2">AllMyQuotes</a></li>
										<li class="nav-item"><a class="nav-link" href="/project.php?p=3">Laurela</a></li>
										<li class="nav-item"><a class="nav-link" href="/project.php?p=4">Peoples</a></li>
										<li class="nav-item"><a class="nav-link" href="/project.php?p=5">Aphoirsm</a></li>
										<li class="nav-item"><a class="nav-link" href="/project.php?p=6">Tennis</a></li>
									</ul>
								</li> 
								<li class="nav-item submenu dropdown">
									<a href="/index.php#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usefull</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="cheatsheet.php?p=1">MySQL</a></li>
										<li class="nav-item"><a class="nav-link" href="/cheatsheet.php?p=2">MSSQL</a></li>
										<li class="nav-item"><a class="nav-link" href="/cheatsheet.php?p=3">Cassandra</a></li>
										<li class="nav-item"><a class="nav-link" href="/cheatsheet.php?p=4">MongoDB</a></li>
										<li class="nav-item"><a class="nav-link" href="/cheatsheet.php?p=5">PostgreSQL</a></li>
										<li class="nav-item"><a class="nav-link" href="/cheatsheet.php?p=6">Couchbase</a></li>
										<li class="nav-item"><a class="nav-link" href="/cheatsheet.php?p=7">Redis</a></li>
										<li class="nav-item"><a class="nav-link" href="/cheatsheet.php?p=8">HBASE</a></li>
										<li class="nav-item"><a class="nav-link" href="/cheatsheet.php?p=11">Git</a></li>
									</ul>
								</li> 
								<li class="nav-item"><a class="nav-link" href="/contact.php">Contact</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->

<?php  

$today_update=0;
$today_date_now=date("Y-m-d");
$myFile = "/tmp/kargin-today-date.txt";
$myFileLink = fopen($myFile, 'r');
$today_date = trim(fread($myFileLink, filesize($myFile)));
fclose($myFileLink);
if ($today_date_now <> $today_date) {
    $ftoday = fopen($myFile, "w");
    $today=$today_date_now;
    fwrite($ftoday,$today);
    fclose($ftoday);
    $today_update=1;
};

$myFile = "/tmp/kargin-today.txt";
$myFileLink = fopen($myFile, 'r');
$today = fread($myFileLink, filesize($myFile));
fclose($myFileLink);
$ftoday = fopen($myFile, "w");
if ($today_update == 1) {

    $myFileFull = "/tmp/kargin-full.txt";
    $myFileLinkFull = fopen($myFileFull, 'a+');
    $fullCounter=trim("'".$today_date."','".$today."'")."\n";
    fwrite($myFileLinkFull, $fullCounter);
    fclose($myFileLinkFull);

    $today=1;
} else {
    $today=$today+1;
};
fwrite($ftoday,$today);
fclose($ftoday);
//echo "today: $today";

$myFileTotal = "/tmp/kargin-total.txt";
$myFileLinkTotal = fopen($myFileTotal, 'r');
$total = fread($myFileLinkTotal, filesize($myFileTotal));
fclose($myFileLinkTotal);
$ftotal = fopen($myFileTotal, "w");
$total=$total+1;
fwrite($ftotal,$total);
fclose($ftotal);
//echo "total: $total";

session_start();    
if(isset($_SESSION['views'])) 
    $_SESSION['views'] = $_SESSION['views']+1; 
else
    $_SESSION['views']=1; 

$views = $_SESSION['views']; 


?>   