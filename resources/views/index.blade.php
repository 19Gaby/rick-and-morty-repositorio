<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Minimalista - New Amazing HTML5 Template</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="css/template-style.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,400,600,900&subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>      
  </head>

  <body class="size-1140">
  	<!-- PREMIUM FEATURES BUTTON -->
  	<a target="_blank" class="hide-s" href="../template/minimalista-premium-responsive-business-template/" style="position:fixed;top:120px;right:-14px;z-index:10;"></a>
    <div id="page-wrapper">
      <!-- HEADER -->
      <header role="banner" class="position-absolute margin-top-30 margin-m-top-0 margin-s-top-0">    
        <!-- Top Navigation -->
        <nav class="background-transparent background-transparent-hightlight full-width sticky">
          
          
        </nav>
      </header>
      
      <!-- MAIN -->
      <main role="main">
        <!-- Content -->
        <article>
          <header class="section background-white">
            <div class="line text-center">        
              <h1 class="text-dark text-s-size-30 text-m-size-40 text-l-size-headline text-thin text-line-height-1">Rick and Morty</h1>
              <p class="margin-bottom-0 text-size-16 text-dark">Hola! Me llamo Gabriela y soy una estudiante de software, esta pagina es para un proyecto pequeño sobre una api de la serie de Rick y Morty!<br>
              </p>
            </div>  
          </header>
          <div class="background-white full-width"> 
            @foreach($personajes as $personaje)
            <div class="s-12 m-6 l-five">
              <a class="image-with-hover-overlay image-hover-zoom" href="{{route('detalle.personaje',$personaje['id'])}}" title="Portfolio Image">
                <div class="image-hover-overlay background-primary"> 
                  <div class="image-hover-overlay-content text-center padding-2x">
                  <h3 class="text-white text-size-20 margin-bottom-10" target="_blank" href="{{route('detalle.personaje',$personaje['id'])}}">{{$personaje['nombre']}}</h3>
                  <p class="text-white text-size-14 margin-bottom-20">Especie: {{$personaje['especie']}}.</p>
                  <p class="text-white text-size-14 margin-bottom-20">Genero: {{$personaje['genero']}}.</p>
                  <p class="text-white text-size-14 margin-bottom-20">Estatus: {{$personaje['estatus']}}.</p>             
                  </div> 
                </div> 
                
                <img target="_blank" href="{{route('detalle.personaje',$personaje['id'])}}" class="full-img"><img src="{{$personaje['imagen']}}" alt="" /></a>
              </a>	
            </div>
            @endforeach
           
          </div>  
        </article>
      </main>
      
     
    </div>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="js/jquery.events.touch.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script> 
  </body>
</html>