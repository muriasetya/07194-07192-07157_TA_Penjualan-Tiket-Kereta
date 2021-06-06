<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="assets\css\bootstrap.min.css">
<link rel="stylesheet" href="assets\css\style.css">
</head>
<body style="background-image: url(asset/css/homepage.jpg) no-repeat center center fixed;">
<div class="login">
  <div class="heading">
    <h2>Administrator</h2>
    <form action="index.php?page=login&aksi=tiket" method="POST">

      <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="text" class="form-control" placeholder="Masukkan Username" name="nama">
          </div>

        <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" class="form-control" placeholder="Password" name="password">
        </div>

        <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
       </form>
 		</div>
 </div>
 </body>
 </html>