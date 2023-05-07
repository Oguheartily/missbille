<?php require ('sqlConnect.php');?>

<?php
/**  ***********----------------- CONTESTANTS ----------------**************** */
    /**prototype function to create input field with each call */
    function inputFields($placeholder,$name,$value,$type){
        $inputFieldVariable = "
            <div class=\"form-group my-3\"><div>$placeholder</div>
                <input type='$type' name ='$name' placeholder='$placeholder' class=\"form-control\" value='$value' autocomplete=\"off\" required>
            </div>";
            /**this is what displays the input fields to the function caller page  */
        echo $inputFieldVariable;
    }
    ?>
    <?php 
    /** CODE BLOCK FOR PROCESSING CONTESTANT UPLOAD */
if(isset($_POST['submitbtn'])){
    $contestant_name=$_POST['contestant_name'];
    $dob=$_POST['dob'];
    $height=$_POST['height'];
    $category=$_POST['category'];
    $institution=$_POST['institution'];
    $hobbies=$_POST['hobbies'];
    $modeldescription=$_POST['modeldescription'];
    $contestant_photo=$_FILES['contestant_photo'];
    $contestantyear =$_POST['contestantyear'];

    $contestantuploadmsg = "";
    $contestantuploadfail = "";
   
    /**each component of the image can be accessed and displayed */
    $cont_img_name = $contestant_photo['name'];
    /**here, we access the temporary file name */
    $cont_img_tmp_name = $contestant_photo['tmp_name'];
    /**here, we seperate the file name from its extension */
    $image_name_extension_seperated=explode('.',$cont_img_name);
    /**Method 2 display extention */
    $image_extension=strtolower(end($image_name_extension_seperated));
    $extension_check = array('jpeg','JPEG','jpg','png','PNG','gif');
    /**check if the ext of the uploaded image matches any of the extensions in the checker array */
    if (in_array($image_extension,$extension_check)) {
        if($contestantyear == "contest17"){ 
            $cont_img_upload_path = '../contestantimages/contestants17/'.$cont_img_name;
            move_uploaded_file($cont_img_tmp_name, $cont_img_upload_path);
            $contestantsql = mysqli_query($db_connect,"INSERT INTO contestants17(contestant_name,dob,height,category,institution,hobbies,modeldescription,contestant_image) VALUES('$contestant_name','$dob','$height','$category','$institution','$hobbies','$modeldescription','$cont_img_name')");
            $contestantuploadmsg="contestant uploaded successfuly and selected year is 2017";
        }
        else if($contestantyear == "contest18"){ 
            $cont_img_upload_path = '../contestantimages/contestants18/'.$cont_img_name;
            move_uploaded_file($cont_img_tmp_name, $cont_img_upload_path);
            $contestantsql = mysqli_query($db_connect,"INSERT INTO contestants18(contestant_name,dob,height,category,institution,hobbies,modeldescription,contestant_image) VALUES('$contestant_name','$dob','$height','$category','$institution','$hobbies','$modeldescription','$cont_img_name')");
            $contestantuploadmsg="contestant uploaded successfuly and selected year is 2018";
        }
        else if($contestantyear == "contest19"){ 
            $cont_img_upload_path = '../contestantimages/contestants19/'.$cont_img_name;
            move_uploaded_file($cont_img_tmp_name, $cont_img_upload_path);
            $contestantsql = mysqli_query($db_connect,"INSERT INTO contestants19(contestant_name,dob,height,category,institution,hobbies,modeldescription,contestant_image) VALUES('$contestant_name','$dob','$height','$category','$institution','$hobbies','$modeldescription','$cont_img_name')");
            $contestantuploadmsg="contestant uploaded successfuly and selected year is 2019";
        }
        else if($contestantyear == "contest21"){ 
            $cont_img_upload_path = '../contestantimages/contestants21/'.$cont_img_name;
            move_uploaded_file($cont_img_tmp_name, $cont_img_upload_path);
            $contestantsql = mysqli_query($db_connect,"INSERT INTO contestants21(contestant_name,dob,height,category,institution,hobbies,modeldescription,contestant_image) VALUES('$contestant_name','$dob','$height','$category','$institution','$hobbies','$modeldescription','$cont_img_name')");
            $contestantuploadmsg="contestant uploaded successfuly and selected year is 2021";
        }
        else if($contestantyear == "contest22"){ 
            $cont_img_upload_path = '../contestantimages/contestants22/'.$cont_img_name;
            move_uploaded_file($cont_img_tmp_name, $cont_img_upload_path);
            $contestantsql = mysqli_query($db_connect,"INSERT INTO contestants22(contestant_name,dob,height,category,institution,hobbies,modeldescription,contestant_image) VALUES('$contestant_name','$dob','$height','$category','$institution','$hobbies','$modeldescription','$cont_img_name')");
            $contestantuploadmsg="contestant uploaded successfuly and selected year is 2022";
        }
        else if($contestantyear == "contest23"){ 
            $cont_img_upload_path = '../contestantimages/contestants23/'.$cont_img_name;
            move_uploaded_file($cont_img_tmp_name, $cont_img_upload_path);
            $contestantsql = mysqli_query($db_connect,"INSERT INTO contestants23(contestant_name,dob,height,category,institution,hobbies,modeldescription,contestant_image) VALUES('$contestant_name','$dob','$height','$category','$institution','$hobbies','$modeldescription','$cont_img_name')");
            $contestantuploadmsg="contestant uploaded successfuly and selected year is 2023";
        }
        else if($contestantyear == "contest24"){ 
            $cont_img_upload_path = '../contestantimages/contestants24/'.$cont_img_name;
            move_uploaded_file($cont_img_tmp_name, $cont_img_upload_path);
            $contestantsql = mysqli_query($db_connect,"INSERT INTO contestants24(contestant_name,dob,height,category,institution,hobbies,modeldescription,contestant_image) VALUES('$contestant_name','$dob','$height','$category','$institution','$hobbies','$modeldescription','$cont_img_name')");
            $contestantuploadmsg="contestant uploaded successfuly and selected year is 2024";
        }
    }else{
        $contestantuploadfail = "There has been an error, check Database connection, file type must be one of jpeg, jpg, png and be sure to select a year to upload to";
        header("Location: upload.php");
    }
}
?>
<?php
/** ***********----------------- SLIDESHOW ----------------**************** */
$successmsg = '';
$failedmsg = '';
if(isset($_POST['submitSlidePhoto'])){
   $imageCaption = $_POST['caption'];
   $image = $_FILES['image']['name'];
   $path = '../slideshow/'.$image;
   $sqlqry = mysqli_query($db_connect,"INSERT INTO slideshow_images_table (slide_caption,slide_photo) VALUES ('$imageCaption','$path')");
   if($sqlqry){
       // store file in temporary location
       move_uploaded_file($_FILES['image']['tmp_name'],$path);
       $successmsg = 'Image Uploaded Successfully!';
   }
   else {
       $failedmsg = 'Image Upload Failed!!!';
   }
}
else{}
?>
<?php 
/** ***********----------------- GALLERY ----------------**************** */
if (isset($_POST['submitGalleryPhoto']) && isset($_FILES['gallery_photo'])) {
    $galleryyear =$_POST['galleryyear'];
    $img_caption = $_POST['caption'];
    $alerter = "";
    $starterfail = "";

    $img_name = $_FILES['gallery_photo']['name'];
    // $img_size = $_FILES['gallery_photo']['size'];
    $img_tmp_name = $_FILES['gallery_photo']['tmp_name'];
    $error = $_FILES['gallery_photo']['error'];
    $img_ext = pathinfo($img_name, PATHINFO_EXTENSION);
    /**convert string extension to lowercase */
    $img_ext_lc = strtolower($img_ext);
    $allowed_ext = array("jpg", "jpeg", "png");
    // if($error === 0){
    if (in_array($img_ext_lc, $allowed_ext)) {
        if($galleryyear == "yr17"){ 
            $img_upload_path = '../gallery/yr17/'.$img_name;
            move_uploaded_file($img_tmp_name, $img_upload_path);
            $gallerysql = mysqli_query($db_connect,"INSERT INTO yr17(gal_caption,gal_image_url) VALUES ('$img_caption','$img_name')");
            $alerter="image uploaded successfuly and selected year is 2017";
        }
        else if($galleryyear == "yr18"){ 
            $img_upload_path = '../gallery/yr18/'.$img_name;
            move_uploaded_file($img_tmp_name, $img_upload_path);
            $gallerysql = mysqli_query($db_connect,"INSERT INTO yr18(gal_caption,gal_image_url) VALUES ('$img_caption','$img_name')");
            $alerter="image uploaded successfuly and selected year is 2018";
        }
        else if($galleryyear == "yr19"){ 
            $img_upload_path = '../gallery/yr19/'.$img_name;
            move_uploaded_file($img_tmp_name, $img_upload_path);
            $gallerysql = mysqli_query($db_connect,"INSERT INTO yr19(gal_caption,gal_image_url) VALUES ('$img_caption','$img_name')");
            $alerter="image uploaded successfuly and selected year is 2019";
        }
        else if($galleryyear == "yr21"){ 
            $img_upload_path = '../gallery/yr21/'.$img_name;
            move_uploaded_file($img_tmp_name, $img_upload_path);
            $gallerysql = mysqli_query($db_connect,"INSERT INTO yr21(gal_caption,gal_image_url) VALUES ('$img_caption','$img_name')");
            $alerter="image uploaded successfuly and selected year is 2021";
        }
        else if($galleryyear == "yr22"){ 
            $img_upload_path = '../gallery/yr22/'.$img_name;
            move_uploaded_file($img_tmp_name, $img_upload_path);
            $gallerysql = mysqli_query($db_connect,"INSERT INTO yr22(gal_caption,gal_image_url) VALUES ('$img_caption','$img_name')");
            $alerter="image uploaded successfuly and selected year is 2022";
        }
        else if($galleryyear == "yr23"){ 
            $img_upload_path = '../gallery/yr23/'.$img_name;
            move_uploaded_file($img_tmp_name, $img_upload_path);
            $gallerysql = mysqli_query($db_connect,"INSERT INTO yr23(gal_caption,gal_image_url) VALUES ('$img_caption','$img_name')");
            $alerter="image uploaded successfuly and selected year is 2023";
        }
        else if($galleryyear == "yr24"){ 
            $img_upload_path = '../gallery/yr24/'.$img_name;
            move_uploaded_file($img_tmp_name, $img_upload_path);
            $gallerysql = mysqli_query($db_connect,"INSERT INTO yr24(gal_caption,gal_image_url) VALUES ('$img_caption','$img_name')");
            $alerter="image uploaded successfuly and selected year is 2024";
        }
    }else{
        $starterfail = "There has been an error, check Database connection, file type must be one of jpeg, jpg, png";
        header("Location: upload.php");
    }

//     }else{
//         $starterfail = "Unknown Error, please upload another image file";
//         header("Location: upload.php");
//     }
}
else{}
?>

