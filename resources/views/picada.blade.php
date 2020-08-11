<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>La Juntadita</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
     
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="/">#La Juntadita</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/">Hace tu pedido</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contacto y Redes</a></li>
                    </ul>
                </div>
            </div>
        </nav>
<section class="about-section text-center" id="about">
            <div class="container">
            <h2 class="text-yellow mb-4">Pagar con MP</h2><br><br>
            <div class="row">
            <div class="col-sm-6">
                <h3 class="text-yellow-50"><strong>Datos:</strong></h3> <br>
                <h5 class="text-yellow-50"><strong>
                <li>Pediste: <?php echo e($menu) ?></li>
                <li> <?php echo e($tamaño) ?></li>
                <li>Recibe: <?php echo e($name) ?></li>
                <li>Ubicación: <?php echo e($direccion) ?></li>
                <li>Localidad de: <?php echo e($localidad) ?></li>
                
                     </strong>
                    <br><br><br>
                </b></h5>
                </div>
                <div class="col-sm-6">
                <li>Precio: $<?php echo e($precio) ?></li>
                <li>Costo de envio: $<?php echo e($costoEnvio) ?></li>
                <li>Total: $<?php echo e($precioTotal) ?></li> <br><br>
                @if ($tamañoCorto =='Chica' and $localidad !='CABA') 
                <script src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
                    data-preference-id="183022380-7c1341f5-4c71-4be9-87e9-85b8fe8ee203">
                </script>
                @elseif ($tamañoCorto =='Chica' and $localidad =='CABA') 
                <script src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
                    data-preference-id="183022380-d1d790d2-0584-4f81-9d61-d8c4b599bc01">
                </script>
                @elseif ($tamañoCorto =='Mediana' and $localidad !='CABA') 
                <script src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
                    data-preference-id="183022380-7657eff9-dee2-4bea-a9f2-ce0577bdfaaa">
                </script>
                @elseif ($tamañoCorto =='Mediana' and $localidad =='CABA') 
                <script src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
                    data-preference-id="183022380-72b14438-d569-451d-a0e1-626827f28ecf">
                </script>
                @elseif ($tamañoCorto =='Grande' and $localidad !='CABA') 
                <script src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
                    data-preference-id="183022380-16e709c2-e0d7-4cca-8ece-1b6e3626584d">
                </script>
                @elseif ($tamañoCorto =='Grande' and $localidad =='CABA') 
                <script src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
                    data-preference-id="183022380-faf8b149-6536-4a2c-859f-987fc563e68e">
                </script>


                @endif
                
                <h5 class="text-yellow-50"><br><br>
                    Una vez realizado el pago, nos llegará la alerta para preparar y despachar tu pedido! Cualquier consulta podes comununicarte vía Whats App!
                </h5>
                <a href="https://api.whatsapp.com/send?phone=1176834985&text=Compre%20Picada%20Grande!"><img src="assets/img/whatsapp.png" alt="Whats App!" style="float:center;" width="150" height="100" /></a>
                </div>
            </div>
            </div>
</section>
<section class="contact-section bg-black" id="contact">
            <div class="container">
                <div class="container social d-flex justify-content-center">
                <h3 class="text-yellow-50">SEGUINOS EN LAS REDES PARA SEGUIR SORTEOS Y NOVEDADES </h3>
                </div>
                <div class="social d-flex justify-content-center">
                
                    <a class="mx-2" href="https://twitter.com/LaJuntadita"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="https://instagram.com/LaJuntadita"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </section>
        
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container">Copyright ©  2020</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
