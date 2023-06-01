<?php require_once "config/conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <meta name="description" content="" />
   <meta name="author" content="" />
   <title>Activarse Anuncios</title>
   <!-- Favicon-->
   <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
   <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" /> 
   <!-- Core theme CSS (includes Bootstrap)-->
   <link href="assets/css/styles.css" rel="stylesheet" />
   <link href="assets/css/estilos.css" rel="stylesheet" />
</head>

<body>
   <!--<a href="#" class="btn-flotante" id="btnCarrito">Carrito <span class="badge bg-success" id="carrito">0</span></a>-->
   <!-- Navigation-->
   <div class="container">
   <nav class="navbar navbar-expand-lg navbar-danger m-lg-3">
         <div class="container-fluid">
            <a class="navbar-brand text-dark fw-bold shadow-sm " href="index.php"><i class="bi bi-cart "></i> Activarse Anuncios</a>
            <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"><i class="bi bi-list"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav ">
                  <a href="#" class="nav-link shadow-sm rounded" category="all">Todo</a>
                  <?php
                  $query = mysqli_query($conexion, "SELECT * FROM categorias");
                  while ($data = mysqli_fetch_assoc($query)) { ?>
                     <a href="#" class="nav-link  shadow-sm rounded" category="<?php echo $data['categoria']; ?>"><?php echo $data['categoria']; ?></a>
                  <?php } ?>
                  <a href="#" class="nav-link shadow-sm rounded" category="all"> <i class="bi bi-envelope"> Contacto</i></a>
               </ul>-->
            </div>
         </div>
      </nav>
   </div>
   <!-- Header-->
   <header class="bg-black py-5">
      <div class="container px-4 px-lg-5 my-5">
         <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Bienvenidos a tienda Online !!</h1>
            <p class="lead fw-normal text-white-50 mb-0 ">"Transforma tus ventas  con nuestros anuncios de alto impacto."</p>
         </div>
      </div>
   </header>
   <!-- Content -->