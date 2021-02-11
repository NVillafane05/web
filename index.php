<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-UA-compatible"content="ie=edge">
    <link rel ="stylesheet" href="css/estilo.css">
    <!-- ========================= Bootstrap and animation ============ -->
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel ="stylesheet" href="css/bootstrap.min.css">
    <!-- ========================= SCROLL ============================= -->
    <script src="js/smooth-scroll.min.js"></script>
    <!--============= FAVICON ========================================- -->
    <!--<lin rel="shortcut icon" href="img/electron.ico">-->
    <link rel="icon" href="img/favicon.png">
    <title>MI PROYECTO</title>
    
    <style type="text/css">
    .sizeImg{
      width: 110px;
      height: 120px;
    }
    
    .styleCard{
        margin: 20px;
        border: none;
        background-color: #c1fff4;
      }
    .imgLogo{
      margin-top: 0px;
      border-radius: 30px;
    }  

    .colorFondo{
      background-color:rgb(255, 0, 212);
    }
    </style>
  <script>
      smoothScroll.init({
      selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
      selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
      speed: 2000, // Integer. How fast to complete the scroll in milliseconds
      easing: 'easeInOutCubic', // Easing pattern to use
      offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
      callback: function ( anchor, toggle ) {} // Function to run after scrolling
      });
    </script>

</head>
<body class="colorFondo">
  <header>
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white shadow-sm p-3 mb-5 bg-white" style="margin-top: -30px;     margin-block-end: -30px;">      
      <a data-scroll class="navbar-brand linkBotonera" href="index.php">
        <img class="featurette-image img-fluid mx-auto" style="width:80px; margin-top:2px;" src="img/favicon.png" data-holder-rendered="true">
      </a>        
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>        

    <div class="collapse navbar-collapse" id="navbarCollapse">        
      <ul class="navbar-nav mr-auto navbar-left" style="width=100%;">            
        <li class="nav-item active">
         <a data-scroll class="nav-link linkBotonera txtMenu" href="index.php#sec">HOME</a>
        </li>

        <li class="nav-item active">
          <a data-scroll class="nav-link linkBotonera txtMenu" href="index.php#sec-1">CERTIFICADOS</a>
        </li>

        <li class="nav-item active">
          <a data-scroll class="nav-link linkBotonera txtMenu" href="index.php#sec-2">REDES SOCIALES</a>
        </li>
      </ul>
    <!-- ========================= Menu Lenguaje ============================== -->          
    </div> 
    <!-- ========================= Fin Menu Lenguaje ============================== -->
    </nav>     
  </header>


  <div style="padding-top: 100px;" class=" wow fadeInUp container-fluid" id="sec">
    
        
    <h1>"Bienvenidos a mi primer Sitio Web personal"</h1>
   
 </div>


 <div class="wow fadeInUp container-fluid">
     
            
            <p>Soy estudiante en IT, hace unos años atras, gane una beca en la UTN para poder aprender a programar en 
          Java y por cuestiones personales, no pude terminar!!y la vida misma me llevo por otros caminos, hasta
         que en el año 2018, luego de ver la pelicula de Stev Jobs!!me despertó esas ganas de intentar y tomar 
         revancha a esa posibilidad que perdí y poder retomar algo que me apasionaba y lo llevaba dormido, el mundo 
         de sistemas!!y fui por más termine la secundaria(adeudaba materias de 5 to año)e  ingrese 
        al primer año de la carrera Tecnicatura Superior en análisis de sistemas en el Instituto de Formación 
        Tecnica Superior Num18 (IFTS)en Capital Federal! no perdi más tiempo!!!
         y paralelamente realize mas de 6 cursos entre ellos de Desarrollo Web, Introducción a la programación
        etc.  "ESTA SOY YO ""><strong> NO SE RENDIRME!!!</strong>
         </p>
         <div class="container" align="center">
          <a href="https://www.facebook.com/naty.villafane.3">
         <img  width="100"  src="img/naty.JPG">
         </a>
         </div>
 </div>
  <br>

    <!--inicio del menu-->
  <main>  

    <div id="accordion" class="myaccordion">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              Mis cursos!!!
              <span class="fa-stack fa-sm">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
              </span>
            </button>
          </h2>
        </div>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
            <ul>
              <li>Testing de software</li>
              <li>Desarrollo web 1</li>
              <li>introduccion a la programacion con python</li>
              <li>Introduccion a la ciberseguridad</li>
              <li>Introduccion a QA</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card" id="sec-1">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
            <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Mis proyectos!!!
              <span class="fa-stack fa-2x">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
              </span>
            </button>
          </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="card-body">
            <ul>
              <li>Sitio responsivo con boostrap</li>
              <li>Proyecto Mate</li>
              <li>Proyecto Vestidos</li>
              <li>Proyecto Personal, etc.</li>
              
              
            </ul>
          </div>
        </div>
      </div>
      
          
  </main>
      <!-- fin del menu-->

     
        <br>


        <main>
             <!--comienzo de certificados parte 1-->
            <section clas="altura-a-b" >
                <div class="container">
                    <div class="row" >
                        <div class="wow slideInLeft col-12 col-sm-4 text-center">
                            <img class="img-fluid" style=" max-width: 326px" src="img/back-end.jpeg" alt="carlosSlim">
                            <h5>Certificado de desarrollador backend</h5>
                            <p>Parte del desarrollo que se dedica a la programación de los diferentes componentes de un sitio web</p>
                        </div>

                        <div class="wow fadeInUp col-12 col-sm-4 text-center">
                            <img class="img-fluid" style=" max-width: 300px" src="img/python.jpeg" alt="coursera">
                            <h5>Certificado de introduccion a la programacion con python</h5>
                            <p>aprendidendo a programar con el lenguaje python</p>
                        </div>

                        <div class="wow slideInRight col-12 col-sm-4 text-center">
                            <img class="img-fluid" style=" max-width: 362px" src="img/cisco.jpeg" alt="Cisco">
                            <h5>introduccion a la ciberseguridad</h5>
                            <p>aprendiendo los conceptos necesarios y basicos sobre ciberseguridad</p>
                        </div>

                      </div>
                 </div>
             </section>
         </main>

      </div>
             <!--inicio del carousel-->
      <!--<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/boostrap.jpg" height="300px" class="d-block w-100" alt="boostrap">
            <div class="carousel-caption d-none d-md-block">
              <h5>boostrap</h5>
              <p>es un framework,que permite crear interfaces web con CSS y JavaScript.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/cssyhtml.png" class="d-block w-100" alt="cssyhtml">
            <div class="carousel-caption d-none d-md-block">
              <h5>css y html</h5>
              <p>HTML es un lenguaje muy simple que sirve para crear páginas web
                   y CSS  aporta estilos a lo que se quiere mostrar.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/js.png" class="d-block w-100" alt="javascript">
            <div class="carousel-caption d-none d-md-block">
              <h5>javascript</h5>
              <p>es el único lenguaje de programación que funciona en los navegadores de forma nativa .</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>-->
      <!--fin del carousel-->


