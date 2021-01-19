
<?php  
    session_start();
    include 'db.php';
?>
 <?php   
            if(!empty($_POST)){
            $comment=$_POST['comment'];
            $animeid=$_GET['id'];
            $userid=$_SESSION['userId'];
            $insert= "INSERT INTO `comment` (`commintId`,`usersId`,`animesId`,`comment`)VALUE(null,'$userid','$animeid','$comment')";
            $run = mysqli_query($connection,$insert);
               if($run){
                 echo'<br><br><br><div class="alert alert-success">YOUR COMMENT IS ADDESD</div>';
                 header('refresh:2 story.php?id='.$_GET['id'].'');
               }
            }
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
    <link rel="stylesheet" href="story.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/fontawesome-free-5.15.1-web/css/all.css">
</head>
<body>
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
          <div class="row container">
         <?php 
         $select='SELECT * FROM animes where animeId="'.$_GET['id'].'"';
             $run=mysqli_query($connection,$select);
            while($row = mysqli_fetch_assoc($run)){
                echo'<div class="col-3 main">
                    <img src="'.$row['image'].'" >
                </div>
                <div class="col-9 overflow-auto st">
                        <h2>'.$row['title'].'</h2>
                        '.$row['story'].'
                        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
                        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
                        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
                        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
                        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
                        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
                        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
                        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
                        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
                        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
                        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
                        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
                        <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
                </div>
                ';}?>
        </div>
       <div class="container">
           <h2>Comments</h2>
           <?php 
           $select='SELECT users.userName,users.image,comment.comment FROM users, comment where users.userId=comment.usersId and comment.animesId="'.$_GET['id'].'"';
           $run= mysqli_query($connection,$select);
           while($row=mysqli_fetch_assoc($run)){
             $image="image/".$row['image'];
            echo'<div class="row comments">
               <div class="col-2">
                   <img src="'.$image.'">
               </div>
               <div class="col-10 text">
                   <h3>'.$row['userName'].'</h3>
                   <p>'.$row['comment'].'</p>
               </div>

           </div>';
           }?>

     <form method="post">
        <h5>Your Comment</h5>
        <div class="area">
            <textarea class="form-control" aria-label="With textarea" name="comment" placeholder=" Your Comment"></textarea>
            <button class="btn btn-primary " type="submit">Send</button>
       </div>
       </form>
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
         </body>
</html>