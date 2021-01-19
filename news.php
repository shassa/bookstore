<?php 
  session_start();
include 'db.php';
$qary='SELECT * FROM users WHERE userId='.$_SESSION['userId'].'';
$run=mysqli_query($connection,$qary);
$row=mysqli_fetch_assoc($run);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,700" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="news.css" rel="stylesheet" />
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/fontawesome-free-5.15.1-web/css/all.css">
</head>
<body>
    <div class="bg">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">BOOK STORE</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="float-right" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="news.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="bloge.html" tabindex="-1" aria-disabled="true">BLOGE</a>
                  </li>
                  <li class="nav-item">
                    <button class="nav-link btn btn-primary text-light"  tabindex="-1" aria-disabled="true">
                    <img src="<?php echo"image/".$row['image'];?>" height="20px">
                    <?php echo $row['userName']?></button>
                  </li>
                 
                </ul>
              </div>
            </div>
          </nav>
        <h1>--Read & Think--</h1>
    </div>
    <div >
        <h2>Choose Your Story & Read an idea</h2>
    </div>
    <div class="container">
        <div class="row h-md-75vh h-sm-85vh h-xs-75vh">
            <?php 
             $select="SELECT * FROM animes";
             $run=mysqli_query($connection,$select);
            while($row = mysqli_fetch_assoc($run)){
                    $image=$row['image'];
                   $title=$row['title'];
                   $id=$row['animeId'];
                echo ' <div class="col-md-4 col-sm-6 col-xs-12 " >
                    <div class="card">
                        <div class="move">  
                         <img src=" '.$image.'" class="card-img-top">
                            <div class="card-body">
                            <h5 class="card-title">'.$title.'</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card content.</p> 
                            </div>
                        </div>
                        <a href="story.php?id='.$id.'" class="btn btn-primary">Read the story</a>
                    </div>
                </div>
                ';}?>
         </div> 
    </div>
    <div>
        <h2> Our Services </h2>
    </div>
    <div class="er"></div>
    <div class="container tr" id="try">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 ser">
                <i class="fas fa-folder-open"></i>
                <h3> Uplode New story</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore, amet harum quasi explicabo,
                     maiores illum culpa iste deserunt ipsa natus facilis temporibus perspiciatis delectus nulla a? Enim ea nesciunt doloribus?</p>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 ser">
                <i class="fas fa-download"></i>
                <h3> Download a Story</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore, amet harum quasi explicabo,
                     maiores illum culpa iste deserunt ipsa natus facilis temporibus perspiciatis delectus nulla a? Enim ea nesciunt doloribus?</p>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 ser">
                <i class="fas fa-tools"></i>
                <h3> Easy Custimatize</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore, amet harum quasi explicabo,
                     maiores illum culpa iste deserunt ipsa natus facilis temporibus perspiciatis delectus nulla a? Enim ea nesciunt doloribus?</p>
            </div>
        </div>    
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 ser">
                    <i class="fas fa-assistive-listening-systems"></i>
                    <h3> Listen to a story</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore, amet harum quasi explicabo,
                         maiores illum culpa iste deserunt ipsa natus facilis temporibus perspiciatis delectus nulla a? Enim ea nesciunt doloribus?</p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 ser">
                    <i class="fas fa-microphone"></i>
                    <h3> Record a Story</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore, amet harum quasi explicabo,
                         maiores illum culpa iste deserunt ipsa natus facilis temporibus perspiciatis delectus nulla a? Enim ea nesciunt doloribus?</p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 ser">
                    <i class="fas fa-file-powerpoint"></i>
                    <h3> Add a Topic</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore, amet harum quasi explicabo,
                         maiores illum culpa iste deserunt ipsa natus facilis temporibus perspiciatis delectus nulla a? Enim ea nesciunt doloribus?</p>
                </div>

          </div>

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
   <!-- jQary CDN -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="news.js"></script>
</body>
</html>