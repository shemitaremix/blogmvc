<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>2522 - Contactanos</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" /> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet" /> <!-- https://getbootstrap.com/ -->
    <link href="fontawesome/css/all.min.css" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
    <link href="css/templatemo-diagoona.css" rel="stylesheet" />
<!--

TemplateMo 550 Diagoona

https://templatemo.com/tm-550-diagoona

-->
</head>
<body>
    <div class="tm-container">
        <div>
            <div class="tm-row pt-4">
                <div class="tm-col-left">
                    <div class="tm-site-header media">
                        <i class="fas fa-umbrella-beach fa-3x mt-1 tm-logo"></i>
                        <div class="media-body">
                            <h1 class="tm-sitename text-uppercase">INGENIERIA</h1>
                            <p class="tm-slogon">EN SOFTWARE</p>
                        </div>        
                    </div>
                </div>
                <div class="tm-col-right">
                    <nav class="navbar navbar-expand-lg" id="tm-main-nav">
                        <button class="navbar-toggler toggler-example mr-0 ml-auto" type="button" 
                            data-toggle="collapse" data-target="#navbar-nav" 
                            aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                            <ul class="navbar-nav text-uppercase">
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="{{route('principal')}}">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="{{route('sobre')}}">Cliente-Servidor</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="{{route('serv')}}">Desarrolladores</a>
                                </li>                            
                                <li class="nav-item active">
                                    <a class="nav-link tm-nav-link" href="{{route('contacto')}}">Contactanos<span class="sr-only">(current)</span></a>
                                </li>
                            </ul>                            
                        </div>                        
                    </nav>
                </div>
            </div>
            
            <div class="tm-row">
                <div class="tm-col-left"></div>
                <main class="tm-col-right tm-contact-main"> <!-- Content -->
                    <section class="tm-content tm-contact">
                        <h2 class="mb-4 tm-content-title">Contactanos</h2>
                        <p class="mb-85"></p>
                        <form id="contact-form" action="" method="POST">
                            <div class="form-group mb-4">
                                <input type="text" name="Nombre" class="form-control" placeholder="Nombre" required="" />
                            </div>
                            <div class="form-group mb-4">
                                <input type="email" name="email" class="form-control" placeholder="Email" required="" />
                            </div>
                            <div class="form-group mb-5">
                                <textarea rows="6" name="Mensaje" class="form-control" placeholder="Mensaje" required=""></textarea>
                            </div>
                            
                        </form>
                    </section>
                </main>
            </div>
        </div>        

        

        <div class="tm-bg"> <!-- Diagonal background design -->
            <div class="tm-bg-left"></div>
            <div class="tm-bg-right"></div>
        </div>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.backstretch.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>
</html>