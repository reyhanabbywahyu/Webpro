<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<head>
<title>Sangkuriang Internasional - Innovative IT Solutions for You</title>

<!--Bootstrap online 4.0.0 CDN-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- Just an image -->
<nav class="navbar navbar-light bg-light">
  <div class="container">
    <div class="row">
 		<div class="col-6"> <a class="navbar-brand" href="<?php echo base_url();?>">
    <img src="https://sangkuriang.co.id/wp-content/uploads/2019/07/logo-sangkuraing-landscape.png" alt="logo" width="50%;"></a></div>
        <div class="col-6 col-6-md-4">
            <ul class="nav nav-pills justify-content-end">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?php echo base_url();?>index.php/Pages/about_us" id="navbardrop" data-toggle="dropdown">ABOUT US</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">VISION, MISSION AND VALUE</a>
              <a class="dropdown-item" href="#">OUR HISTORY</a>
              <a class="dropdown-item" href="<?php echo base_url();?>index.php/Pages/Portofolio">PORTOFOLIO</a>
            
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              SERVICES
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">BIG DATA INTELLIGENCE</a>
              <a class="dropdown-item" href="#">INFORMATION SYSTEM</a>
              <a class="dropdown-item" href="#">IT PLANNING</a>
              <a class="dropdown-item" href="#">IT PROCUREMENT</a>
              <a class="dropdown-item" href="#">WEB PORTAL</a>
              <a class="dropdown-item" href="#">DATA CENTER</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              ATOS
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">AERIAL SIGNAL FINDER(FLASH HAWK)</a>
              <a class="dropdown-item" href="#">CELLULER COMMUNICATION INTELLIGENCE (COMINT)</a>
              <a class="dropdown-item" href="#">JAMMER FOR NAVAL SIP</a>
              <a class="dropdown-item" href="#">JAMMER FOR VIP</a>
              <a class="dropdown-item" href="#">OPENSCAPE</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php/Pages/contact_us">CONTACT US</a>
          </li>
        </ul>
      
    </div>
  </div>
  </div>
</nav>

</head>

<body>
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <!-- Wrapper for slides-->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://sangkuriang.co.id/wp-content/uploads/2019/07/about-us.jpg"  class="d-block w-100" alt="About Us">
		    <div class="carousel-caption">
          <a href="#">
            <h3>ABOUT US</h3>
          </a>
          <h1>SANGKURIANG</h1>
              <h6>We are PT Sangkuriang Internasional, a company based in Indonesia since 2010. We focused on Information Technology products and services. We have a wide range of solutions that will suit your business.</h6>
	      </div>	  
	    </div>

    <div class="carousel-item">
        <img class="d-block w-100" src="https://sangkuriang.co.id/wp-content/uploads/2019/07/product.jpg" class="d-block img-fluid" alt="Product">
		<div class="carousel-caption">
        <h1>Product</h1>
        <p>We have more than 50 portfolio of IT projects that we have finished since 2010.</p>
	  </div>	  
	  </div>
    
      <div class="carousel-item">
        <img class="d-block w-100" src="https://sangkuriang.co.id/wp-content/uploads/2019/07/service.jpg" class="d-block img-fluid" alt="Service">
		<div class="carousel-caption">
        <h1>Services</h1>
        <p figure class="text-left">
        We have full-fledged IT solution services. Our top 6 services are: Big Data & Intelligence, Information System, IT Planning, IT Procurement, Web Portal, and Data Center.</p>
	  </div>
  	  </div>
	  
	  <div class="carousel-item">
      <img class="d-block w-100" src="https://sangkuriang.co.id/wp-content/uploads/2019/07/portfolio.jpg" class="d-block img-fluid" alt="Protofolio">
      <div class="carousel-caption">
        <h1>Portofolio</h1>
        <p>We have more than 50 portfolio of IT projects that we have finished since 2010.</p>
	  </div>
	  </div>

      <div class="carousel-item">
      <img class="d-block w-100" src="https://sangkuriang.co.id/wp-content/uploads/2019/07/contact-us.jpg" class= "img-fluid" alt="Contact Us">
      <div class="carousel-caption">
        <h1>Contact Us</h1>
        <p>Lets have a meet up to discuss your idea to improve your business! Please feel free to contact us at our email, phone, or come by at our offices"</p>
	  </div>
	  </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
  </div>


