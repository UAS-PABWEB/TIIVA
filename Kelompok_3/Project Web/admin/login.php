<?php
session_start();

if (!empty($_SESSION['username'])) {
  header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>PMB Online System</title>
  <link rel="shortcut icon" href="../css/icon.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
.half {
  width: 50%;
   position:absolute;
 margin-left:auto;
 margin-right:auto;
 margin-top:auto;
 margin-bottom:auto;
 left:0;
 right:0;
 top:0;
 bottom:0;

}
form {
    border: 3px solid #f1f1f1;
    position: fixed;
    width: 46%;
    margin-top: 70px;
}

input[type=text], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
}

button:hover {
    opacity: 0.8;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    max-width: 30%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

</style>
</head>
<body>
<div class="half">
<form action="periksa_login.php" method="post">

  <div class="imgcontainer">
    <img src="../css/admin.ico" alt="Avatar" class="avatar">
  </div>
  <center>

  <?php 
//kode php ini kita gunakan untuk menampilkan pesan eror
if (!empty($_GET['error'])) {
  if ($_GET['error'] == 1) {
    echo '<h5 class="bg-danger">Username dan Password belum diisi!</h5>';
  } else if ($_GET['error'] == 2) {
    echo '<h5 class="bg-danger">Username belum diisi!</h5>';
  } else if ($_GET['error'] == 3) {
    echo '<h5 class="bg-danger">Password belum diisi!</h5>';
  } else if ($_GET['error'] == 4) {
    echo '<h5 class="bg-danger">Username dan Password tidak terdaftar!</h5>';
  }
}
?>
</center>
  <div class="container">
    <label><b>Username</b></label><br>
    <input type="text" placeholder="Masukan Username" name="username">
<br>
    <label><b>Password</b></label><br>
    <input type="password" placeholder="Masukan Password" name="password">
        
    <button type="submit">Login</button>
    <br>
  </div>

</form>
</div>
</body>
</html>