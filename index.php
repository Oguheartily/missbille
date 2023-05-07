<?php require ('pages/sqlConnect.php');?>
<!DOCTYPE html>
<head>
  <meta lang="en">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">
  <meta name="author" content="OGU HEARTILY PASISI, PASCOTECH for NATIONAL UNION OF BILLE STUDENTS & MISSBILLE PAGEANTRY">
  <meta name="description" content="Missbille is a Private Pageantry Organisation for only Bille Indegenes of rivers State, Nigeria.">
  <!-- this is a meta tag with comma seperated multi-rule content for bots to index the page for SEO -->
  <meta name="robots" content="index, follow, max-snippet:-1">
  <meta name="googlebot" content="index, follow">
  <title><?php require_once("pages/title.php"); echo $siteName;?></title>
  <!-- FAVICON - BROWSER ICON -->
  <link rel="icon" href="images/missbilleLogo.ico" type="image/ico">
  <!-- FONT AWESOME CSS LINK -->
  <link rel="stylesheet" href="../fontawesome5/css/all.min.css">
  <!-- BOOTSTRAP OFFLINE CSS LINK -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- SITE CSS STYLESHEET -->
  <link rel="stylesheet" href="css/mbstyle.css">
</head>
<body>
    <Noscript>THIS SITE REQUIRES JAVASCRIPT TO RUN, ENABLE JAVASCRIPT IN BROWSER</Noscript>
    <!-- NAVIGATION -->
    <nav class="navbar sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand py-2" href="index.php"><img src="images/missbilleLogo.ico" alt="missbille-logo" class="image-responsive" id="missbilleLogo"></a>
            <button class="navbar-toggler fa fa-bars" type="button" data-bs-toggle="collapse" 
            data-bs-target="#hiddenMenu">
            </button>
            <div class="collapse navbar-collapse" id="hiddenMenu">
                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item active"><a class="nav-link h5" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link h5" href="pages/photogallery.php">Photo Gallery</a></li>
                    <li class="nav-item"><a class="nav-link h5" href="pages/videoarchive.php">Video Archive</a></li>
                    <li class="nav-item"><a class="nav-link h5" href="pages/contestants.php">Contestants</a></li>
                    <li class="nav-item"><a class="nav-link h5" href="#" data-bs-toggle="modal" data-bs-target="#mbDonation">Donation</a></li>
                    <li class="nav-item"><a class="nav-link h5" href="pages/mbHistory.php">Our History</a></li>
                    <li class="nav-item"><a class="nav-link h5" href="#" data-bs-toggle="modal" data-bs-target="#faq">FAQ</a></li>
                    <li class="nav-item"><a class="nav-link h5" href="#" data-bs-toggle="modal" data-bs-target="#contactUs">Contact Us</a></li>
                    <li class="nav-item" style="height: 20em;"></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- ====== MAIN PAGE CONTENT START ======== -->
  <main class="container">
    <!-- ==== IMAGE SLIDE SHOW START ==== -->
    
    <!-- ===== IMAGE SLIDE SHOW END ===== -->
    <!-- ************Video Gallery Section*********** -->
    <article id="videogallery">
      <h2 class="btn-secondary text-center py-2">Most Recent Event Videos</h2>
      <div class="row">
        <!-- card start -->
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
        <div class="card">
          <div class="ratio ratio-16x9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/7zlcyMm-hQQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">History of Bille Kingdom</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        </div>
        <!-- card end -->

        <!-- card start -->
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
        <div class="card">
          <div class="ratio ratio-16x9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/sQ8drE9VAuI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>          </div>
          <div class="card-body">
            <h5 class="card-title text-center">History of Bille Kingdom</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        </div>
        <!-- card end -->
        
      </div>
      <!-- row end -->
      <div class="col-12">
        <a href="pages/videoarchive.php" class="btn btn-primary p-2 my-3">View More Videos...</a>
      </div>
    </article>

    
  </main>
  <!-- ===== MAIN PAGE CONTENT END ===== -->
    <!-- FOOTER -->
    <footer>
        <div class="container footer py-3">
            <div class="row">
                <div class="col-12">
                <div class="fas fa-phone">&nbsp;&nbsp;+23489432222265</div><br><br>
                <div class="fas fa-map-marker-alt">&nbsp;&nbsp;&nbsp;Bille Kingdom, Port-Harcourt City</div><br><br>
                <div class="fas fa-envelope">&nbsp;&nbsp;<a href="mailto:missbillekingdom@gmail.com" id="mbemail">missbillekingdom@gmail.com</a></div><br>
                </div>
                <!-- 12 col span above, 6, 6 cols below -->
                <div class="col-12"><hr class="light col-12"></div>
                <h5 class="text-center grayColor">Let's Connect</h5>
                <div class="col-12"><hr class="light"></div>
                <div class="col-6">
                    <p><a href="https://web.facebook.com/profile.php?id=100089238085856" target="_blank"><i class="fab fa-facebook-square">&nbsp;&nbsp;&nbsp;facebook</i></a></p>
                </div>
                <div class="col-6">
                    <p><a href="https://www.instagram.com/betmystro/?next=%2F" target="_blank"><i class="fab fa-instagram">&nbsp;&nbsp;&nbsp;instagram</i></a></p>
                </div>
                <div class="col-6">
                    <p><a href="https://twitter.com/Bet_mystro" data-show-count="false" target="_blank"><i class="fab fa-twitter">&nbsp;&nbsp;&nbsp;twitter</i><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></a></p>
                </div>
                <div class="col-6">
                    <p><a href="https://www.youtube.com/channel/UCwd6T7Mg1KMIgqPSW7vDscQ" target="_blank"><i class="fab fa-youtube me-2">&nbsp;&nbsp;&nbsp;youtube</i></a></p> 
                </div>

                <div class="col-12"><hr class="light-100"></div>
                <address class="text-center" id="footnote"><?php echo $footerAddress;?></address>
                <div class="col-12 text-center">
                    <hr class="light-100">
                    <p>Copyright &copy; 2021 - 
                        <span class="text-info"><?php echo date('Y');?></span> Missbille Management & National Union of Bille Students (NUBS)
                    </p>
                </div>
            </div>
        </div>
    </footer>
  
    <!-- DONATIONS MODAL -->
    <div class="modal fade" id="mbDonation" tabindex="-2" aria-labelledby="mbDonationLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content">
          <div class="modal-header bg-success">
            <h5 class="modal-title" id="mbDonationLabel">DONATION / SUPPORT</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <?php include ("pages/donation.php");?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- FAQ MODAL -->
    <div class="modal fade" id="faq" tabindex="-2" aria-labelledby="faqLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content">
          <div class="modal-header bg-warning">
            <h5 class="modal-title" id="faqLabel">FAQ PAGE</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <?php include ("pages/faq.php");?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- ContactUs Modal -->
    <div class="modal fade" id="contactUs" tabindex="-3" aria-labelledby="contactUsLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
          <div class="modal-header bg-info">
            <h5 class="modal-title" id="contactUsLabel">CONTACT US</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <?php include ("pages/contactUs.php");?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="script/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="script/mbScript.js"></script>
</body>
</html>