<!--Card sliding-->
<div class="container">
<section id="pagearea">
  <div class="container-fluids">
  <div class="card-deck">
    <div class="row">
      <!--card1-->
      <div class="col-md-3"> 
            <div class="card" style="width: 15rem;">
                <img src="https://sangkuriang.co.id/wp-content/uploads/2019/07/about-us.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h3 class="card-title">ABOUT US</h3>
                    <p class="card-text">We are PT Sangkuriang Internasional, a company based in Indonesia since 2010. We focused on Information Technology products and…</p>
                    <a href="index.php/Pages/about_us" class="btn btn-primary">READ MORE</a>
                  </div>
            </div>  
      </div>
      <!--card2-->
      <div class="col-md-3"> 
            <div class="card" style="width: 15rem;">
                <img src="https://sangkuriang.co.id/wp-content/uploads/2019/07/service.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h3 class="card-title">SERVICES</h3>
                    <p class="card-text">We have full-fledged IT solution services. Our top 6 services are: Big Data & Intelligence, Information System, IT Planning,…</p>
                    <a href="index.php/Pages/Service" class="btn btn-primary">READ MORE</a>
                  </div>   
          </div>
        
      </div>
      <!--card 3-->
      <div class="col-md-3"> 
            <div class="card" style="width: 15rem;">
                <img src="https://sangkuriang.co.id/wp-content/uploads/2019/07/product.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h3 class="card-title">PRODUCT</h3>
                    <p class="card-text">We have many innovative products available. Our top 4 products are: Property Viewer (3D apps to promote property selling),…</p>
                    <a href="#" class="btn btn-primary">READ MORE</a>
                  </div>
            </div>  
        
      </div> 
      <!--card 4-->
      <div class="col-md-3"> 
            <div class="card" style="width: 15rem;">
                <img src="https://sangkuriang.co.id/wp-content/uploads/2019/07/portfolio.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h3 class="card-title">PORTOFOLIO</h3>
                    <p class="card-text">We have more than 50 portfolio of IT projects that we have finished since 2010.</p>
                    <a href="index.php/Pages/portofolio" class="btn btn-primary">READ MORE</a>
                  </div>
            </div>  
      </div>
    </div>
</div>                   
  </div>
</section>
</div>

<!--Our Services-->
<h2 style="text-align:center;">OUR SERVICES</h2><br>
<section id="blok" class="content">
<div class="container container-fluid">
<div class="row">  
<div class="card-deck">
      <!--card1-->
              <div class="card">
                  <img src="https://i2.wp.com/sangkuriang.co.id/wp-content/uploads/2019/07/big-data-inteligence.jpg?" class="card-img-top" alt="">
                  <div class="card-body">
                      <h4 class="card-title">BIG DATA INTELLIGENCE</h4>
                      <p class="card-text">If You need to extract meaningful information from a huge size of Data which is unstructured or varies.</p>
                      <a href="#" class="btn btn-link">READ MORE</a>
                  </div>
              </div>
              <div class="clear"></div>  
        <!--card2-->
              <div class="card">
                  <img src="https://i0.wp.com/sangkuriang.co.id/wp-content/uploads/2019/07/information-system.jpg?" class="card-img-top" alt="">
                  <div class="card-body">
                      <h4 class="card-title">INFORMATION SYSTEM</h4>
                      <p class="card-text">If You have a running business process, and You think applications can help Your team work better and more efficient.</p>
                      <a href="#" class="btn btn-link">READ MORE</a>
                    </div>   
            </div>
            <div class="clear"></div>
        <!--card 3-->
              <div class="card">
                  <img src="https://i1.wp.com/sangkuriang.co.id/wp-content/uploads/2019/07/IT-planning.jpg?" class="card-img-top" alt="">
                  <div class="card-body">
                      <h4 class="card-title">IT PLANNING</h4>
                      <p class="card-text">If Your business wants to make a drastic improvement and growth, start with a good planning of the IT in every business line.</p>
                      <a href="#" class="btn btn-link">READ MORE</a>
                  </div>
              </div> 
              <div class="clear"></div>   
  </div> 
</div>
  <div class="clear"></div>
  <div class="clear"></div>
  <div class="row">
    <div class="card-deck">  
          <!--card 4-->
                <div class="card">
                    <img src="https://i2.wp.com/sangkuriang.co.id/wp-content/uploads/2019/07/IT-procurement.jpg?" class="card-img-top" alt="">
                    <div class="card-body">
                        <h4 class="card-title">IT PROCUREMENT</h4>
                        <p class="card-text">If You need IT products for your business whether Hardware, Software, Outsource, 3rd party services, etc.</p>
                        <a href="index.php/Pages/portofolio" class="btn btn-link">READ MORE</a>
                      </div>
                </div>  
          <!--card 5-->
                <div class="card">
                    <img src="https://i2.wp.com/sangkuriang.co.id/wp-content/uploads/2019/07/web-portal.jpg?" class="card-img-top" alt="">
                    <div class="card-body">
                        <h4 class="card-title">WEB PORTAL</h4>
                        <p class="card-text">If You need a website to publish information to public, whether a Company Profile, a Forum, a Blog, etc.</p>
                        <a href="#" class="btn btn-link">READ MORE</a>
                      </div>   
              </div> 
          <!--card 6-->
              <div class="card">
                  <img src="https://i1.wp.com/sangkuriang.co.id/wp-content/uploads/2019/07/data-center.jpg?" class="card-img-top" alt="">
                  <div class="card-body">
                      <h4 class="card-title">DATA CENTER</h4>
                      <p class="card-text">If You need place to store and run your IT infrastructure especially servers and network devices.</p>
                      <a href="#" class="btn btn-link">READ MORE</a>
                  </div>
              </div>  

    </div> 
  </div>

</section>

<div class="clear"></div>

<section class="footer">
<div class="jumbotron">
  <div class="container">
    <div class="row">
      <div class="col-4">
      <p class="text">If You need place to store and run your IT infrastructure especially servers and network devices.</p>
      </div>
      <div class="col-4">
      <p class="text">Cobalah mengerti, semua ini menjadi arti. selamanya takkan berhenti.</p>
      <a href="linkgan">linkgan</a>
      </div>
      <div class="col-4">
      <p class="text">Inginkan rasakan, rindu ini menjadi satu. biar waktu yang memisahkan.</p>
      </div>
    </div>
    

</div>  
</section>
</body>
</html>