<!--==== INICIO DE CAROUSEL ===-->
<div class="container">
    <div id="carouselControls" class="carousel slide" data-ride="carousel">
      <!--para que rote el carousel-->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <!-- class="d-block w-100" setea para que el broser se adapte a las dimensiones de la imagen-->
          <img class="d-block w-100" height="400px" src="img/imagen1.jpg" alt="Primer Slide">
          <div class="carousel-caption d-none d-md-block">
              <h5>Bootstrap</h5>
              <p>Es un framework, que permite crear interfaces web con CSS y JavaScript.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" height="400px" src="img/imagen2.jpg" alt="Segundo Slide">
          <div class="carousel-caption d-none d-md-block">
              <h5>CSS Y HTML5</h5>
              <p>HTML es un lenguaje muy simple que sirve para crear páginas web y CSS  aporta estilos a lo que se quiere mostrar.</p>
            </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" height="400px" src="img/imagen3.jpg" alt="Tercer Slide">
          <div class="carousel-caption d-none d-md-block">
              <h5>Javascript</h5>
              <p>Es el único lenguaje de programación que funciona en los navegadores de forma nativa .</p>
            </div>
        </div>
      </div>
      <!--end class="carousel-inner"-->
      <!--AGREGADO DE BOTONES PREV Y NEXT-->
      <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div>
    <!--end id="carouselControls"-->
