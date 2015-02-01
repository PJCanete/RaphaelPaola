  <head>

        <meta name="Description" content="Information architecture, Web Design, Web Standards." />
        <meta name="Keywords" content="your, keywords" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="Distribution" content="Global" />
        <meta name="Author" content="Raphael - raphaelnunes@gmail.com" />
        <meta name="Robots" content="index,follow" />

        <link rel="stylesheet" href="imagens/css.css" type="text/css" />
        <link rel="stylesheet" href="style.css" type="text/css" media="screen" />

  <script type="text/javascript">var _siteRoot='index.html',_root='index.html';</script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>
        <title>Raphael & Paola</title>
  </head> 
  <body>

	 <div>
  <!--/top-->
  <div id="header"><center><div class="wrap">
   <div id="slide-holder">
<div id="slide-runner">
    <a href=""><img id="slide-img-1" src="images/nature-photo.png" class="slide" alt="" /></a>
    <a href=""><img id="slide-img-2" src="images/nature-photo1.png" class="slide" alt="" /></a>
    <a href=""><img id="slide-img-3" src="images/nature-photo2.png" class="slide" alt="" /></a>
    <a href=""><img id="slide-img-4" src="images/nature-photo3.png" class="slide" alt="" /></a>
    
    
    <div id="slide-controls">
     <p id="slide-client" class="text"><strong>post: </strong><span></span></p>
     <p id="slide-desc" class="text"></p>
     <p id="slide-nav"></p>
    </div>
</div>
	
	<!--content featured gallery here -->
   </div>
   <script type="text/javascript">
    if(!window.slider) var slider={};slider.data=[{"id":"slide-img-1","client":"nature beauty","desc":"nature beauty photography"},{"id":"slide-img-2","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-3","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-4","client":"nature beauty","desc":"add your description here"}];
   </script></center>
  </div></div>
  
  
<!--/header-->


            <!-- Menu           -->	
            <div  id="menu" style="z-index: 1; width: 75%"  >
                <ul class="barra">
                        <center>
                    <li class="barra" style="width: auto;" ><img style="width: 80px; hight:45px"src="images/BarraFloresCTV_23a.png" class="slide" alt="" /></li>
                    <li class="barra" style="width: auto" ><a class="barra" href="?pages=inicio" style=" width: auto">Inicial</a></li>
                    <li class="barra" style ="width: auto"><a class="barra" href="#" style=" width: auto">Sobre</a>
                        <ul class="bloco">
                            <li class="bloco" style=" width: auto; "><a class="bloco" href="?pages=histCasal" style=" width: auto">História do Casal</a></li>
                            <li class="bloco" style=" width: auto"><a  class="bloco"href="?pages=sRaphael" style=" width: auto">Sobre Raphael</a></li>
                            <li class="bloco" style=" width: auto"><a  class="bloco"href="?pages=sPaola" style=" width: auto">Sobre Paola</a></li>
                        </ul>
                     </li>
                    <li class="barra" style=" width: auto"><a class="barra" href="?pages=#" style=" width: auto">Curiosidades</a>
                    
                         <ul class="bloco">
                            <li class="bloco" style=" width: auto"><a class="bloco" href="?pages=histAnel" style=" width: auto">História do anel</a></li>
                            <li class="bloco" style=" width: auto"><a  class="bloco"href="?pages=#">xxx</a></li>
                            <li class="bloco" style=" width: auto"><a  class="bloco"href="?pages=#">yyyyy</a></li>
                        </ul>
                    
                    </li>
                <li class="barra" style=" width: auto"><a class="barra" href="?pages=#" style=" width: auto">Fotos</a>
                
                     <ul class="bloco">
                            <li class="bloco" style=" width: auto"><a class="bloco" href="?pages=famNoivo" style=" width: auto">Familia do noivo</a></li>
                            <li class="bloco" style=" width: auto"><a class="bloco" href="?pages=famNoiva" style=" width: auto">Familia do noiva</a></li>
                            <li class="bloco" style=" width: auto"><a  class="bloco"href="?pages=viagem">Viagens</a></li>
                            <li class="bloco" style=" width: auto"><a  class="bloco"href="?pages=noivado">Noivado</a></li>
                            <li class="bloco" style=" width: auto"><a  class="bloco"href="?pages=casamento">Casamento</a></li>
                            <li class="bloco" style=" width: auto"><a  class="bloco"href="?pages=chaPanelaJF">Chá de panela JF</a></li>
                            <li class="bloco" style=" width: auto"><a  class="bloco"href="?pages=chaPanelaLeop">Chá de panela Leopoldina</a></li>
                            <li class="bloco" style=" width: auto"><a  class="bloco"href="?pages=diversas">Diversas</a></li>
                        </ul>
                
                </li>
                
                <li class="barra" style=" width: auto"><a class="barra" href="?pages=listas" style=" width: auto">Listas</a></li>
                <li class="barra" style="width: auto" ><img style="width: 80px; hight:45px; "src="images/BarraFloresCTV_23a.png" class="slide" alt="" /></li>
                </center>
                    </ul>

                <!-- navigation ends-->	
            </div>
           
     </div>
           
      
            <div id="main">
                    <?php
                    
                     $page= $_GET['pages'];
                    if($page == "" || $page == null)  {
                        include "pages/home.php";
                    }elseif(file_exists("pages/$page.php")){
                        include "pages/$page.php";
                    }else{
                        echo "Página não encontrada.";
                    }
                    ?>
                </div>

  </body>