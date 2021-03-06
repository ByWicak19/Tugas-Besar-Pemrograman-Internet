<?php
$host = "localhost";
$user = "root";
$password = "";
$database_name = "iusaha";
$pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
));
$query =  $pdo->prepare("select * from member");
$query->execute();
?>

<!DOCTYPE html>
<html>
<head>
<title>Cari Partner - iUsaha</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Play Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap -->
<link href="css-b/bootstrap.min.css" rel='stylesheet' type='text/css' media="all" />
<!-- //bootstrap -->
<link href="css-b/dashboard.css" rel="stylesheet">
<!-- Custom Theme files -->
<link href="css-b/style.css" rel='stylesheet' type='text/css' media="all" />
<script src="js/jquery-1.11.1.min.js"></script>
<!--start-smoth-scrolling-->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- //fonts -->
</head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><h1><img src="images2/iUsahalogo.png" alt="" /></h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<div class="top-search">
				<form class="navbar-form navbar-right">
					<input type="text" class="form-control" placeholder="Cari Partner..." name="cari_partner">
					<input type="submit" value=" " name="cari">
				</form>
			</div>
			<div class="header-top-right">
				<div class="file-m">
					<div class="btn-group" role="group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" width="90%">
		      				<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
		    			  	<span class="badge"></span>
	    				</button>
						<ul class="dropdown-menu" left="10px" aria-labelledby="dropdownMenu2">
						     <li class="avatar">
						     	<a href="Konfirmasi.php">
									<img src="images-b/eg3.jpg" alt=""/>
									<div>New message</div>
									<small>1 minute ago</small>
								</a>
							</li>
	   					</ul>
	   				</div>
				</div>
				<a href="myprofil.php">
					<div class="file">
						<button type="button" class="btn btn-default btn-sm">
							<span class="" aria-hidden="true"><img src="images-b/s1.jpg" alt=""/></span>
							<span>...</span>
						</button>
					</div>
				</a>	
				<div class="logout">
					<div class="btn-group" role="group">
	    				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" width="90%">
		      				<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
		    			  	<span class="caret"></span>
	    				</button>
	    				<ul class="dropdown-menu" left="10px" aria-labelledby="dropdownMenu2">
						     <li><a href="#">Help</a></li>
						     <li><a href="logout.php">Logout</a></li>
	   					</ul>
  					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
        </div>
		<div class="clearfix"> </div>
      </div>
    </nav>
	
        <div class="col-sm-3 col-md-2 sidebar">
			<div class="top-navigation">
				<div class="t-menu">MENU</div>
				<div class="t-img">
					<img src="images-b/lines.png" alt="" />
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="drop-navigation drop-navigation">
				<ul class="nav nav-sidebar">
					<li><a href="home.php" class="home-icon"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
					<li><a href="myprofil.php" class="user-icon"><span class="glyphicon glyphicon-m glyphicon-user" aria-hidden="true"></span>MyProfil</a></li>
					<li class="active"><a href="cari-partner.php" class="sub-icon"><span class="glyphicon glyphicon-m glyphicon-search" aria-hidden="true"></span>Cari Partner</a></li>
					<li><a href="daftar-member.php" class="sub-icon"><span class="glyphicon glyphicon-m glyphicon-th-list" aria-hidden="true"></span>Daftar Partner</a></li>
				</ul>
				  <!-- script-for-menu -->
						<script>
							$( ".top-navigation" ).click(function() {
							$( ".drop-navigation" ).slideToggle( 300, function() {
							// Animation complete.
							});
							});
						</script>
				<div class="side-bottom">
					<div class="copyright">
						<p>Copyright © 2015 <a href=""> iUsaha</a></p>
					</div>
				</div>
			</div>		
		</div>		
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="main-grids">
				<div class="top-grids">
					<div class="recommended-info">
						<h3>Daftar Pencarian Partner</h3>
					</div>
					<div class="col-md-4 resent-grid-1 recommended-grid slider-top-grids">
						<?php while($member = $query->fetch()){?>
						<div class="resent-grid-info recommended-grid-info-1">
							<div class="resent-grid-img-1 recommended-grid-img">
								<!-- <img src="images-b/r3.jpg" alt="" /> -->
							</div>
								<ul>
									<li><h3><a href="tambah-partner.php"><?php echo $member['nama']?></a></h3></li>
								
									<li><h4> <?php echo $member['alamat']?> </h4></li>
								
		                    		<li><h4> <?php echo $member['email']?> </h4></li>
		       
		                    		<li><h4> <?php echo $member['jenis_usaha']?> </h4></li>
		                    	</ul>
						</div>
						<?php }?>
						<!-- <div class="resent-grid-info recommended-grid-info-1">
							<div class="resent-grid-img-1 recommended-grid-img">
								<img src="images-b/r01.jpg" alt="" />
							</div>
							<h3><a href="tambah-partner.php" class="title title-info"> Good Collaction </a>
								<ul>
									<li><p class="author author-info"><a href="#" class="author"> Mahardika </a></p></li>
									<li class="right-list"><p class="views views-info">2,114,200 views</p></li>
								</ul>
							</h3>
						</div>
						<div class="resent-grid-info recommended-grid-info-1">
							<div class="resent-grid-img-1 recommended-grid-img">
								<img src="images-b/r2.jpg" alt="" />
							</div>
							<h3><a href="tambah-partner.php" class="title title-info"> Internet Marketer </a>
								<ul>
									<li><p class="author author-info"><a href="#" class="author"> Rosyid Handi</a></p></li>
									<li class="right-list"><p class="views views-info">2,114,200 views</p></li>
								</ul>
							</h3>
						</div>
						<div class="resent-grid-info recommended-grid-info-1">
							<div class="resent-grid-img-1 recommended-grid-img">
								<img src="images-b/r02.jpg" alt="" />
							</div>
							<h3><a href="tambah-partner.php" class="title title-info"> BestCloth </a>
								<ul>
									<li><p class="author author-info"><a href="#" class="author"> Rizal Hirawan </a></p></li>
									<li class="right-list"><p class="views views-info">2,114,200 views</p></li>
								</ul>
							</h3>
						</div> -->
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //footer -->
		</div>
		
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images-b work. Don't actually copy the next line! -->
  </body>
</html>