</div>
    <!--==== FIN DE CAROUSEL ===-->

    <br>
    <div class="wow fadeInUp jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Más de mis certificados!!!!!</h1>
        <p class="lead">Estos son algunos más, de los certificados de los cursos que realize durante el año 2019 y 2020.</p>
      </div>
    </div>

   
  <main>
        <!--comienzo certificados parte 2-->
        <section class="altura-a-b">
          <div class="container">
              <div class="row">
                  <div class="wow slideInLeft col-12 col-sm-4 text-center">
                      <img class="img-fluid" style=" max-width: 350px" src="img/desarrolloweb1.jpeg" alt="google">
                      <h5>certificado de desarrollo web 1</h5>
                      <p>introducción al desarrollo web 1</p>
                  </div>

                  <div class="wow fadeInUp col-12 col-sm-4 text-center">
                      <img class="img-fluid" style=" max-width: 295px" src="img/qa_sw.jpeg" alt="tsoft">
                      <h5>Certificado de introducción a QA y automatizacion de pruebas SW</h5>
                      <p>bases sobre testing de software y pruebas automatizadas.</p>
                  </div>

                  <div class="wow slideInRight col-12 col-sm-4 text-center">
                      <img class="img-fluid" style=" max-width: 326px" src="img/virtual3.0.jpeg" alt="aprender programando">
                      <h5>introduccion al desarrollo web 1</h5>
                      <p>las bases iniciales del desarrollo web 1 con html y css</p>
                  </div>

                </div>
           </div>
        </section>

  </main>



   


    <div class="wow fadeInUp jumbotron jumbotron-fluid" id="sec-2">
        <div class="container">
          <h1 class="display-4">En busca de mi primer empleo en IT!!!</h1>
          <p class="lead">Me apasiona el desarrollo web del lado del FRONT-END ,pero me encantaria llegar a ser full stack.</p>
        </div>
      </div>
        
    <div class="container-fluid">
        

    <div class="divCenter">             
      <span class="titulosGenerales" style="font-weight: normal;">Mis Redes Sociales:</span>   
    </div>  

    <div class="container marketing">       
          <div class="card-group">
              
            <div class="card styleCard wow slideInLeft colorFondo">
              <a href="https://www.facebook.com/naty.villafane.3" target="facebook">
                  <div class="divCenter">
                    <img class="card-img-top featurette-image img-fluid mx-auto sizeImg" style="border-radius: 40px;" src="img/logo_f.jpg" alt="Logo Facebook">
                    </div>
                    <div class="card-body divCenter">
                      <h5 class="card-title">
                        <b class="title" style="color: black; font-weight: normal;">CLICK PARA INGRESAR</b>
                      </h5>  
                    </div>
                  </a>
              </div>
            
              <div class="card styleCard wow fadeInUp colorFondo">
                <a href="https://www.instagram.com/natyjagger/" target="instagram">
                    <div class="divCenter">               
                        <img class="card-img-top featurette-image img-fluid mx-auto sizeImg" style="border-radius: 40px;" src="img/logo_i.jpg" alt="Logo Instagram">               
                    </div>
                    <div class="card-body divCenter">
                      <h5 class="card-title">
                        <b class="title" style="color: black; font-weight: normal;">CLICK PARA INGRESAR</b>
                      </h5>       
                    </div>
                  </a>
              </div>

              <div class="card styleCard wow slideInRight colorFondo">
                <a href="https://www.linkedin.com/in/natalia-soledad-villafa%C3%B1e-7954b0195/" target="linkedin">
                  <div class="divCenter">
                        <img class="card-img-top featurette-image img-fluid mx-auto sizeImg" style="border-radius: 42px;" src="img/logo_t.jpg" alt="Logo Twitter">
                    </div>
                    <div class="card-body divCenter">
                      <h5 class="card-title">
                        <b class="title" style="color: black; font-weight: normal;">CLICK PARA INGRESAR</b>
                      </h5>                           
                    </div>
                  </a>
              </div>
              
          </div> <!--end <div class="card-group">-->
        </div> <!---end <div class="container marketing"> -->
        <footer class="footer colorFondo">
            <div class="container">
              <span class="text-muted">&copy; <?php  echo date('Y');  ?> by NATALIA VILLAFAÑE</span>
            </div>
        </footer>
    </div>


       

       <script src="js/jquery-3.5.1.min.js"></script>
       <script src="js/popper.min.js"></script>
       <script src="js/bootstrap.min.js"></script>
<!-- ========================= Scripts PARA LOS EFECTOS ============================== -->
  <script>
  window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script>
  <script src="js/wow.min.js"></script>
</body>
</html>