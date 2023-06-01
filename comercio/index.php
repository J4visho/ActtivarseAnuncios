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
            <a class="navbar-brand text-dark fw-bold shadow-sm" href="index.php"><i class="bi bi-cart "></i> Activarse Anuncios</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                  <a href="contacto.php" class="nav-link shadow-sm rounded" category="all"><i class="bi bi-envelope"> Contacto</i></a>
               </ul>
            </div>
         </div>
      </nav>
   </div>
   <!-- Header-->
   <header class="bg-black py-5">
      <div class="container px-4 px-lg-5 my-5">
         <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Bienvenidos a tienda Online !!</h1>
            <p class="lead fw-normal text-white-50 mb-0 ">"Transforma tus ventas con nuestros anuncios de alto impacto."</p>
         </div>
      </div>
   </header>
   <section class="py-5">
      <div class="container px-4 px-lg-5">
         <h1 class="text-center">Articulos Destacados</h1>
         <hr>
         <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php
            $query = mysqli_query($conexion, "SELECT p.*, c.id AS id_cat, c.categoria FROM productos p INNER JOIN categorias c ON c.id = p.id_categoria");
            $result = mysqli_num_rows($query);
            if ($result > 0) {
               while ($data = mysqli_fetch_assoc($query)) { ?>
                  <div class="col mb-5 productos" category="<?php echo $data['categoria']; ?>">
                     <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem"><?php echo ($data['precio_normal'] > $data['precio_rebajado']) ? 'Oferta' : ''; ?></div>
                        <!-- Product image-->
                        <img class="card-img-top" src="assets/img/<?php echo $data['imagen']; ?>" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                           <div class="text-center">
                              <!-- Product name-->
                              <h5 class="fw-bolder"><?php echo $data['nombre'] ?></h5>
                              <p><?php echo $data['descripcion']; ?></p>
                              <!-- Product reviews-->
                              <div class="d-flex justify-content-center small text-warning mb-2">
                                 <div class="bi-star-fill"></div>
                                 <div class="bi-star-fill"></div>
                                 <div class="bi-star-fill"></div>
                                 <div class="bi-star-fill"></div>
                                 <div class="bi-star-fill"></div>
                              </div>
                              <!-- Product price-->
                              <span class="text-muted text-decoration-line-through"><?php echo $data['precio_normal'] ?></span>
                              <?php echo $data['precio_rebajado'] ?>
                           </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border top-0 bg-transparent">
                           <p class="text-center">Puede realizar su consulta al whatsapp!!</p>
                           <div class="text-center"><a class="btn btn-outline-dark" href="http://wa.me/543751575877" target="_blank"><i class="bi bi-whatsapp"></i></a>
                           </div>
                        </div>
                        <!-- Product actions-->


                        <!-- <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto agregar" data-id="<?php echo $data['id']; ?>" href="#">Agregar</a></div>
                                 </div>-->
                     </div>
                  </div>
            <?php  }
            } ?>

         </div>
      </div>
   </section>
   <footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/ActivarseAnuncios?mibextid=ZbWKwL" target="_blank" role="button"
        ><i class="bi bi-facebook">  Facebook</i>
      </a>


      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/" target="_blank" role="button"
        ><i class="bi bi-instagram"> Instegram</i>
      </a>

    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-white" href="contacto.php">Activarse Anuncios</a>
  </div>
  <!-- Copyright -->
</footer>
   <!-- Bootstrap core JS-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   <!-- Core theme JS-->
   <script src="assets/js/jquery-3.6.0.min.js"></script>
   <script src="assets/js/scripts.js"></script>
</body>
</html>