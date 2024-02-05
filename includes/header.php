

 
 <header class="header" data-header>
 	<?php if($_SESSION['login'])
 	{?>
 		<div class="top-header">
 			<div class="container">
 				<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
 					<li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
 					<li class="prnt"><a href="profile.php">My Profile</a></li>
 					<li class="prnt"><a href="change_password.php">Change Password</a></li>
 					<li class="prnt"><a href="tour_history.php">My Tour History</a></li>
 				</ul>
 				<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
 					<li class="tol">Welcome :</li>        
 					<li class="sig"><?php echo htmlentities($_SESSION['login']);?></li> 
 					<li class="sigi"><a href="logout.php" >/ Logout</a></li>
 				</ul>
 				<div class="clearfix"></div>
 			</div>
 		</div>
 		<?php 
 	} else 
 	{
 		?>

		
  
    <div class="container">

      <a href="#">
        <h1 class="logo">Tourest</h1>
      </a>

      <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-outline" class="close"></ion-icon>
      </button>

      <nav class="navbar">

        <ul class="navbar-list">

          <li>
            <a href="index.php" class="navbar-link scroll-link">Home</a>
          </li>

          <li>
            <a href="#aboutUs" class="navbar-link scroll-link">About Us</a>
          </li>

          <li>
            <a href="package_details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="navbar-link scroll-link">Tour places</a>
          </li>

          <li>
            <a href="#portfolio" class="navbar-link scroll-link">Gallery</a>
          </li>


          <li>
            <a href="#contactUs" class="navbar-link scroll-link">Contact Us</a>
          </li>

        </ul>

        <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#myModal4">&nbsp; SIGN IN</a>

      </nav>

    </div>
  

 		<!-- <div class="top-header">
 			<div class="container">
 				
 				<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
 					<li class="tol">Toll Number : 123-4568790</li>        
 					<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Sign Up</a></li> 
 					<li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" >&nbsp; Sign In</a></li>
 				</ul>
 				<div class="clearfix"></div>
 			</div>
 		</div>
 		<?php 
 	}?> -->

	 


 	<!-- <div class="container">
 		<nav class="navbar navbar-inverse" role="navigation">
 			<div class="navbar-header adeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
 				<a href="#" class="navbar-brand scroll-top logo"><b>Traveller</b></a>
 				<button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
 					<span class="sr-only">Toggle navigation</span>
 					<span class="icon-bar"></span>
 					<span class="icon-bar"></span>
 					<span class="icon-bar"></span>
 				</button>
 				
 			</div>
 			/.navbar-header-->
 			<!-- <div id="main-nav" class="collapse navbar-collapse adeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
 				<ul class="nav navbar-nav" id="mainNav">
 					<li ><a href="#home" class="scroll-link">Home</a></li>
 					<li><a href="#aboutUs" class="scroll-link">About Us</a></li>
 					<li><a href="#packages" class="scroll-link">Packages</a></li>
 					<li><a href="#portfolio" class="scroll-link">Gallery</a></li>
 					<li><a href="#contactUs" class="scroll-link">Contact Us</a></li>
 				</ul>
 			</div>
 			/.navbar-collapse-->
 		<!-- </nav> -->
 		<!--/.navbar-->
 	<!-- </div>  -->
 	<!--/.container-->
 </header>