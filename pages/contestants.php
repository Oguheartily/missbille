<?php require ('sqlConnect.php');?>
<!DOCTYPE html>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">
    <meta name="author" content="OGU HEARTILY PASISI, PASCOHTECH for NATIONAL UNION OF BILLE STUDENTS & MISSBILLE PAGEANTRY">
    <meta name="description" content="Missbille is a Private Pageantry Organisation for only Bille Indegenes of rivers State, Nigeria.">
    <!-- this is a meta tag with comma seperated multi-rule content for bots to index the page for SEO -->
    <meta name="robots" content="index, follow, max-snippet:-1">
    <meta name="googlebot" content="index, follow">
    <title><?php require_once("title.php"); echo $siteName. $contestants;?></title>
    <!-- FAVICON - BROWSER ICON -->
    <link rel="icon" href="../images/missbilleLogo.ico" type="image/ico">
    <!-- FONT AWESOME CSS LINK -->
    <link rel="stylesheet" href="../../fontawesome5/css/all.min.css">
    <!-- BOOTSTRAP OFFLINE CSS LINK -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- SITE CSS STYLESHEET -->
    <link rel="stylesheet" href="../css/mbstyle.css">
    <style>
      @media(max-width: 350px){
        #contestantDetails{
        font-size: x-small;
        }
      }
      @media(min-width: 351px) and (max-width: 450px){
        #contestantDetails{
        font-size: small;
        }
      }
      @media(min-width: 451px){
        #contestantDetails{
        font-size: small;
        }
      }
      
    </style>
