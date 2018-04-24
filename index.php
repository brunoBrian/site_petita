<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=8">
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Origamid</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.12';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <div class="header">
      <?php require('content/header/header.php'); ?>
    </div>

    <!-- Introdução - Carousel -->
    <section class="introducao">
      <div class="container">    
        <div class="title">
          <h1>Os melhores produtos da Petita</h1>
        </div>  
        
        <blockquote class="quote-externo">
          <p>Produtos para o seu animalzinho com os melhores preços do mercado</p>
        </blockquote>
        <a href="produtos.html" class="btn">Veja Mais</a>
      </div>
    </section>

    <!-- Produtos -->
    <section class="container produtos" id="produtos">
      <h2 class="subtitulo">Produtos</h2>
      <ul class="lista_produtos">
        <li class="grid-1-3">
          <a href="#">
            <div class="img_icone_produto">
              <img src="images/cachorro.png" alt="Petita Cachorros">
            </div>
            <h3>Cachorros</h3>
            <p>Aquela descricao basica meu amor </p>
          </a>
        </li>
        <li class="grid-1-3">
          <a href="#">
            <div class="img_icone_produto">
              <img src="images/gato.png" alt="Petita Gatos">
            </div>
            <h3>Gatos</h3>
            <p>Aquela descricao basica meu amor</p>
          </a>
        </li>
        <li class="grid-1-3">
          <a href="#">
            <div class="img_icone_produto">
              <img src="images/animais2.png" alt="Petita Animais">
            </div>
            <h3>Animais</h3>
            <p>Aquela descricao basica meu amor</p>
          </a>
        </li>
        <div class="chamada_produtos">
          <p>Clique aqui e saiba mais sobre os detalhes</p>
          <a href="#" class="btn btn-preto">Produtos</a>
        </div>
      </ul>
     <!-- <ul class="lista_produtos">
        <li class="grid-3"></li>
        <li class="grid-8"></li>
        <li class="grid-4"></li>
      </ul>
      <ul class="lista_produtos">
        <li class="grid-3"></li>
        <li class="grid-3"></li>
        <li class="grid-9"></li>
      </ul>
      <ul class="lista_produtos">
        <li class="grid-3"></li>
        <li class="grid-3"></li>
        <li class="grid-3"></li>
        <li class="grid-3"></li>
        <li class="grid-3"></li>
      </ul>
      <ul class="lista_produtos">
        <li class="grid-16"></li>
      </ul> -->
    </section>

    <!-- portfolio -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="subtitulo">Portfolio</h2>
        <ul>
          <li class="grid-8"><img src="https://img.elo7.com.br/product/zoom/FBCE34/adesivo-paisagem-praia-decorando-com-adesivos.jpg" alt="Paisagem"></li>
          <li class="grid-8"><img src="https://fineartamerica.com/images/artworkimages/medium/1/-mother-and-4-golden-retriever-pups-stan-fellerman.jpg" alt="Passeio"></li>
          <li class="grid-16"><img src="https://sociquiz.xyz/media/-est-s-con-el-hombre-indicado/quiz-animais-fofos.jpg" alt="Esporte"></li>
        </ul>
      </div>
      <div class="chamada_produtos">
        <p>Conheça mais sobre nosso portfolio</p>
        <a href="#" class="btn">Produtos</a>
      </div>
    </section>

    <section class="qualidade container">
      <h2 class="subtitulo">Qualidade</h2>
      <img src="images/bikcraft-qualidade.png">
      <ul class="qualidade_lista">
        <li class="grid-1-3">
          <h3>Durabilidade</h3>
          <p>Bruno Brian da Silva Sousa Bruno Brian da Silva Sousa</p>
        </li>
        <li class="grid-1-3">
          <h3>Design</h3>
          <p>Bruno Brian da Silva Sousa Bruno Brian da Silva Sousa</p>
        </li>
        <li class="grid-1-3">
          <h3>Sus</h3>
          <p>Bruno Brian da Silva Sousa Bruno Brian da Silva Sousa</p>
        </li>
      </ul>
      <div class="chamada_produtos">
        <p>Conheça mais sobre nosso portfolio</p>
        <a href="#" class="btn btn-preto">Sobre</a>
      </div>
    </section>

    <section class="slide-marcas">
      <h2 class="subtitulo">Marcas que trabalhamos</h2>
      <div class="container">
        <ul class="marcas-itens">
          <li class="grid-4">
            <a href="#">
              <img src="images/logo-marcas/logo-bayer.png">
            </a>
          </li>
          <li class="grid-4">
            <a href="#">
              <img src="images/logo-marcas/logo-bayer.png">
            </a>
          </li>
          <li class="grid-4">
            <a href="#">
              <img src="images/logo-marcas/logo-bayer.png">
            </a>
          </li>
          <li class="grid-4">
            <a href="#">
              <img src="images/logo-marcas/logo-bayer.png">
            </a>
          </li>
          <li class="grid-4">
            <a href="#">
              <img src="images/logo-marcas/logo-bayer.png">
            </a>
          </li>

          <li class="grid-4">
            <a href="#">
              <img src="images/logo-marcas/logo-bayer.png">
            </a>
          </li>
          <li class="grid-4">
            <a href="#">
              <img src="images/logo-marcas/logo-bayer.png">
            </a>
          </li>
          <li class="grid-4">
            <a href="#">
              <img src="images/logo-marcas/logo-bayer.png">
            </a>
          </li>
          <li class="grid-4">
            <a href="#">
              <img src="images/logo-marcas/logo-bayer.png">
            </a>
          </li>
          <li class="grid-4">
            <a href="#">
              <img src="images/logo-marcas/logo-bayer.png">
            </a>
          </li>
        </ul>
        </div>
    </section>

    <section class="onde_estamos clearfix" id="contato">
      <h2 class="subtitulo">Onde estamos</h2>
      <div class="grid-12 location" >
        <p>Rua Ricardo Gonçalves, 37 – Vila Augusta, Mauá – São Paulo</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.0323834898472!2d-46.451706785020015!3d-23.674799884626623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce6be2af8bbf87%3A0x747ba1aff9a193e6!2sR.+Ricardo+Gon%C3%A7alves%2C+37+-+Vila+Bocaina%2C+Mau%C3%A1+-+SP%2C+09310-530!5e0!3m2!1spt-BR!2sbr!4v1519416836080" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="grid-10 siga_facebook">
        <p>Siga-nos no Facebook</p>
        <div class="fb-page" data-href="https://www.facebook.com/petita.petshop" data-tabs="timeline" data-width="670" data-height="450" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/petita.petshop" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/petita.petshop">Petita Petshop</a></blockquote></div>
      </div>
    </section>

    <section class="imagem-destaque">
      <a href="#"><img src="images/loja-petita.jpg"></a>
    </section>

    <footer>
      <?php require('content/footer/footer.php'); ?>
    </footer>


    <script src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

  </body>
</html>
