<?php 
include('connection.php');
session_start();
?>

<?php

if(isset($_SESSION['id'])){
  $id=$_SESSION['id'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>
<style>
    .img-fluid{
                max-width: 40px;
                border-radius: 20px;
                margin:10px;
            }
            picture{
                display: inline-block;
            }
            .name{
                min-width: 100%;
                display: inline-block;
                font-size: x-large;
                padding-left:0px;
                position: absolute;
                top: 50%;
                -ms-transform: translateY(-50%);
                transform: translateY(-50%);
                /* border: 1px solid black; */
            }
            .namee{
                color:black;
                margin-left: 40px;

            }
            
            .chat{
                display: inline-block;
            }
            .d-flex{
                display: inline-block;
            }
            picture{
                display: inline-block;
            }
            source{
                display: inline-block;
            }
            .card{
                display: inline-block;
            }
            img{
                display: inline-block;
                width: 40px;
                border: 3px solid #a2d2ff;
                border-radius: 10px;
            }

          
            .back:hover{
                background-color: #a2d2ff;
            }
    .send{
    border:2px solid #2d2d30;
    background-color: #2d2d30;
    border-radius:1px 15px 15px 1px;
    padding:5px 15px 5px 10px;
    max-width: 100%;
    float: left;
    color: whitesmoke;

    }
    .receive{
        border:2px solid #2d2d30;
        background-color: #2d2d30;
        border-radius:15px 1px 1px 15px;
        padding:5px 10px 5px 15px;    
        max-width: 100%;    
        float: right;
        color : whitesmoke;
        
    }
    body{
        margin:0px;
        padding: 0px;
        width:100%;
    }
   

    a{
        color: black;
    }
    .key{
        position: fixed;
        bottom: 0;
        width: 100%;
        background-color: #2d2d30;
        border-radius: 10px;
        height:40px;
    }
    .key1{
        border: none;
        background-color: transparent;
        resize: none;
        outline: none;
        position: fixed;
        bottom: 0;
        width:calc(100% - 40px);
        
        background-color: #2d2d30;
        border-radius: 10px;
        border-bottom-right-radius:0px;
        border-top-right-radius: 0px;
        height:40px;
        color: whitesmoke;
        font-size: large;
        border: 1px solid black;
        min-height: 40px;
        overflow-y: auto;
        word-wrap:break-word;
        
    }


    .sendbtn{
        /* position: absolute;
        bottom: 0;
        margin-left: 90%;
        height: 40px;
        width: 10%; */
        height: 40px;
        position: fixed;
        bottom:0;
        right:0;
        background-color: #2d2d30;
}

.btnn{
    margin-bottom: 50px;
    min-width: 40px;
}
a{
    display: inline-block;
}
.nav-link{
    color:white;
    font-size: larger;
}
.resp{
    /* position: absolute;
    width: 100%;
    border:1px solid #2d2d30;
    bottom:40px; */
}
#chattt{
   
    overflow: auto;
    max-height:600px
}

</style>

<script>
    function adjustHeight(el){
    el.style.height = (el.scrollHeight > el.clientHeight) ? (el.scrollHeight)+"px" : "40px";
}
</script>
<body onload="table();" style="background-color: #E5DADA;font-family: 'Open Sans', sans-serif;">
<!-- 
<script type="text/javascript">
      function table(){
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
            document.getElementById("resp").innerHTML = this.response;
            alert(this.response);
          var chat = "chat.php?<?php echo $fname ?>"
        }
        xhttp.open("GET", chat);
        xhttp.send();
      }

      setInterval(function(){
        table();
      }, 1);
    </script> -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#"><?php echo $_GET['name']; ?></a> -->
 
      <!-- <ul style="" class="navbar-nav me-auto mb-2 mb-lg-0"> -->
         
    
      <a class="btn btn-outline-secondary" href="home.php"><</a>
      <a class="btn btn-outline-secondary" style="margin-left:0px" onclick="openFullscreen()">[ ]</a>
    
          <a class="nav-link nav-item" href=""><?php echo $_GET['name']; ?></a>
          <a class="nav-link nav-item" href=""></a>
          <a class="nav-link nav-item" href=""></a>

  </div>
</nav>


<?php
$fname = $_GET['name'];
$_SESSION['fid']=$fname;

$sql23="select id from login where name='$fname'";
$row=mysqli_fetch_array(mysqli_query($con,$sql23));
$fid=$row['id'];

$chat1=$id.$fid;
$chat2=$fid.$id;
$sql="select * from chats where chat = '$chat1' or chat= '$chat2'";
$ress=(mysqli_query($con,$sql));
$rowcount1=mysqli_num_rows($ress);


?>



<style>
    #qweqwe{
        overflow: auto;
    max-height: 600px;
        /* border:1px solid #2d2d30; */
        
    }
</style>


    <!-- <div id="qweqwe">qwe</div> -->
    <div id="cha">
    <div id="qweqwe" class="">

    <?php 
    while($row=mysqli_fetch_array($ress)){
        if($row['chat']==$chat1){
            $clas='receive';
        }elseif($row['chat']==$chat2){
            $clas='send';
        }
    ?>
        <div class='<?php echo $clas ?>'>
            <?php echo $row['msg']; ?>
        </div>
        <br><br>
<?php } 
// while(1){
// $sql69="select * from chats where chat = '$chat1' or chat= '$chat2'";
// $resss=(mysqli_query($con,$sql69));
// $rowcount2=mysqli_num_rows($resss);
// if($rowcount1==$rowcount2){

// }
// else{
//     header('location:chat.php');
// }

// }



?>

    </div></div>

    <script>
var elem = document.documentElement;
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) { /* Safari */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE11 */
    elem.msRequestFullscreen();
  }
}
let height1=screen.height;
height=height1-150;
height=height+"px";
// alert(height);
document.getElementById("qweqwe").style.maxHeight = height;

</script>
    <form action="sendmsg.php" method="post">
        <div class="key">
            <textarea name="msg" onkeyup="adjustHeight(this)" class="key1"></textarea>
        </div>

        <button style="border-radius: 0px;border-color:#2d2d30" class="sendbtn btn btn-outline-light" type="submit">></button>
    </form>
<?php

?>

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