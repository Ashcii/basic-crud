<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
button.daftar {
  background-color: red;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>


<center><h2>Login Perusahaan</h2></center>

<form action="" method="POST">
  <div class="imgcontainer">
    <img src="img/avatar.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Masukkan Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Masukkan Password" name="password" required>
        
    <button type="submit" name="login">Masuk</button>
    <button class="daftar">Daftar</button>
  </div>
</form>
<?php
if (isset($_POST['login'])) {
  include "koneksi.php";
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM tb_login WHERE username='$username'";
  
  $query = mysqli_query($koneksi, $sql);
  $row = mysqli_num_rows($query);

  if($row === 1) {
    //jalankan eksekusi password
    $fetch_pass = mysqli_fetch_assoc($query);
    $cek_query = $fetch_pass['password'];
    if ($cek_query <> $password) {
      echo "<script>alert('Password Anda salah');</script>";
    } else {
      $_SESSION['login'] = true;
      header("location:show.php");
    }
  } else {
    echo "<script>alert('Username salah atau belum terdaftar');</script>";
  }
}
?>
</body>
</html>