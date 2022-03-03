@extends('layout.layoutunidades')

@section('primertitulo')

@endsection


@section('tituloprincipal1')

@endsection

@section('publicacion')
@foreach ($publicaciones as $publi)
    



<div class="wrapper row3">
    <main class="hoc container clear"> 
      
      <div class="content three_quarter"> 
        <!-- ################################################################################################ -->
        <h1> {!!$publi['nombre']!!}</h1>
        <img class="imgr borderedbox inspace-5" src="../img/sistema.jpg" alt="">
        <p> {!!$publi['contenido']!!}
          </p>
        
        
        <div id="comments">
          <h2>Commentarios</h2>
          <ul>
            <li>
              <article>
                <header>
                  <figure class="avatar"><img src="img/pedrito.jfif" alt=""></figure>
                  <address>
                  By <a href="#">Pedro Fernandez</a>
                  </address>
                  <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
                </header>
                <div class="comcont">
                  <p>Que buena información en este blog.</p>
                </div>
              </article>
            </li>
            <li>
              <article>
                <header>
                  <figure class="avatar"><img src="img/scarlet.jpg" alt=""></figure>
                  <address>
                  By <a href="#">Scarlett Johansson</a>
                  </address>
                  <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
                </header>
                <div class="comcont">
                  <p>Que buen sitio para aprender y sacar información</p>
                </div>
              </article>
            </li>
            <li>
              <article>
                <header>
                  <figure class="avatar"><img src="img/lana.jpg" alt=""></figure>
                  <address>
                  By <a href="#">Lana Rhoades</a>
                  </address>
                  <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
                </header>
                <div class="comcont">
                  <p>Me Gusta entrar a esta pagina y aprender más información para la escuela.</p>
                </div>
              </article>
            </li>
          </ul>
          
          
        </div>
        <!-- ################################################################################################ -->
      </div>
      
    </main>
  </div>
  @endforeach
@endsection


