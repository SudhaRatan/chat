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
    .card{
        min-width: 350px;
        padding:15px;
        border-radius: 10px;
        box-shadow: 1px 1px 10px 1px #5b5858;
    }
    .friends{
        display: inline-block;
        padding: 0px 5px 0px 5px;
        font-size: x-large;
    }
    .btn{
        width:50px;
    }
    button.btn{
        display:inline;
    }
    .btns{
        display: inline-block;
        float: right;
    }
    .position-absolute{
        width: 350px;
        background-color: whitesmoke;
        padding-right: 10px;
        padding-left: 10px;
        border: 1px solid #5b5858;
        border-radius: 20px;
        box-shadow: 1px 1px 15px 1px #5b5858;
    }
</style>
<body style="background-color: white;font-family: 'Open Sans', sans-serif;" >
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <?php
    $sql="select * from requests where toid='$id'";
    $res=mysqli_query($con,$sql);
    $count12=mysqli_num_rows($res);
    ?>
    
    <div class="position-absolute top-50 start-50 translate-middle"><br>
        <?php
        if($count12<>0){
        while($row=mysqli_fetch_array($res)){?>
        <span class="friends">
            <?php echo $row['fromid'] ?>
        </span><div class="btns"><a href="addfriend.php?fromid=<?php echo $row['fromid'] ?>&val=accept" name="friend" type="submit" class="btn btn-outline-success">/</a>&nbsp&nbsp
        <a href="addfriend.php?fromid=<?php echo $row['fromid'] ?>&val=reject" name="friend" type="submit" class="btn btn-outline-danger">X</a></div><br><br><br>
      
        
        <?php }}
        else{
            echo "<center><h2>No requests pending</h2><br></center>";
        }
        ?>
<style>
    .btn{
        padding-right: 50px;
    }
</style>

    </div><br>
<h3 style="margin-left:10px;"><a style="text-decoration:none;color:black;" class="btn btn-outline-secondary" href="home.php">Chats</a></h3>
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