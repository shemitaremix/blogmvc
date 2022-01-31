<!DOCTYPE html>

<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Nocobot</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="css/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<!-- Top Background Image Wrapper -->
<div class="bgded" style="background-image:url('img/compusita.jpg');"> 
  
  <div class="overlay">
    <div id="pageintro" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <article>
        <h3 class="heading">@yield('tituloprincipal')</h3>
        <p>@yield('descripcionvista')</p>
        <footer><a class="btn" href="{{route('primertema')}}">El tema mas reciente</a></footer>
      </article>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
</div>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <section id="introblocks">
      <ul class="nospace group btmspace-80">
        <li class="one_third first">
          <figure><a class="imgover" href="{{route('primertema')}}"><img src="img/unidad1.1.jpg" alt=""></a>
            <figcaption>
              <h6 class="heading">@yield('primerparcial')</h6>
              <div>
                <p>@yield('descripcion1parcial')</p>
              </div>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a class="imgover" href="" ><img src="img/unidad2.jpg" alt="" id="marcado"></a>
            <script>
              $("#marcado").on("click",myFuncion())

                function myFuncion(){
                      Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                        footer: '<a href="">Why do I have this issue?</a>'
                      })

              }
            </script>
            <figcaption>
              <h6 class="heading">@yield('segundoparcial')</h6>
              <div>
                <p>@yield('descripciondoparcial')</p>
              </div>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a class="imgover" href="#"><img src="img/4.png" alt=""></a>
            <figcaption>
              <h6 class="heading">@yield('tercerparcial')</h6>
              <div>
                <p>@yield('descripcionterparcial')</p>
              </div>
            </figcaption>
          </figure>
        </li>
      </ul>
    </section>
    <!-- ################################################################################################ -->
    
    
    <!-- / main body -->
    
  </main>
</div>

<div class="wrapper bgded overlay" style="background-image:url('img/dillo.jpg');">
  <section id="testimonials" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <p class="nospace font-xs">A lo largo de la carrera se han inventado grandes fraces</p>
      <p class="heading underline font-x2">Una de ellas es la de acontinuacion</p>
    </div>
    <article class="btmspace-80">
      <blockquote>Si puedes imaginarlo, puedes programarlo</blockquote>
      <figure class="clear"><img src="img/taboada.jpg" alt="">
        <figcaption>
          <h6 class="heading">Alejandro Taboada Sanchez</h6>
          <em>Programador y maestro</em></figcaption>
      </figure>
    </article>

    <!-- ################################################################################################ -->
  </section>
</div>
 

<!-- JAVASCRIPTS -->
<script src="sweetalert2.all.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.backtotop.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
</body>
</html>