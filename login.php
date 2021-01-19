<?php 
  session_start();
   include 'db.php';  
  if($_POST){
    $email=$_POST['email'];
    $pass=trim($_POST['pass']);
      $select="select userId from users where email=' ".$email." ' and password= ".$pass."";  
      $run=mysqli_query($connection,$select);
      if($run){
          $row = mysqli_fetch_assoc($run);

          $_SESSION['userId']=$row['userId'];
          if($row>0){
            header('location: news.php');}
      }else{
        echo " you dont have permition";
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
    <!-- google login -->
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="331395799611-b8mqsoq58mcrp651f1juk9egt5372bq4.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>

</head>
<body>
 
      <div class="login container-fluid">
        <form action="" method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Forget Your Password</label>
            </div>
            <button type="submit" class="btn btn-primary">Log In</button>
            <a  class="m-1 btn btn-success" href="regist.php">Regist Now</a>
            <button class="btn btn-primary g-signin2" data-onsuccess="onSignIn" data-theme="dark"></button>
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

   <script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>