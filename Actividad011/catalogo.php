<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Restaurante Gourmet QRO.</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Gourmet QRO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="catalogo.php">Todo</a></li>
                        <?php

                            include("conexion.php");

                            $filtro = "";

                            if(isset($_REQUEST["idc"]))
                            {
                                $filtro = " where categoria.idcategoria = " . $_REQUEST["idc"];
                            }

                            $cadena = "select * from categoria";

                            $resultado = $conex->query($cadena);

                            if($resultado->num_rows > 0)
                            {
                               while($fila = $resultado->fetch_assoc())
                               {
                                   echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="catalogo.php?idc=' . $fila["idcategoria"] . '">' . $fila["nombrecategoria"] . '</a></li>';
                               } 
                            }

                        ?>

                        
                        
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Carrito
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5" style="background-image:url('https://image.freepik.com/foto-gratis/cuchara-utensilios-cocina-madera-sobre-tabla-cortar-madera-oscura-o-vista-superior-mesa-escritorio-fondo-plano_140008-154.jpg') !important;" >
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Gourmet QRO</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Engorda con estilo. ;)</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    
                    <?php

                        

                        $sql = "select * from menu inner join categoria on categoria.idcategoria = menu.idcategoria inner join unidadmedida on menu.idunidadmedida = unidadmedida.idunidadmedida " . $filtro;
                        $result = $conex->query($sql);

                        if ($result->num_rows > 0) {
                        // output data of each row
                            while($row = $result->fetch_assoc()) {
                                $preciopromocion = "";
                                if($row["preciopromocion"] > 0)
                                {
                                    $preciopromocion = '
                                        <span class="text-muted text-decoration-line-through">$' . $row["precio"] . '</span>
                                        $' . $row["preciopromocion"] . '
                                    ';
                                }
                                else
                                {
                                    $preciopromocion =  $row["precio"];
                                }

                                echo '<div class="col mb-5">
                                <div class="card h-100">
                                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">' . $row["nombrecategoria"] . '</div>
                                    <img class="card-img-top" src="' . $row["urlfoto"] . '" alt="..." />
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <h5 class="fw-bolder">' . $row["nombre"] . '</h5>
                                            <div class="d-flex justify-content-center small text-warning mb-2">
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                            </div>
                                            ' . $preciopromocion . '
                                        </div>
                                    </div>
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="producto.php?idp=' . md5($row["idmenu"]) . '">Ver más</a></div>
                                    </div>
                                </div>
                            </div>';
                            }
                        } else {
                        echo "0 results";
                        }
                        $conex->close();

                    ?>


                    <!--div class="col mb-5">
                        <div class="card h-100">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Special Item</h5>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                    $18.00
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div-->
                    
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
