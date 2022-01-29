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
<div class="bgded" style="background-image:url('images/demo/backgrounds/01.png');"> 
  
  <div class="overlay">
    <div id="pageintro" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <article>
        <h3 class="heading">@yield('tituloprincipal')</h3>
        <p>@yield('descripcionvista')</p>
        <footer><a class="btn" href="#">Gravida sem neque</a></footer>
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
          <figure><a class="imgover" href="#"><img src="images/demo/348x400.png" alt=""></a>
            <figcaption>
              <h6 class="heading">@yield('primerparcial')</h6>
              <div>
                <p>@yield('descripcion1parcial')</p>
              </div>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a class="imgover" href="#"><img src="images/demo/348x400.png" alt=""></a>
            <figcaption>
              <h6 class="heading">@yield('segundoparcial')</h6>
              <div>
                <p>@yield('descripciondoparcial')</p>
              </div>
            </figcaption>
          </figure>
        </li>
        <li class="one_third">
          <figure><a class="imgover" href="#"><img src="images/demo/348x400.png" alt=""></a>
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
    <hr class="btmspace-80">
    
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

  <section id="testimonials" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <p class="nospace font-xs">Imperdiet at rhoncus vitae ante sed</p>
      <p class="heading underline font-x2">Eu felis etiam et risus at</p>
    </div>
    <article class="btmspace-80">
      <blockquote>Pellentesque ipsum pede malesuada non vulputate at euismod et lorem nullam tincidunt urna eget nisl eleifend vulputate sed vitae risus sed enim fermentum venenatis sed augue eros tempor sit amet.</blockquote>
      <figure class="clear"><img src="images/demo/60x60.png" alt="">
        <figcaption>
          <h6 class="heading">John Doe</h6>
          <em>CEO</em></figcaption>
      </figure>
    </article>
  </section>
</div>




<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.backtotop.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
</body>
</html>