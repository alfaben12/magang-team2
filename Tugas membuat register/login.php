<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
   require_once("koneksi.php");
?>

<html>
  <title>Login</title>
<link rel="stylesheet" type="text/css" href="daftar.css">
<title>Form Login</title>
<div align='center' class="menu1">
  <form action="proseslogin.php" method="post">
  <h1>Masuk</h1>
  <table>
  <tbody>
  <div class="form1"><tr><td>Username</td><td> : <input id="input" type="text" name="username" placeholder="Username"></td></tr>
  <div class="form1"><tr><td>Password</td><td> : <input id="input" type="Password" name="password" placeholder="Password" ></td></tr>
  <tr><td colspan="2" align="right"><input value="Login" type="submit"> <input value="Batal" type="reset"></td></tr>
  <tr><td colspan="2" align="center">Belum Punya akun ? <a href="daftar.php"><b>Daftar</b></a></td></tr>
  </tbody>
  </table>
  </form>
</div>