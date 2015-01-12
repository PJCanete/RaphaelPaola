  <head>

        <meta name="Description" content="Information architecture, Web Design, Web Standards." />
        <meta name="Keywords" content="your, keywords" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="Distribution" content="Global" />
        <meta name="Author" content="Raphael - raphaelnunes@gmail.com" />
        <meta name="Robots" content="index,follow" />

        <link rel="stylesheet" href="imagens/css.css" type="text/css" />

        <title>Raphael & Paola</title>
  </head> 
  <body>
<div id="header-photo"></div>		
            <div id="nav">
            <!-- navigation starts-->	
            <div  id="menu" style="z-index: 1;" >
                <ul class="barra">
                    <li class="barra" style width: 25%><a class="barra" href="?pages=inicio">Inicial</a></li>
                    <li class="barra" style width: 25%><a class="barra" href="#">Sobre</a>
                        <ul class="bloco">
                            <li class="bloco"><a class="bloco" href="?pages=histCasal">História do Casal</a></li>
                            <li class="bloco"><a  class="bloco"href="?pages=sRaphael">Sobre Raphael</a></li>
                            <li class="bloco"><a  class="bloco"href="?pages=sPaola">Sobre Paola</a></li>
                        </ul>
                     </li>
                    <li class="barra" style width: 25%><a class="barra" href="?pages=#">Curiosidades</a>
                    
                         <ul class="bloco">
                            <li class="bloco"><a class="bloco" href="?pages=histAnel">História do anel</a></li>
                            <li class="bloco"><a  class="bloco"href="?pages=#">xxx</a></li>
                            <li class="bloco"><a  class="bloco"href="?pages=#">yyyyy</a></li>
                        </ul>
                    
                    </li>
                <li class="barra"><a class="barra" href="?pages=#">Fotos</a>
                
                     <ul class="bloco">
                            <li class="bloco"><a class="bloco" href="?pages=famNoivo">Familia do noivo</a></li>
                            <li class="bloco"><a class="bloco" href="?pages=famNoiva">Familia do noiva</a></li>
                            <li class="bloco"><a  class="bloco"href="?pages=viagem">Viagens</a></li>
                            <li class="bloco"><a  class="bloco"href="?pages=noivado">Noivado</a></li>
                            <li class="bloco"><a  class="bloco"href="?pages=casamento">Casamento</a></li>
                            <li class="bloco"><a  class="bloco"href="?pages=chaPanelaJF">Chá de panela JF</a></li>
                            <li class="bloco"><a  class="bloco"href="?pages=chaPanelaLeop">Chá de panela Leopoldina</a></li>
                            <li class="bloco"><a  class="bloco"href="?pages=diversas">Diversas</a></li>
                        </ul>
                
                </li>
                
                <li class="barra"><a class="barra" href="?pages=listas">Listas</a></li>
                
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