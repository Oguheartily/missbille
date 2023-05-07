<?php require ('sqlConnect.php');?>
<!DOCTYPE html>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">
    <meta name="author" content="OGU HEARTILY PASISI, PASCOTECH for NATIONAL UNION OF BILLE STUDENTS & MISSBILLE PAGEANTRY">
    <meta name="description" content="Missbille is a Private Pageantry Organisation for only Bille Indegenes of rivers State, Nigeria.">
    <!-- this is a meta tag with comma seperated multi-rule content for bots to index the page for SEO -->
    <meta name="robots" content="index, follow, max-snippet:-1">
    <meta name="googlebot" content="index, follow">
    <title><?php require_once("title.php"); echo $siteName. $photogallery;?></title>
    <!-- FAVICON - BROWSER ICON -->
    <link rel="icon" href="../images/missbilleLogo.ico" type="image/ico">
    <!-- FONT AWESOME CSS LINK -->
    <link rel="stylesheet" href="../../fontawesome5/css/all.min.css">
    <!-- BOOTSTRAP OFFLINE CSS LINK -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- SITE CSS STYLESHEET -->
    <link rel="stylesheet" href="../css/mbstyle.css">
    
    <style>
      img { width: 100%;}
      #myImg{
        object-fit: cover;
        -o-object-fit: cover;        
      }
      /* bootstrap accordion button tweaks */
      .accordion-button{background-color: silver;}
      .accordion-button:hover {
        color: #fff;
        background-color: #000;
      }
      .previousimage, .nextimage {
          cursor: pointer;
          position: absolute;
          top: 60%;
          padding: 5px 15px;
          color: #fff;
          font-weight: normal;
          text-align: center;
          font-size: 30px;
          transition: 0.6s ease;
          user-select: none;
          border-radius: 100px;
          background-color: rgb(255, 255, 255, 0.05);
          text-decoration: none;
      }
      .previousimage {
          left: 5%;
      }
      .nextimage {
          right: 5%;
      }
      .previousimage:hover, .nextimage:hover{
          background-color: rgba(0, 0, 0, 0.8);
      }
    </style>
