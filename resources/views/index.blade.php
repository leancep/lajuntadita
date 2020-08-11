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
                <a class="navbar-brand js-scroll-trigger" href="#page-top">#La Juntadita</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Hace tu pedido</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contacto y Redes</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase">La Juntadita</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Las picadas más premium y exquisitas de zona norte.</h2>
                    <a class="btn btn-primary js-scroll-trigger" href="#about">Pedi YA!</a>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container">
            <div class="row">
           <!-- <div class="col-sm-6">
                <h3 class="text-yellow-50"><strong> Picada Clásica:</strong> </h3> <br>
                <h5 class="text-yellow-50"><strong>
                    - Jamon Cocido
                    - Salamin picado fino
                    - Longaniza
                    - Lever
                    - Queso Roquefort
                    - Queso Pategras 
                    - Tomates Cherry
                    - Aceitunas
                    - Pan de campo 
                    </strong>
                    <br><br><br>
                </b></h5>

            </div>-->
            <div class="col-sm-12">
                <h3 class="text-yellow-50"><strong>Piacada La Juntadita: </strong></h3> <br>
                <h5 class="text-yellow-50"><strong>
                    - Jamon Cocido
                    - Jamon Crudo
                    - Salamin picado fino
                    - Longaniza Tandilera
                    - Lomo con hierbas horneado
                    - Bondiola Serrana española
                    - Lever
                    - Queso Roquefort
                    - Queso Gouda
                    - Queso Goya
                    - Queso Pategras
                    - Tomates Cherry
                    - Frutos secos (Almendras y Nueces)
                    - Aceitunas
                    - Pan de campo 
                     </strong>
                    <br><br><br>
                </b></h5>

            </div>
            
            </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        
                            <form action="{{ route('inicio.store') }}" method="POST">
                                @csrf
            
                            <p class="text-yellow-50">
                            <h4>Completa estos datos para poder enviarte la picada! </h4>
                            <div class="row">
                                <div class="col-sm-6">
                                    {!! $errors->first('name', '<small>:message</small>') !!}<br>
                                    <input type="text" class="form-control form-control-sm" id="name" placeholder="Decinos tu nombre!" name="name" value={{old('name')}}>
                                </div>
                                <div class="col-sm-6">
                                    {!! $errors->first('tel', '<small>:message</small>') !!}<br>
                                    <input type="numbre" class="form-control form-control-sm" id="tel" placeholder="Télefono: " name="tel"  value={{old('tel')}}>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div id="locationField">
                                        {!! $errors->first('direccion', '<small>:message</small>') !!}<br>
                                        <input class="form-control form-control-sm" type="text" value="{{old('direccion')}}" name="direccion" id="autocomplete" placeholder="¿A que dirección enviamos el pedido?" onfocus="geolocate()" required="" autocomplete="off" data-toggle="tooltip" data-html="true" title="Dirección">
                                    </div>
                                    {!! $errors->first('localidad', '<small>:message</small>') !!}<br>
                                    <select class="form-control form-control-sm" id="localidad" name="localidad" required="" data-toggle="tooltip" data-html="true" title="localidad">
                                    <option disabled="" selected="">Ingresa la localidad para ver si se encuentra en el radio de envíos</option>
                                    <option class="">San Isidro</option>
                                    <option class="">Vicente López</option>
                                    <option class="">CABA</option>
                                    <option class="">Tigre</option>
                                    <option class="">Pilar</option>
                                    </select>
                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col-sm-6">
                                    {!! $errors->first('menu', '<small>:message</small>') !!}<br>
                                    <select class="form-control form-control-sm" id="menu" name="menu" required="" data-toggle="tooltip" data-html="true" title="menu">
                                    <option disabled="" selected="">SELECCIONA LA PICADA</option>
                                   <!--<option class="">Picada Clásica</option>-->
                                    <option class="">Picada La Juntadita</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                {!! $errors->first('tamaño', '<small>:message</small>') !!}<br>
                                    <select class="form-control form-control-sm" id="tamaño" name="tamaño" required="" data-toggle="tooltip" data-html="true" title="tamaño">
                                    <option disabled="" selected="">Elegi el tamaño de la tabla</option>
                                    <option class="">Chica(Comen 2, pican 4) $900</option>
                                    <option class="">Mediana(Comen 4, pican 8) $1300 </option>
                                    <option class="">Grande(Comen 8, pican 12) $2200</option>
                                    </select>
                                </div>
                            </div>
                            <!--<p><br>
                                    <a href="#" id="mascampos">Agregar otra picada</a>
                                    </p>
                            </p>-->
                           
                    </div>
                </div>


                <br><br> <input type="submit" class="btn btn-secondary  btn-lg btn-block" value="PAGAR"><br><br>
                </form>
            </div>
            
        </section>
        <!-- Contact-->
        <section class="contact-section bg-black" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    <!--col-md-12 mb-3 mb-md-0-->
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Tambien podes pedirnos por WhatsApp!</h4>
                                <a href="https://api.whatsapp.com/send?phone=1176834985&text=Pedidos:%20La%20Juntadita!"><img src="assets/img/whatsapp.png" alt="Whats App!" style="float:right;" width="150" height="100" /></a>
                                <hr class="my-4" />
                                <div class="text-yellow-50">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 11 58333420 // 11 67834985</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="container social d-flex justify-content-center"><br><br><br>
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
        <script>
        // This sample uses the Autocomplete widget to help the user select a
        // place, then it retrieves the address components associated with that
        // place, and then it populates the form fields with those details.
        // This sample requires the Places library. Include the libraries=places
        // parameter when you first load the API. For example:
        // <script
        // src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

        var placeSearch, autocomplete;

        var componentForm = {
            street_number: 'short_name',
            route: 'long_name',
            locality: 'long_name',
            postal_code: 'short_name'
        };

        function initAutocomplete() {
            // Create the autocomplete object, restricting the search predictions to
            // geographical location types.
            autocomplete = new google.maps.places.Autocomplete(
                document.getElementById('autocomplete'), {types: ['geocode']});

            // Avoid paying for data that you don't need by restricting the set of
            // place fields that are returned to just the address components.
            autocomplete.setFields('address_components');

            // When the user selects an address from the drop-down, populate the
            // address fields in the form.
            autocomplete.addListener('place_changed', fillInAddress);
        }

        function fillInAddress() {
            // Get the place details from the autocomplete object.
            var place = autocomplete.getPlace();

            for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
            }

            // Get each component of the address from the place details,
            // and then fill-in the corresponding field on the form.
            for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                document.getElementById(addressType).value = val;
            }
            }
        }

        // Bias the autocomplete object to the user's geographical location,
        // as supplied by the browser's 'navigator.geolocation' object.
        function geolocate() {
            if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var geolocation = {
                lat: -34.5267882,
                lng: -58.5038537
                };
                var circle = new google.maps.Circle(
                    {center: geolocation, radius: position.coords.accuracy});
                autocomplete.setBounds(circle.getBounds());
            });
            }
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABmbN_VjUrtswtZQ3qVqJOLsekjKO5AXg&libraries=places&callback=initAutocomplete"
    async defer></script>

    <script>
        jQuery.fn.generaNuevosCampos = function(etiqueta, nombreCampo, nombreCampo2, indice, alcance){
   $(this).each(function(){
      elem = $(this);
      elem.data("etiqueta",etiqueta);
      elem.data("nombreCampo",nombreCampo);
      elem.data("nombreCampo",nombreCampo2);
      elem.data("indice",indice);
      elem.data("alcance",alcance);
      
      elem.click(function(e){
         e.preventDefault();
         elem = $(this);
         etiqueta = elem.data("etiqueta");
         nombreCampo = elem.data("nombreCampo");
         nombreCampo2 = elem.data("nombreCampo2");
         indice = elem.data("indice");
         texto_insertar = '<div class="row"><div class="col-sm-6"><p>' + etiqueta + ' ' + '<select class="form-control form-control-sm" id="menu" name="' + nombreCampo + indice + 'required="" data-toggle="tooltip" data-html="true" title="menu"/><option disabled="" selected="">SELECCIONA LA PICADA</option><option class="">Picada Clásica</option><option class="">Picada La Juntadita</option></select></div><div class="col-sm-6"><select class="form-control form-control-sm" id="cantidad" name="' + nombreCampo2 + indice + 'required="" data-toggle="tooltip" data-html="true" title="cantidad"><option disabled="" selected="">Elegi el tamaño de la tabla</option><option class="">Chica(Comen 2, pican 4) </option><option class="">Mediana(Comen 4, pican 8)</option><option class="">Grande(Comen 6, pican 12)</option> </select>    </div></p>';
         
                                

         indice ++;
         elem.data("indice",indice);
         nuevo_campo = $(texto_insertar);
         elem.before(nuevo_campo);
      });
   });
   return this;
}


$(document).ready(function(){
   $("#mascampos").generaNuevosCampos("", "nombreCamara", 2);
});
    </script>
    </body>
</html>