</head>
<body>
    <Noscript>THIS SITE REQUIRES JAVASCRIPT TO RUN, ENABLE JAVASCRIPT IN BROWSER</Noscript>
    <!-- NAVIGATION -->
    <?php include ('header.php'); ?>
    
    <!-- MAIN PAGE ARTICLES -->
    <div class="container-fluid">
    <div class="accordion" id="contestantaccordion">
    <!-- 2023 CONTESTANTS -->
    <div class="accordion-item mt-1">
      <h2 class="accordion-header" id="heading1">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
          2024 CONTESTANTS
        </button>
      </h2>
      <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#contestantaccordion">
        <div class="accordion-body">
            <div class="row">
              <?php 
              $cont_sqldisplay="SELECT * FROM `contestants24`";
              $contestantresult=mysqli_query($db_connect,$cont_sqldisplay);
              while ($row=mysqli_fetch_assoc($contestantresult)) {
                /**local variables to store the db records */
                $contName=$row['contestant_name'];
                $contdob=$row['dob'];
                $contheight=$row['height'];
                $contcategory=$row['category'];
                $continstitution=$row['institution'];
                $conthobbies=$row['hobbies'];
                $contdesc=$row['modeldescription'];
                $contimage=$row['contestant_image'];

                echo '<div class="col-5 col-xs-6 col-sm-5 col-md-3 col-lg-2 mb-2">
                <img src='."../contestantimages/contestants23/".$contimage.' alt="" class="image-responsive img-thumbnail w-100">
              </div>
              <div class="col-7 col-xs-6 col-sm-7 col-md-3 col-lg-2" >
                <ul id="contestantDetails">
                  <li>NAME: <span>'.$contName.'</span></li>
                  <li>DOB: <span>'.$contdob.'</span></li>
                  <li>HEIGHT: <span>'.$contheight.'</span></li>
                  <li>CATEGORY: <span>'.$contcategory.'</span></li>
                  <li>INSTITUTION: <span>'.$continstitution.'</span></li>
                  <li>HOBBIES: <span>'.$conthobbies.'</span></li>
                  <li>DESCRIPTION: <span>'.$contdesc.'</span></li>
                </ul>
              </div>';
              }
              ?>
            </div>
        </div>
      </div>
    </div>
    <!-- 2024 CONTESTANTS -->
    <div class="accordion-item mt-1">
      <h2 class="accordion-header" id="heading2">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
          2023 CONTESTANTS
        </button>
      </h2>
      <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#contestantaccordion">
        <div class="accordion-body">
            <div class="row">
              <?php 
              $cont_sqldisplay="SELECT * FROM `contestants23`";
              $contestantresult=mysqli_query($db_connect,$cont_sqldisplay);
              while ($row=mysqli_fetch_assoc($contestantresult)) {
                /**local variables to store the db records */
                $contName=$row['contestant_name'];
                $contdob=$row['dob'];
                $contheight=$row['height'];
                $contcategory=$row['category'];
                $continstitution=$row['institution'];
                $conthobbies=$row['hobbies'];
                $contdesc=$row['modeldescription'];
                $contimage=$row['contestant_image'];

                echo '<div class="col-5 col-xs-6 col-sm-5 col-md-3 col-lg-2 mb-2">
                <img src='."../contestantimages/contestants23/".$contimage.' alt="" class="image-responsive img-thumbnail w-100">
              </div>
              <div class="col-7 col-xs-6 col-sm-7 col-md-3 col-lg-2" >
                <ul id="contestantDetails">
                  <li>NAME: <span>'.$contName.'</span></li>
                  <li>DOB: <span>'.$contdob.'</span></li>
                  <li>HEIGHT: <span>'.$contheight.'</span></li>
                  <li>CATEGORY: <span>'.$contcategory.'</span></li>
                  <li>INSTITUTION: <span>'.$continstitution.'</span></li>
                  <li>HOBBIES: <span>'.$conthobbies.'</span></li>
                  <li>DESCRIPTION: <span>'.$contdesc.'</span></li>
                </ul>
              </div>';
              }
              ?>
            </div>
        </div>
      </div>
    </div>
    
    <!-- 2022 CONTESTANTS -->
    <div class="accordion-item mt-1">
      <h2 class="accordion-header" id="heading3">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
          2022 CONTESTANTS
        </button>
      </h2>
      <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#contestantaccordion">
        <div class="accordion-body">
        <div class="row">
        <?php 
              $cont_sqldisplay="SELECT * FROM `contestants22`";
              $contestantresult=mysqli_query($db_connect,$cont_sqldisplay);
              while ($row=mysqli_fetch_assoc($contestantresult)) {
                /**local variables to store the db records */
                $contName=$row['contestant_name'];
                $contdob=$row['dob'];
                $contheight=$row['height'];
                $contcategory=$row['category'];
                $continstitution=$row['institution'];
                $conthobbies=$row['hobbies'];
                $contdesc=$row['modeldescription'];
                $contimage=$row['contestant_image'];

                echo '<div class="col-5 col-xs-6 col-sm-5 col-md-3 col-lg-2 mb-2">
                <img src='."../contestantimages/contestants23/".$contimage.' alt="" class="image-responsive img-thumbnail w-100">
              </div>
              <div class="col-7 col-xs-6 col-sm-7 col-md-3 col-lg-2" >
                <ul id="contestantDetails">
                  <li>NAME: <span>'.$contName.'</span></li>
                  <li>DOB: <span>'.$contdob.'</span></li>
                  <li>HEIGHT: <span>'.$contheight.'</span></li>
                  <li>CATEGORY: <span>'.$contcategory.'</span></li>
                  <li>INSTITUTION: <span>'.$continstitution.'</span></li>
                  <li>HOBBIES: <span>'.$conthobbies.'</span></li>
                  <li>DESCRIPTION: <span>'.$contdesc.'</span></li>
                </ul>
              </div>';
              }
              ?>
          </div>
        </div>
      </div>
    </div>
    <!-- 2021 CONTESTANTS -->
    <div class="accordion-item mt-1">
      <h2 class="accordion-header" id="heading4">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
          2021 CONTESTANTS
        </button>
      </h2>
      <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#contestantaccordion">
        <div class="accordion-body">
        <div class="row">
        <?php 
              $cont_sqldisplay="SELECT * FROM `contestants21`";
              $contestantresult=mysqli_query($db_connect,$cont_sqldisplay);
              while ($row=mysqli_fetch_assoc($contestantresult)) {
                /**local variables to store the db records */
                $contName=$row['contestant_name'];
                $contdob=$row['dob'];
                $contheight=$row['height'];
                $contcategory=$row['category'];
                $continstitution=$row['institution'];
                $conthobbies=$row['hobbies'];
                $contdesc=$row['modeldescription'];
                $contimage=$row['contestant_image'];

                echo '<div class="col-5 col-xs-6 col-sm-5 col-md-3 col-lg-2 mb-2">
                <img src='."../contestantimages/contestants23/".$contimage.' alt="" class="image-responsive img-thumbnail w-100">
              </div>
              <div class="col-7 col-xs-6 col-sm-7 col-md-3 col-lg-2" >
                <ul id="contestantDetails">
                  <li>NAME: <span>'.$contName.'</span></li>
                  <li>DOB: <span>'.$contdob.'</span></li>
                  <li>HEIGHT: <span>'.$contheight.'</span></li>
                  <li>CATEGORY: <span>'.$contcategory.'</span></li>
                  <li>INSTITUTION: <span>'.$continstitution.'</span></li>
                  <li>HOBBIES: <span>'.$conthobbies.'</span></li>
                  <li>DESCRIPTION: <span>'.$contdesc.'</span></li>
                </ul>
              </div>';
              }
              ?>
          </div>
        </div>
      </div>
    </div>
    <!-- 2019 CONTESTANTS -->
    <div class="accordion-item mt-1">
      <h2 class="accordion-header" id="heading5">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
          2019 CONTESTANTS
        </button>
      </h2>
      <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#contestantaccordion">
        <div class="accordion-body">
          <div class="row">
          <?php 
              $cont_sqldisplay="SELECT * FROM `contestants19`";
              $contestantresult=mysqli_query($db_connect,$cont_sqldisplay);
              while ($row=mysqli_fetch_assoc($contestantresult)) {
                /**local variables to store the db records */
                $contName=$row['contestant_name'];
                $contdob=$row['dob'];
                $contheight=$row['height'];
                $contcategory=$row['category'];
                $continstitution=$row['institution'];
                $conthobbies=$row['hobbies'];
                $contdesc=$row['modeldescription'];
                $contimage=$row['contestant_image'];

                echo '<div class="col-5 col-xs-6 col-sm-5 col-md-3 col-lg-2 mb-2">
                <img src='."../contestantimages/contestants23/".$contimage.' alt="" class="image-responsive img-thumbnail w-100">
              </div>
              <div class="col-7 col-xs-6 col-sm-7 col-md-3 col-lg-2" >
                <ul id="contestantDetails">
                  <li>NAME: <span>'.$contName.'</span></li>
                  <li>DOB: <span>'.$contdob.'</span></li>
                  <li>HEIGHT: <span>'.$contheight.'</span></li>
                  <li>CATEGORY: <span>'.$contcategory.'</span></li>
                  <li>INSTITUTION: <span>'.$continstitution.'</span></li>
                  <li>HOBBIES: <span>'.$conthobbies.'</span></li>
                  <li>DESCRIPTION: <span>'.$contdesc.'</span></li>
                </ul>
              </div>';
              }
              ?>
          </div>
        </div>
        <!-- end of accordion div -->
      </div>
    </div>
    <!-- 2018 CONTESTANTS -->
    <div class="accordion-item mt-1">
      <h2 class="accordion-header" id="heading6">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
          2018 CONTESTANTS
        </button>
      </h2>
      <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#contestantaccordion">
        <div class="accordion-body">
          <div class="row">
            <?php 
            $cont_sqldisplay="SELECT * FROM `contestants18`";
            $contestantresult=mysqli_query($db_connect,$cont_sqldisplay);
            while ($row=mysqli_fetch_assoc($contestantresult)) {
              /**local variables to store the db records */
              $contName=$row['contestant_name'];
              $contdob=$row['dob'];
              $contheight=$row['height'];
              $contcategory=$row['category'];
              $continstitution=$row['institution'];
              $conthobbies=$row['hobbies'];
              $contdesc=$row['modeldescription'];
              $contimage=$row['contestant_image'];

              echo '<div class="col-5 col-xs-6 col-sm-5 col-md-3 col-lg-2 mb-2">
              <img src='."../contestantimages/contestants23/".$contimage.' alt="" class="image-responsive img-thumbnail w-100">
            </div>
            <div class="col-7 col-xs-6 col-sm-7 col-md-3 col-lg-2" >
              <ul id="contestantDetails">
                <li>NAME: <span>'.$contName.'</span></li>
                <li>DOB: <span>'.$contdob.'</span></li>
                <li>HEIGHT: <span>'.$contheight.'</span></li>
                <li>CATEGORY: <span>'.$contcategory.'</span></li>
                <li>INSTITUTION: <span>'.$continstitution.'</span></li>
                <li>HOBBIES: <span>'.$conthobbies.'</span></li>
                <li>DESCRIPTION: <span>'.$contdesc.'</span></li>
              </ul>
            </div>';
            }
            ?>
          </div>
        </div>
      </div>
    </div>
    <!-- 2017 CONTESTANTS -->
    <div class="accordion-item my-1">
      <h2 class="accordion-header" id="heading7">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
          2017 CONTESTANTS
        </button>
      </h2>
      <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#contestantaccordion">
        <div class="accordion-body">
          <div class="row">
            <?php 
            $cont_sqldisplay="SELECT * FROM `contestants17`";
            $contestantresult=mysqli_query($db_connect,$cont_sqldisplay);
            while ($row=mysqli_fetch_assoc($contestantresult)) {
              /**local variables to store the db records */
              $contName=$row['contestant_name'];
              $contdob=$row['dob'];
              $contheight=$row['height'];
              $contcategory=$row['category'];
              $continstitution=$row['institution'];
              $conthobbies=$row['hobbies'];
              $contdesc=$row['modeldescription'];
              $contimage=$row['contestant_image'];

              echo '<div class="col-5 col-xs-6 col-sm-5 col-md-3 col-lg-2 mb-2">
              <img src='."../contestantimages/contestants23/".$contimage.' alt="" class="image-responsive img-thumbnail w-100">
            </div>
            <div class="col-7 col-xs-6 col-sm-7 col-md-3 col-lg-2" >
              <ul id="contestantDetails">
                <li>NAME: <span>'.$contName.'</span></li>
                <li>DOB: <span>'.$contdob.'</span></li>
                <li>HEIGHT: <span>'.$contheight.'</span></li>
                <li>CATEGORY: <span>'.$contcategory.'</span></li>
                <li>INSTITUTION: <span>'.$continstitution.'</span></li>
                <li>HOBBIES: <span>'.$conthobbies.'</span></li>
                <li>DESCRIPTION: <span>'.$contdesc.'</span></li>
              </ul>
            </div>';
            }
            ?>
          </div>
        </div>
      </div>
    </div>
    
  
  <!-- final closing tag of accordion -->
</div>
</div>

    <!-- FOOTER -->
    <?php include ('footer.php'); ?>
    <script type="text/javascript"src="../script/bootstrap.bundle.min.js"></script>
</body>
</html>