<!DOCTYPE html>
<html lang="es-Co">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pre-Recorded classes</title>
  <meta name="theme-color" content="#bf916d">
  <meta name="MobileOptimized" content="width">
  <!--Tags SEO-->
   <meta name="authors" content="Alejandra Serna, Maria Isabel Isaza, Jesica Quintero, Jimena Arboleda, Isabela Londoño">
  <meta name="description" content="Aplicativo web para la recapitulación de las clases dadas en el Fray Julio">
  <meta name="keywords" content="Estudio, clases, recapitular, colegio, Fray Julio">

  <!--Favicon-->
  <link href="../media/img/logo.jpg" rel="icon" type="image/x-icon">

  <!--Styles bootstrap 5.3.0-->
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <script type="text/javascript" src="../assets/js/bootstrap.bundle.js"></script>
</head>
<body class="bg-reg py-5">
  <?php

  require_once 'conn.php';
  $msg= null;
  if (isset($_POST['registro'])) {
    $insert=$conn->prepare('INSERT INTO Usuario(nombre, email, clave) VALUES(?,?,?)');
    $insert->bindparam(1,$_POST['email']);
    $insert->bindparam(2,$_POST['nombre']);
    $pass=password_hash($_POST['clave'], PASSWORD_BCRYPT);
    $insert->bindparam(3,$pass);


    if ($insert->execute () ) {
      $msg= 
      "datos registrados" ;
    }else{
      $msg= "datos no registrados";
    }
  }
?>



<?php
if ($msg!='') {
  echo $msg;
}
?>

<div class="login w-100 m-auto">
  <div class="card">
    <div class="card-header text-center">
      <h1>Registro</h1>
      <p>Por favor completa esta información para crear tu cuenta.</p>
    </div>
    <div class="card-body">

      <form action="" method="post" enctype="application/x-www-form-urlencoded">
        <div class="mb-3 mt-3">
         <label for="name"><b>Nombre</b></label>
         <input type="text" placeholder="Ingresa tu Nombre" name="nombre" required="">
       </div>
      <div class="mb-3">
        <label for="email"><b>Email</b></label> 
        <input type="text" placeholder="Ingresa tu E-mail" name="email" required="">
      </div>
      <div class="mb-3">
      <div class="mb-3">
        <label for="pwd"><b>Contraseña</b></label>
        <input type="password" placeholder="Ingresa tu contraseña" name="clave" required="">
      </div>


      <button type="submit" name="registro" class="btn btn-lg w-100" style="background-color: #0000;">Registro</button>

      <a href="../" class="btn btn-lg w-100" style="background-color: #0000;">Home</a>

    </form>
  </div>
</div>
</div>



</body>