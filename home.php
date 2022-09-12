<?php 
include('connection.php');
session_start();
?>

<?php

if(isset($_SESSION['id'])){
  $id=$_SESSION['id'];
?>
<!-- Start here -->
<!doctype html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
<body style="background-color: #E5DADA;font-family: 'Open Sans', sans-serif;" >
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <style>
            .navbar{
                padding-left:5%;
                text-align: left;
                border: 1px solid black;
                color: #E5DADA;
                background-color: rgb(38, 37, 37);
                justify-content: left;
                font-family: 'Open Sans', sans-serif;
                font-size: large;


            }
            .search{
                display: inline-block;
                padding-right:5%;
                text-align: right;
                border: 1px solid black;
                color: #E5DADA;
                background-color: rgb(38, 37, 37);
                justify-content: right;
                font-family: 'Open Sans', sans-serif;
                font-size: large;
                position: fixed;
            }
            .img-fluid{
                max-width: 50px;
                border-radius: 25px;
                margin:10px;
            }
            picture{
                display: inline-block;
            }
            .name{
                display: inline-block;
                font-size: x-large;
                padding-left: 15px;
                position: absolute;
                top: 50%;
                -ms-transform: translateY(-50%);
                transform: translateY(-50%);
            }
            .namee{
                color:black;

            }
            .logout{
              position: absolute;
              bottom: 0;
              text-decoration: none;
              color: black;
              border: 0px solid #a2d2ff;
              background-color: #a2d2ff;
              padding: 5px;
              border-radius: 10px;
              box-shadow: 1px 1px 15px 4px #a2d2ff;
            }
            .req{
                text-align: right;
                justify-content: end;
            }


            .wrapper {
        height: 20vh;
        flex-direction: row;
        justify-content: center;
        align-items: center;
      }
      .button {
        border: 1px transparent;
        -webkit-border-radius: 40px;
        border-radius: 40px;
        color: #eeeeee;
        cursor: pointer;
        display: inline-block;
        font-family: Arial;
        font-size: 20px;
        padding: 8px 30px;
        text-align: center;
        text-decoration: none;
        margin-left: 20px;
        -webkit-animation: glowing 1300ms infinite;
        -moz-animation: glowing 1300ms infinite;
        -o-animation: glowing 1300ms infinite;
        animation: glowing 1300ms infinite;
      }
      @-webkit-keyframes glowing {
        0% {
          background-color: #0091b2;
          -webkit-box-shadow: 0 0 3px #0091b2;
        }
        50% {
          background-color: #21c7ed;
          -webkit-box-shadow: 0 0 15px #21c7ed;
        }
        100% {
          background-color: #0091b2;
          -webkit-box-shadow: 0 0 3px #0091b2;
        }
      }
      @keyframes glowing {
        0% {
          background-color: #0091b2;
          box-shadow: 0 0 3px #0091b2;
        }
        50% {
          background-color: #21c7ed;
          box-shadow: 0 0 15px #21c7ed;
        }
        100% {
          background-color: #0091b2;
          box-shadow: 0 0 3px #0091b2;
        }
      }
      .svg-btn {
        display: block;
        width: 230px;
        height: 230px;
        margin-left: 10px;
      }
      svg {
        fill: blue;
        -webkit-animation: glowing-polygon 1300ms infinite;
        -moz-animation: glowing-polygon 1300ms infinite;
        -o-animation: glowing-polygon 1300ms infinite;
        animation: glowing-polygon 1300ms infinite;
      }
      @-webkit-keyframes glowing-polygon {
        0% {
          fill: #0091b2;
          -webkit-filter: drop-shadow( 0 0 3px #0091b2);
        }
        50% {
          fill: #21c7ed;
          -webkit-filter: drop-shadow( 0 0 15px #21c7ed);
        }
        100% {
          fill: #0091b2;
          -webkit-filter: drop-shadow( 0 0 3px #0091b2);
        }
      }
      @keyframes glowingPolygon {
        0% {
          fill: #0091b2;
          filter: drop-shadow( 0 0 3px #0091b2);
        }
        50% {
          fill: #21c7ed;
          filter: drop-shadow( 0 0 15px #21c7ed);
        }
        100% {
          fill: #0091b2;
          filter: drop-shadow( 0 0 3px #0091b2);
        }
      }
      #id01{
        display:visible;
        position: fixed;
        bottom: 0;
        right: 0;
        width: 300px;

    }
    
    .btnn{
        width:50px;
    }

        </style>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Chats</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>



      </ul>
      <form class="d-flex" role="search" action="add.php" method="post">
<?php
$sql0="select fromid from requests where toid='$id'";
$res0=mysqli_query($con,$sql0);
$count0=mysqli_num_rows($res0);
if($count0<>0){
?>
      <a class="button" href="requests.php">Requests</a>


&nbsp
<?php }else{?>
    <a class="btn btn-outline-light" href="requests.php">Requests</a>&nbsp&nbsp
<?php } ?>

      <input name="friend" class="form-control me-2" type="search" placeholder="Add Friend" aria-label="Search">
      <button class="btn btn-outline-light" type="submit">Add</button>
    </form>
    </div>
  </div>
</nav>

<?php
$sql="select id2,name2 from friends where id1='$id' ";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($res)){
?>

        <div class="chat card">
            <a class="namee" href="chat.php?name=<?php echo $row['name2'] ?>" onclick="openFullscreen()">
            <picture>
                <source srcset="images/profile.jfif" type="image/svg+xml">
                <img src="https://www.freepnglogos.com/pics/google-logo" class="img-fluid img-thumbnail" alt="...">
               <div class="name"><?php echo $row['name2'] ?></div>
              </picture>
        </div>
        </form>
<?php }

?>
<style>

</style>


          


    </body>
</html>

<?php
}
else{
  ?>
  <html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
  <body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
  <div class="col-md-8">
  <div class="card" style="width: 18rem;">
      <div class="card-body">
    <p>Please Login or Register to continue</p>
    <form action="index.html">
    <button type="submit" class="btn btn-outline-primary">Login/Register</button>
</form>
    </div>
  </div>
  </div>
  </body>
  </html>
  <?php
}
?>

<script>

var elem = document.documentElement;

    elem.requestFullscreen();

</script>