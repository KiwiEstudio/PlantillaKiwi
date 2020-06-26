<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Estudio Kiwi</title>

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400"> <!-- Google web font "Open Sans", https://fonts.google.com/ -->
    <link rel="stylesheet" href="{{asset('assets/font-awesome-4.7.0/css/font-awesome.min.css')}}">         <!-- Font Awesome, http://fontawesome.io/ -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">                               <!-- Bootstrap styles, https://getbootstrap.com/ -->
    <link rel="stylesheet" href="{{asset('assets/css/tooplate-style.css')}}">                            <!-- Templatemo style -->

   
      </head>

      <body>
        <div class="container-fluid">
            <div class="tm-body">
                <div class="tm-sidebar sticky">
                    <section id="welcome" class="tm-content-box tm-banner margin-b-6">
                        <div class="tm-banner-inner">
                            <i class="fa fa-film fa-4x margin-b-20"></i>
                            <h1 class="tm-banner-title">Mason</h1>
                            <p class="tm-banner-subtitle">new HTML template</p>                   
                        </div>                    
                    </section>
                    <nav class="tm-main-nav">
                        <ul class="tm-main-nav-ul">
                            <li class="tm-nav-item"><a href="{{url('inicio')}}" class="tm-nav-item-link tm-button">Inicio</a>
                            </li>
                            <li class="tm-nav-item"><a href="{{url('galeria')}}" class="tm-nav-item-link tm-button ">Galeria</a>
                            </li>
                            <li class="tm-nav-item"><a href="{{url('timeline')}}" class="tm-nav-item-link tm-button">Paquetes</a>
                            </li>
                            <li class="tm-nav-item"><a href="{{url('contact')}}" class="tm-nav-item-link tm-button">Contacto</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                
                <div class="">                    
                @yield('seccion')
                </div> 
            </div>

            <footer class="tm-footer text-right">
            
            </footer> 

        </div> 
        
        <script src="{{asset('assets/js/jquery-1.11.3.min.js')}}"></script>             
        <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script> 
        <script src="{{asset('assets/js/masonry.pkgd.min.js')}}"></script> 
        
   
        <script>  
    
        $(document).ready(function(){

        
            var $grid = $('.grid').masonry({
                
                

                itemSelector: '.grid-item',
                isFitWidth: true,
                columnWidth: 1
            });
            
            $grid.imagesLoaded().progress( function() {
              $grid.masonry('layout');
            });            

          
            $('.tm-current-year').text(new Date().getFullYear());        
        });

        </script>
    </body>
    </html>