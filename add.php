<?php 
include('connection.php');
session_start();
?>

<?php

if(isset($_SESSION['id'])){
    $id=$_SESSION['id'];

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if($_POST['friend']<>''){
            $friend=$_POST['friend'];
            $sql1="select * from login where id='$friend'";
            $res=mysqli_query($con,$sql1);
            $row=mysqli_fetch_array($res);
            $count=mysqli_num_rows($res);
            if($count==1){
                $sql2="select * from requests where toid='$friend' and fromid='$id' ";
                $res2=mysqli_query($con,$sql2);
                $row2=mysqli_fetch_array($res2);
                $count2=mysqli_num_rows($res2);
                if($count2<>0){
                    ?>
                    <script>
                        alert('Already requested');
                    </script>
                    <?php  
                }else{
                    $sql3="insert into requests (toid,fromid) values('$friend','$id')";
                    mysqli_query($con,$sql3);
                    ?>
                    <script>
                        alert('Added');
                        window.location="home.php";
                    </script>
                    <?php
                }
    
    
            }
            else{
                ?>
                <script>
                    alert('Not found');
                    window.location="home.php";
                </script>
                <?php
            }
    
        }
    }
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