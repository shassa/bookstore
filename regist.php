<?php     
session_start();
include 'db.php';
?>
<?php
        if(!empty($_POST)){
          $firstname=trim($_POST['firstname']);
          $secandname=trim($_POST['secandname']);
          $username=trim($_POST['username']);
          $phone=trim($_POST['phone']);
          $email=trim($_POST['email']);
          $pass=trim($_POST['pass']);
          // $uploads_dir = '/uploads';
          // foreach ($_FILES["pictures"]["error"] as $key => $error) {
          //     if ($error == UPLOAD_ERR_OK) {
          //         $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
          //         // basename() may prevent filesystem traversal attacks;
          //         // further validation/sanitation of the filename may be appropriate
          //         $name = basename($_FILES["pictures"]["name"][$key]);
          //         move_uploaded_file($tmp_name, "$uploads_dir/$name");
          //     }
          // }
         
          $msg = ""; 
          
          // If upload button is clicked ... 
          if (isset($_POST['upload'])) { 
          
            $filename = $_FILES["uploadfile"]["name"]; 
            $tempname = $_FILES["uploadfile"]["tmp_name"];	 
              $folder = "image/".$filename; 
             $insert="INSERT INTO `users`(`userId`,`firstname`,`secand`,`userName`,`phone`,`email`,`password`,`image`)VALUES(NULL,' $firstname ',' $secandname ',' $username ',' $phone ',' $email ',' $pass ','$filename ')";
         
          // Now let's move the uploaded image into the folder: image 
          if (move_uploaded_file($tempname, $folder)) { 
            $msg = "Image uploaded successfully"; 
          }else{ 
            $msg = "Failed to upload image"; 
            } 
      } 
    
             $run = mysqli_query($connection,$insert);
          if($run){
            echo'<div class=" alert alert-success text"> YOUR REGIST COMPLETED</div>';
             header('Refresh:2 login.php');
          }     
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/fontawesome-free-5.15.1-web/css/all.css">
    <link rel="stylesheet" href="news.css">
   
</head>
<body>
      <div class="login container-fluid">
        <form method="post" enctype="multipart/form-data">
            <div>
              <label for="exampleInputEmail1" class="form-label">First Name</label>
              <input type="text" name="firstname" class="form-control" >
              <div id="emailHelp" class="form-text">We'll never share your Name with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Secand Name</label>
                <input type="text" name="secandname" class="form-control">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">User Name</label>
                <input type="text" class="form-control" name="username">
                <div id="emailHelp" class="form-text">This Name will apper in your profile</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Your phone Numper</label>
                <input type="phone" name="phone"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your phone with anyone else.</div>
              </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Your Image</label>
              <input type="file" name="uploadfile" value="" /> 
              </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Agree in the web police</label>
            </div>
            <button type="submit" name="upload" class="btn btn-primary">Regist</button>
          </form>
      </div>
      <div class="lists container">
        <div class="row">
            <div class="col-6">
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Tweeter</a></li>
                    <li><a href="#">Instgram</a></li>
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">LINked In</a></li>
                </ul>
            </div>  
            <div class="col-6">
                <ul>
                    <li><a href="#">Contact US</a></li>
                    <li><a href="#">Our Partenar</a></li>
                    <li><a href="#">Best Stories</a></li>
                    <li><a href="#">Write A Story</a></li>
                </ul>
            </div>           
        </div>
    </div>
   <div class="footer">
       <p> cope right made by Nashwa Hassan</p>
       <i class="fas fa-bahai"></i>
   </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>