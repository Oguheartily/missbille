<nav class="navbar sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand py-2" href="../index.php"><img src="../images/missbilleLogo.ico" alt="missbille-logo" class="image-responsive" id="missbilleLogo"><?php require("title.php");?></a>
            <button class="navbar-toggler fa fa-bars" type="button" data-bs-toggle="collapse" 
            data-bs-target="#hiddenMenu">
            </button>
            <div class="collapse navbar-collapse" id="hiddenMenu">
                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item active"><a class="nav-link h5" href="../index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link h5" href="photogallery.php">Photo Gallery</a></li>
                    <li class="nav-item"><a class="nav-link h5" href="videoarchive.php">Video Archive</a></li>
                    <li class="nav-item"><a class="nav-link h5" href="contestants.php">Contestants</a></li>
                    <li class="nav-item"><a class="nav-link h5" href="#" data-bs-toggle="modal" data-bs-target="#mbDonation">Donation</a></li>
                    <li class="nav-item"><a class="nav-link h5" href="mbHistory.php">Our History</a></li>
                    <li class="nav-item"><a class="nav-link h5" href="#" data-bs-toggle="modal" data-bs-target="#faq">FAQ</a></li>
                    <li class="nav-item"><a class="nav-link h5" href="#" data-bs-toggle="modal" data-bs-target="#contactUs">Contact Us</a></li>
                    <li class="nav-item" style="height: 22em;"></li>
                </ul>
            </div>
        </div>
    </nav>

<!-- DONATIONS MODAL -->
<div class="modal fade" id="mbDonation" aria-labelledby="mbDonationLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header bg-success">
            <h5 class="modal-title" id="mbDonationLabel">DONATION / SUPPORT</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <?php include ("donation.php");?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- FAQ MODAL -->
    <div class="modal fade" id="faq" aria-labelledby="faqLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header bg-warning">
            <h5 class="modal-title" id="faqLabel">FAQ PAGE</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <?php include ("faq.php");?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- ContactUs Modal -->
    <div class="modal fade" id="contactUs" aria-labelledby="contactUsLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header bg-info">
            <h5 class="modal-title" id="contactUsLabel">CONTACT US</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <?php include ("contactUs.php");?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>