<!DOCTYPE html>
<head>
    <title>Portofolio</title>

<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
<meta charset="UTF-8"><meta name="viewport" content="width=device-width">

    <!--Bootstrap online 4.0.0 CDN-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<link type="text/css" rel="stylesheet" href="<?php echo base_url('asset/style.css'); ?>"/>

<!-- Just an image -->
<nav class="navbar navbar-light bg-light">
  <div class="container">
    <div class="row">
 		  <div class="col-6"> <a class="navbar-brand" href="<?php echo base_url();?>">
    <img src="https://sangkuriang.co.id/wp-content/uploads/2019/07/logo-sangkuraing-landscape.png" alt="logo" width="50%;"></a></div>
        <div class="col-6 col-6-md-4">
            <ul class="nav nav-pills justify-content-end">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">ABOUT US</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">VISION, MISSION AND VALUE</a>
              <a class="dropdown-item" href="#">OUR HISTORY</a>
              <a class="dropdown-item" href="<?php echo base_url('index.php/Pages/Portofolio');?> ">PORTOFOLIO</a>
            
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
            <a class="nav-link active" aria-current="page" href="contact_us">CONTACT US</a>
          </li>
        </ul>
    </div>
  </div>
  </div>
</nav>

</head>
<body>
    <div class="jumbotron jumbotron-fluid"></div>  
    <section id='blok' class="content">
        <div class="container container-fluid">
            <div class="row">
                <div class="col-lg-9">            
                    <h1 class="judul">PORTFOLIO<h1>
                    <div class="text">
                      <h6>We have more than 50 portfolio of IT projects that we have finished since 2010.</h6>
                    </div>
                </div>
                <div class="col-md">
                <form class="d-flex">
                        <input class="form-control me-2" type="search" name ="keyword" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                      </form>
                </div> 
              </div>  
              <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="<?= base_url(); ?>index.php/Pages/portofolio/tambah " class="btn btn-primary">Add Portofolio</a>
                </div>
                <div class="clear">
                </div>
                </div>
            </div>
            <div class="row">
              <div class="col-lg-8">  
                    <table class= "table table-striped table-hover">
                      <thead>
                        <tr>
                          <td> <strong> Year </strong> </td>
                          <td> <strong> Title </strong> </td>
                          <td> <strong> Client </strong> </td>
                          <td> <strong> Value (in million rupiahs) </strong> </td>
                          <td> <strong> Type </strong> </td>
                        </tr>
                      </thead>
                      <tbody>
                         <?php $no=1; foreach ($portofolio as $d ) {?>
                        <tr>
                          <td><?php echo $d['tahun'] ?></td>
                          <td><?php echo $d['judul'] ?></td>
                          <td><?php echo $d['client'] ?></td>
                          <td><?php echo $d['harga'] ?></td>
                          <td><?php echo $d['type'] ?></td>
                          
                          <td><a href="<?= base_url(); ?>index.php/Pages/portofolio/Ubah/<?= $d['id_portofolio'] ?>" class="badge badge-warning float-center" ?>CHANGE</a></td>
                          
                          <td><a href="<?= base_url(); ?>index.php/Pages/portofolio/hapus/<?= $d['id_portofolio'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>DELETE</a></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>    
                </div>
                <div class="col-md"></div> 
             </div> 
        </div>
    </section>

</body>
</html>