</head>
<body>
<Noscript>THIS SITE REQUIRES JAVASCRIPT TO RUN, ENABLE JAVASCRIPT IN BROWSER</Noscript>
    <!-- NAVIGATION -->
    <?php include ('header.php');?>
    <!-- END OF NAVIGATION -->
    
    <!-- MAIN PAGE ARTICLES -->
    <div class="container">
    <div class="accordion" id="photoaccordion">
    <!-- 2023 Edition -->
    <div class="accordion-item mt-1">
      <h2 class="accordion-header" id="heading2">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
          2023 Edition
        </button>
      </h2>
      <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#photoaccordion">
        <div class="accordion-body">
            <div class="row">
              <?php
              $retrievalsql23 = mysqli_query($db_connect, "SELECT * FROM yr23 ORDER BY id DESC");
              /**if content in database is greater than zero */
              if (mysqli_num_rows($retrievalsql23) > 0){
                while ($images23 = mysqli_fetch_assoc($retrievalsql23)) { ?>
                  <div class="col-3 col-sm-3">
                    <!-- if only the image name was saved in the database, this is how it will be retrieved -->
                    <img class="pb-2 gallery-item" src="../gallery/yr22/<?=$images23['gal_image_url']?>" alt="<?=$images23['gal_caption']?>">
                  </div>
            <?php }  } ;?>
            </div>
        </div>
      </div>
    </div>
    
    <!-- 2022 Edition -->
    <div class="accordion-item mt-1">
      <h2 class="accordion-header" id="heading3">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
          2022 Edition
        </button>
      </h2>
      <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#photoaccordion">
        <div class="accordion-body">
        <div class="row">
            <?php
              $retrievalsql22 = mysqli_query($db_connect, "SELECT * FROM yr22 ORDER BY id DESC");
              /**if content in database is greater than zero */
              if (mysqli_num_rows($retrievalsql22) > 0){
                while ($images22 = mysqli_fetch_assoc($retrievalsql22)) { ?>
                  <div class="col-3 col-sm-3">
                    <!-- if only the image name was saved in the database, this is how it will be retrieved -->
                    <img class="pb-2 gallery-item" src="../gallery/yr22/<?=$images22['gal_image_url']?>" alt="<?=$images22['gal_caption']?>">
                  </div>
            <?php }  } ;?>
          </div>
        </div>
      </div>
    </div>
    <!-- 2021 Edition -->
    <div class="accordion-item mt-1">
      <h2 class="accordion-header" id="heading4">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
          2021 Edition
        </button>
      </h2>
      <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#photoaccordion">
        <div class="accordion-body">
        <div class="row">
            <?php
              $retrievalsql21 = mysqli_query($db_connect, "SELECT * FROM yr21 ORDER BY id DESC");
              /**if content in database is greater than zero */
              if (mysqli_num_rows($retrievalsql21) > 0){
                while ($images21 = mysqli_fetch_assoc($retrievalsql21)) { ?>
                  <div class="col-3 col-sm-3">
                    <!-- if only the image name was saved in the database, this is how it will be retrieved -->
                    <img class="pb-2 gallery-item" src="../gallery/yr21/<?=$images21['gal_image_url']?>" alt="<?=$images21['gal_caption']?>">
                  </div>
            <?php }  } ;?>
          </div>
        </div>
      </div>
    </div>
    <!-- 2019 Edition -->
    <div class="accordion-item mt-1">
      <h2 class="accordion-header" id="heading5">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
          2019 Edition
        </button>
      </h2>
      <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#photoaccordion">
        <div class="accordion-body">
          <div class="row">
            <?php
              $retrievalsql19 = mysqli_query($db_connect, "SELECT * FROM yr19 ORDER BY id DESC");
              /**if content in database is greater than zero */
              if (mysqli_num_rows($retrievalsql19) > 0){
                while ($images19 = mysqli_fetch_assoc($retrievalsql19)) { ?>
                  <div class="col-3 col-sm-3">
                    <!-- if only the image name was saved in the database, this is how it will be retrieved -->
                    <img class="pb-2 gallery-item" src="../gallery/yr19/<?=$images19['gal_image_url']?>" alt="<?=$images19['gal_caption']?>">
                  </div>
              <?php }  } ;?>
          </div>
        </div>
        <!-- end of accordion div -->
      </div>
    </div>
    <!-- 2018 Edition -->
    <div class="accordion-item mt-1">
      <h2 class="accordion-header" id="heading6">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
          2018 Edition
        </button>
      </h2>
      <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#photoaccordion">
        <div class="accordion-body">
        <div class="row">
            <?php
              $retrievalsql18 = mysqli_query($db_connect, "SELECT * FROM yr18 ORDER BY id DESC");
              /**if content in database is greater than zero */
              if (mysqli_num_rows($retrievalsql18) > 0){
                while ($images18 = mysqli_fetch_assoc($retrievalsql18)) { ?>
                  <div class="col-3 col-sm-3">
                    <!-- if only the image name was saved in the database, this is how it will be retrieved -->
                    <img class="pb-2 gallery-item" src="../gallery/yr18/<?=$images18['gal_image_url']?>" alt="<?=$images18['gal_caption']?>">
                  </div>
            <?php }  } ;?>
          </div>
        </div>
      </div>
    </div>
    <!-- 2017 Edition -->
    <div class="accordion-item my-1">
      <h2 class="accordion-header" id="heading7">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
          2017 Edition
        </button>
      </h2>
      <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#photoaccordion">
        <div class="accordion-body">
        <div class="row">
            <?php
              $retrievalsql17 = mysqli_query($db_connect, "SELECT * FROM yr17 ORDER BY id DESC");
              /**if content in database is greater than zero */
              if (mysqli_num_rows($retrievalsql17) > 0){
                while ($images17 = mysqli_fetch_assoc($retrievalsql17)) { ?>
                  <div class="col-3 col-sm-3">
                    <!-- if only the image name was saved in the database, this is how it will be retrieved -->
                    <img class="pb-2 gallery-item" src="../gallery/yr17/<?=$images17['gal_image_url']?>" alt="<?=$images17['gal_caption']?>">
                  </div>
            <?php }  } ;?>
          </div>
        </div>
      </div>
    </div>
    
  
  <!-- final closing tag of accordion -->
</div>
</div>

    <!--------------------- GALLERY MODAL ----------------------->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#galleryModal">Open Modal</button> -->
    <div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="galleryModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
          <div class="modal-header bg-purple">
            <!-- <div class="modal-title" id="galleryModalLabel">Image Caption goes here</div> -->
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- <img class="modal-img" src="" alt=""/> -->
            <img class="modal-img" src="" alt=""/>
            <!-- <a class="previousimage" onclick="changeImage(-1)">&#10094;</a> -->
            <!-- <a class="nextimage" onclick="changeImage(1)">&#10095;</a> -->
            <div id="img-desc">Image Description 2</div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
     <!-- FOOTER SECTION -->
    <?php include ('footer.php');?>
    <!-- END OF FOOTER SECTION -->
  <script>
       /**ad event listener to the entire page, but dont respond to clicks that dont have the specified class */
      document.addEventListener("click", function (e) {
        if (e.target == null || e.target.classList.contains("null")) {
          
        }
        else if (e.target.classList.contains("gallery-item")){
            const src = e.target.getAttribute("src");
            const alt = e.target.getAttribute("alt");

            document.querySelector('.modal-img').src = src;
            document.querySelector('#img-desc').innerHTML = alt;
            const myModal = new bootstrap.Modal(document.getElementById('galleryModal'));
            myModal.show();
        }else{}
        })
     </script>
    <script type="text/javascript"src="../script/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"src="../script/mbScript.js"></script>
    <!-- <script type="text/javascript"src="../script/jquery.js"></script> -->
</body>
</html>

