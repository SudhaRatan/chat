<?php
include('connection.php');
$err_id=$err_name=$err_pass='';
if($_SERVER["REQUEST_METHOD"]=="POST"){

  if($_POST['user']<>NULL){
    $id=$_POST['user'];
    $err_id='';
  }else{
    $err_id='Enter valid ID';
  }
  if($_POST['name']<>NULL){
    $name=$_POST['name'];
    $err_name='';
  }else{
    $err_name='Enter valid Name';
  }
  if($_POST['pass']<>NULL){
    $pass=$_POST['pass'];
    $err_pass='';
  }else{
    $err_pass='Enter valid Password';
  }

if($err_id=='' && $err_name=='' && $err_pass==''){
  $sql="select * from login where id='$id'";
  $row=mysqli_fetch_array(mysqli_query($con,$sql));
  if($row['id']==$id){
    $err_id='ID already exists';
  }
  else{
    // $sql1="create table $id (chatid varchar(20), status varchar(20), msg varchar(2000))";
    $sql2="insert into login (id,name,password) values('$id','$name','$pass')";
    // mysqli_query($con,$sql1);
    mysqli_query($con,$sql2);
    ?>
    <script>
      alert("Account created successfully");
      window.location="index.html";
    </script>
    <?php
  }
}
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>
<style>
    .card{
        min-width: 350px;
        padding:15px;
        border-radius: 10px;
        box-shadow: 1px 1px 10px 1px #5b5858;
    }
    span{
      color:red;
    }
</style>
<body style="background-color: #E5DADA;font-family: 'Open Sans', sans-serif;" >
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <center style="margin-top: 90px; font-size:xxx-large">Register</center>
    <div class="position-absolute top-50 start-50 translate-middle card">
    <form action="register.php" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">User Id</label>
          <input type="text" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <span><?php echo $err_id; ?></span>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <span><?php echo $err_name; ?></span>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
          <span><?php echo $err_pass; ?></span>
        </div>
        <!-- <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
        <button type="submit" class="btn btn-primary">Register</button>
      </form>
    </div>

</body>
</html>
<?php

?>