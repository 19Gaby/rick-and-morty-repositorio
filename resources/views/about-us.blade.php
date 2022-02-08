<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personaje {{$personaje['name']}}</title>
    <link rel="stylesheet" href="/css/components.css">
    <link rel="stylesheet" href="/css/icons.css">
    <link rel="stylesheet" href="/css/responsee.css">
    <link rel="stylesheet" href="/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="/css/lightcase.css">
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="/css/template-style.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,400,600,900&subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/js/jquery-ui.min.js"></script>      
  </head>

  <body class="size-1140">
  	<!-- PREMIUM FEATURES BUTTON -->
  	<a target="_blank" class="hide-s" href="/../template/minimalista-premium-responsive-business-template/" style="position:fixed;top:120px;right:-14px;z-index:10;"></a>
    <div id="page-wrapper">
      <!-- HEADER -->
      <header role="banner" class="position-absolute margin-top-30 margin-m-top-0 margin-s-top-0">    
        <!-- Top Navigation -->
        <nav class="background-transparent background-transparent-hightlight full-width sticky">
          <div class="s-12 l-2">
            
          </div>
          <div class="s-12 l-10">
            <div class="top-nav right">
              <p class="nav-text"></p>
              <ul class="right chevron">
                
              </ul>
            </div>
          </div>  
        </nav>
      </header>
      
      <!-- MAIN -->
      <main role="main">
        <!-- Content -->
        <article>
          <header class="section-top-padding background-white">
            <div class="line text-center image-center">        
              <h1 class="text-dark text-s-size-30 text-m-size-40 text-l-size-headline text-thin text-line-height-1">{{$personaje['name']}}</h1>
              <ul class="post-info">
                  <li><a href="#">Especie: {{$personaje['species']}}.</a></li>
                  <li><a href="#">Genero: {{$personaje['gender']}}.</a></li>
                  <li><a href="#">Estatus: {{$personaje['status']}}.</a></li>
                  <a class="image-hover-zoom margin-bottom" href="/"><img src="{{$personaje['image']}}" alt="" /></a>
              </ul>
              
            </div>  
          </header>
          
          <section class="section-top-padding background-white">
            <div class="line">
              <h2 class="text-s-size-40 text-size-50 text-line-height-1 margin-bottom-10 text-thin text-center"><span class="text-dark">-</span> Otros personajes <span class="text-dark">-</span></h2>   
              <div class="carousel-blocks owl-carousel"> 
              @foreach ($personajes as $personajeAlternativo)
                @if($loop->index < 15)                                                                                                           
                <div class="item">                                                                                                                                                                                                     
                  <div class="padding">
                  <a href="{{route('detalle.personaje',$personajeAlternativo['id'])}}" class="full-img border-image border-primary"><img src="{{$personajeAlternativo['imagen']}}" alt="" />
                    <h3 class="text-s-size-16 text-size-20 text-line-height-1 text-dark margin-top-20 margin-bottom-0">{{$personajeAlternativo['nombre']}}</h3>
                    <span>{{$personajeAlternativo['especie']}}, {{$personajeAlternativo['genero']}}</span>
                  </a>
                  </div>                                                                                                                                                              
                </div>
                 @endif 
                 @endforeach
                      
              </div>                                                                                                                                                                                                                                                                                         
            </div> 
         </section>
        </article>
      </main>
      
     
    </div>
    
    <script type="text/javascript" src="/js/responsee.js"></script>
    <script type="text/javascript" src="/js/jquery.events.touch.js"></script>
    <script type="text/javascript" src="/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="/js/template-scripts.js"></script> 
  </body>
</html>