<!DOCTYPE html>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">
    <title>All Uploads</title>
    <!-- FAVICON - BROWSER ICON -->
    <link rel="icon" href="../images/missbilleLogo.ico" type="image/ico">
    <!-- FONT AWESOME CSS LINK -->
    <link rel="stylesheet" href="../../fontawesome5/css/all.min.css">
    <!-- BOOTSTRAP OFFLINE CSS LINK -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- SITE CSS STYLESHEET -->
    <link rel="stylesheet" href="../css/mbstyle.css">
</head>
<body>
    <Noscript>THIS SITE REQUIRES JAVASCRIPT TO RUN, ENABLE JAVASCRIPT IN BROWSER</Noscript>
    <!-- NAVIGATION -->
    <nav class="navbar sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand py-2" href="../index.php"><img src="../images/missbilleLogo.ico" alt="missbille-logo" class="image-responsive" id="missbilleLogo"></a>            
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <!-- *************************************************************************************** -->
            <!-- --------------------- CONTESTANT UPLOAD ----------------------------- -->
            <div class="col-6 pb-4" style="background-color: rgb(199, 232, 236);">
                <!-- INSERTION CONTENT -->
                <h2 class="text-center my-3">Upload Contestant Info</h2>
                <div class="container d-flex justify-content-center">
                    <form method="POST" action="upload.php" class="" enctype="multipart/form-data">
                        <!-- error / success message -->
                        <div class="form-group py-2">
                            <h6 class="text-success text-center"><?php echo @$contestantuploadmsg;?></h6>
                        </div>
                        <div class="form-group py-2">
                            <h6 class="text-center text-danger"><?php echo @$contestantuploadfail;?></h6>
                        </div>
                        <?php
                            inputFields("contestant Name","contestant_name","","text");
                            inputFields("date of birth","dob","","text");
                            inputFields("height","height","","text");
                            inputFields("category","category","","text");
                            inputFields("institution","institution","","text");
                            inputFields("hobbies","hobbies","","text");
                            inputFields("description","modeldescription","","text");
                            inputFields("contestant photo","contestant_photo","","file");
                        ?>
                        <div class="form-group py-3">
                            <select name="contestantyear" class="form-select" id="" required>
                                <option value="">Select Year</option>
                                <option value="contest24">year 2024</option>
                                <option value="contest23">year 2023</option>
                                <option value="contest22">year 2022</option>
                                <option value="contest21">year 2021</option>
                                <option value="contest19">year 2019</option>
                                <option value="contest18">year 2018</option>
                                <option value="contest17">year 2017</option>
                            </select>
                        </div>
                        <button class="btn btn-success" type="submit" name="submitbtn">Add Contestant</button>
                    </form>
                </div>
                </div>
                <!-- ************************************************************************************* -->
                <!-- ------------------- SLIDESHOW CODE BLOCK ---------------------- -->
                <div class="col-6" style="background-color: rgb(224 225 225);">
                <!-- INSERTION CONTENT -->
                <h2 class="text-center my-3">Upload Slideshow Image with Caption</h2>
                <div class="container d-flex justify-content-center py-3">
                    <form method="POST" action="upload.php" enctype="multipart/form-data">
                        <!-- error / success message -->
                        <div class="form-group py-2">
                            <h6 class="text-center text-success"><?php echo @$successmsg;?></h6>
                        </div>
                        <div class="form-group py-2">
                            <h6 class="text-center text-danger"><?php echo @$failedmsg;?></h6>
                        </div>
                        <div class="form-group">
                            <div>Slideshow Caption</div>
                            <input type="text" name="caption" class="form-control" required>
                        </div>
                        <div class="form-group py-3">
                            <div>Image file</div>
                            <input type="file" name="image" class="form-control" required>
                        </div>
                        <div class="row justify-content-center py-4 form-group">
                            <button class="btn btn-primary" type="submit" name="submitSlidePhoto">Upload New Slide Image</button>
                        </div>
                        
                    </form>
                </div>
            </div>
            <!-- ************************************************************************************** -->
            <!-- ------------------------ GALLERY UPLOAD CODE BLOCK -------------------------- -->
            <div class="col-6 pt-4" style="background-color: rgb(224 225 225);">
            <h2 class="text-center my-3"><i class="fas fa-image"></i> Gallery Images</h2>
                <div class="container d-flex justify-content-center py-3">
                    <form method="POST" action="upload.php" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <h5 class="text-center text-success"><?php echo @$alerter;?></h5>
                            <h5 class="text-center text-danger"><?php echo @$alerterfail;?></h5>
                        </div>
                        <div class="form-group py-2">
                            <h5 class="text-center text-warning"><?php ?></h5>
                        </div>
                        <div class="form-group">
                            <div>Image Caption</div>
                            <input type="text" name="caption" class="form-control" required>
                        </div>
                        <div class="form-group py-3">
                            <div>Image file</div>
                            <input type="file" name="gallery_photo" class="form-control" required>
                        </div>
                        <div class="form-group py-3">
                            <select name="galleryyear" class="form-select" id="" required>
                                <option value="">Select Year</option>
                                <option value="yr24">year 2024</option>
                                <option value="yr23">year 2023</option>
                                <option value="yr22">year 2022</option>
                                <option value="yr21">year 2021</option>
                                <option value="yr19">year 2019</option>
                                <option value="yr18">year 2018</option>
                                <option value="yr17">year 2017</option>
                            </select>
                        </div>
                        <div class="row justify-content-center py-4 form-group">
                            <button class="btn btn-primary" type="submit" name="submitGalleryPhoto">Upload New Slide Image</button>
                        </div>
                        
                    </form>
                </div>
            </div>
            <!-- ************************************************************************************** -->
            <div class="col-6" style="background-color: rgb(199, 232, 236);"></div>
        </div>
    </div>
    
   
    
    <script type="text/javascript"src="../script/bootstrap.bundle.min.js"></script>
</body>
</html>