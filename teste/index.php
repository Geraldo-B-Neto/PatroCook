<?php
require_once "reservaController.php";
$reservaController = new reservaController();
$resultData = $reservaController->read();

if (isset($_POST) && count($_POST) > 0) {
  require_once "reservaController.php";

  $c = new Reserva();

  $c->setNome($_POST['inputName']);
  $c->setTelefone($_POST['inputPhoneNumber']);
  $c->setData($_POST['inputDate']);
  $c->setDescricao($_POST['textComents']);

  $reservaController = new ReservaController();

  $rs = $reservaController->add($c);

  if ($rs) {
    ?>
    <script>
      $(document).ready(function() {
        window.Location.href="#idForm";
      });

    </script>
    <?php

  }

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    

  <title>Home</title>
</head>

<body>

  <header>

    <div class="containerHeaderContent">

      <a href="#"><img src="#" alt="logo"></img></a>
      <div class="boxHeaderLinks">
        <a href="#">Home</a>
        <a href="#">Cardápio</a>
        <a href="#">Reservas</a>
        <a href="#">Equipe</a>
      </div>
      <div class="boxContacIcons">
        <a href=""><img src="" alt="facebook"></img></a>
        <a href=""><img src="" alt="instagram"></img></a>
        <article>
          <a href=""><img src="" alt=""></img></a>
          <aside>
            9717-0471
          </aside>
        </article>
      </div>
    </div>
  </header>

  <div class="containerPresentaion">
    <img src="./img/back/presentationImg2.png" alt="s"></img>
    <article class="boxTextPresentation">
      <p>A melhor comida <br> de Patrocínio? Aqui<br> no PatroCock
      </p>
      <aside>
        <span>9:00 - 20:00</span>
        <span>Al. Pitangais 10</span>
      </aside>
      <a href="#"> <button type="submit">Cardápio</button>
      </a>
    </article>
  </div>

  <div class="backgroundAboutUs">
    <img src="./img/back/backTable.png" alt="location"></img>
    <div class="containerAboutUsContent">
      <img src="./img/back/location.png" alt="location"></img>
      <article clasName="boxTextAboutUs">
        <h2>Sobre nós</h2>
        <p>Nossa culinária é extremamente versátil, direcionada para atender toda a multiplicidade de gostos ao redor do
          pais e do mundo. Nos de uma chance, e mostraremos do que nosso restaurante é capaz de saciar qualuer paladar
          de Patrocínio! <br><br><br>Estamos esperando por você todos os dias de 9:00 às 20:00.
        </p>
        <br>
        <span>Learn more &rarr;</span>
      </article>
    </div>
  </div>

  <div class="containerDifferential">
    <section class="titlesDifferential">
      <h3>Por que somos os melhores?</h3>
      <aside><i>Com base nos nossos mais de um milhão de reservas satisfeitos</i>
      </aside>
    </section>
    <br>
    <section class="containerBoxContentDifferential">
      <article class="boxContentDifferential">
        <img src="./img/details/vegetable2.png" alt="m"></img>
        <h4>Comida Fresca</h4>
        <p>Nossa comida é totalmente fresca, nossos fornecedores são referecias absolutos no mercado alimentício
        </p>
      </article>
      <article class="boxContentDifferential">
        <img src="./img/details/desconto4.png" alt="m"></img>
        <h4>Preço justo</h4>
        <p>A nossa comida com certeza vale seu custo. Por menos de 30,00 R$ você consegue uma refeição de qualidade e
          satisfatória
        </p>
      </article>
      <article class="boxContentDifferential">
        <img src="/img/details/bus.png" alt="m"></img>
        <h4>Entrega rápida</h4>
        <p>O serviço delivery oferecido não deixa a desejar, menos de 30 minutos em qualquer ponto da cidade
        </p>
      </article>
    </section>
  </div>

  <div class="containerDishes">
    <img src="./img/details/foodBack1.jpg" alt="jdjdjh">
    <div class="containerContentDishes">
      <h3>Experiemte alguns dos nossos pratos</h3>
      <article class="boxDishesBtns">
        <span id="titleBR" onclick="revealBR()">Brasileiros</span>
        <span id="titleIT" onclick="revealIT()">Italiano</span>
        <span id="titlePT" onclick="revealPT()">Portuguêses</span>
      </article>
      <article class="boxDishesContent">

        <div class="dishesContent brasileiro">
          <img src="./img/foods/feijoada.png" alt="dish"></img>
          <div>
            <article>
              <h3><i>Feijoada</i></h3>
              <article>
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9733;</span>
              </article>
              <p>Feita com feijão preto e carne de porco em mil e uma formas, a feijoada é um prato que representa bem a
                cultura brasileira, além de ser uma refeição para lá de farta e repleta de acompanhamentos como arroz,
                farofa, couve e laranja. outras versões deliciosas.
              </p>
            </article>

          </div>
        </div>
        <div class="dishesContent brasileiro">
          <img src="./img/foods/bobo.png" alt="dish"></img>
          <div>
            <article>
              <h3><i>Bobó de Camarão</i></h3>
              <article>
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9733;</span>
                <span>&#9733;</span>
              </article>
              <p>Composto por camarões refogados junto com leite de coco, azeite de dendê e temperos verdes, o bobó de
                camarão é um prato típico afro-brasileiro, que conquista diversos paladares de todos os cantos do País e
                do mundo.

              </p>
            </article>

          </div>
        </div>
        <div class="dishesContent brasileiro">
          <img src="./img/foods/rabada2.png" alt="dish"></img>
          <div>
            <article>
              <h3><i>Rabada</i></h3>
              <article> <span>&#9733;</span> <span>&#9733;</span> <span>&#9733;</span> <span>&#9733;</span>
                <span>&#9733;</span> </article>
              <p>O acarajé é uma deliciosa iguaria preparada com um bolinho de feijão-fradinho artesanal, temperado com
                cebola e sal, frito em azeite de dendê e depois recheado com vatapá (leite de coco, castanha de caju,
                amendoim e camarão), vinagrete e camarão seco.
              </p>
            </article>

          </div>
        </div>
        <!--
      <div class="dishesContent brasileiro">
        <img src="./img/foods/pudim.png" alt="dish"></img>
        <div>
          <article>
            <h3><i>Pudim de Leite Condensado</i></h3>
              <article>               <span>&#9733;</span>               <span>&#9733;</span>               <span>&#9733;</span>               <span>&#9733;</span>               <span>&#9733;</span>           </article>
            <p>Incorparado no cotidiano brasileiro, a iguaria é tipicamente consumida como sobremesa ou doce, feito a partir de leite condensado, leite, açucar e ovos.
            </p>
          </article>
        
        </div>
      </div> -->


        <div class="dishesContent portugues">
          <img src="./img/foods/churros3.png" alt="dish"></img>
          <div>
            <article>
              <h3><i>Porra Recheada</i></h3>
              <article> <span>&#9733;</span> <span>&#9733;</span> <span>&#9733;</span> <span>&#9733;</span>
                <span>&#9733;</span> </article>
              <p>Deliciosos, açucarados, crocantes por fora e super recheados por dentro, as porras são tradicionais na
                Euroupa. Elas são normalmente consumidos no café da manhã mergulhados em chá, chocolate quente, doce de
                leite ou café com leite. 
              </p>
            </article>

          </div>
        </div>
        <div class="dishesContent portugues">
          <img src="./img/foods/cozidoPortugues.png" alt="dish"></img>
          <div>
            <article>
              <h3><i>Cozido à Portuguesa</i></h3>
              <article> <span>&#9733;</span> <span>&#9733;</span> <span>&#9733;</span> <span>&#9733;</span>
                <span>&#9733;</span> </article>
              <p>O cozido à portuguesa é um clássico da cozinha de Portugal,
                sendo normalmente feito com vegetais cozidos e carnes.As receitas também podem levar feijão, cenoura,
                batata, arroz, nabo, frango, orelha e pé de porco, além de carne bovina.
              </p>
            </article>

          </div>
        </div>
        <div class="dishesContent portugues">
          <img src="./img/foods/arrozPolvo2.png" alt="dish"></img>
          <div>
            <article>
              <h3><i>Arroz de Polvo</i></h3>
              <article> <span>&#9733;</span> <span>&#9733;</span> <span>&#9733;</span> <span>&#9733;</span>
                <span>&#9733;</span> </article>
              <p>O arroz de polvo é bastante conhecido em terras lusitanas e é feito com um arroz de grão mais
                longo. Ele é cozido no mesmo caldo que o polvo é preparado, o que enfatiza ainda mais o seu sabor. A
                receita também inclui tomate, vinho branco, azeite e diversos tipos de temperos
              </p>
            </article>

          </div>
        </div>
        <!--
      <div class="dishesContent portugues">
        <img src="./img/foods/caldoVerde2.png" alt="dish"></img>
        <div>
          <article>
            <h3><i>Caldo Verde</i></h3>
              <article>               <span>&#9733;</span>               <span>&#9733;</span>               <span>&#9733;</span>               <span>&#9733;</span>               <span>&#9733;</span>           </article>
            <p>Os portugueses gostam muito de sopa, por isso o caldo verde é considerado uma das sete maravilhas da gastronomia do país – na categoria sopas. A receita leva batata, linguiça, couve, alho, azeite, cebola e rodelas de chouriço. Assim, para os dias mais frios, provar um caldo verde pode ser uma boa pedida!
            </p>
          </article>
        
        </div>
      </div> -->


        <div class="dishesContent italiano">
          <img src="./img/foods/pastelNata.png" alt="dish"></img>
          <div>
            <article>
              <h3><i>Lasagna</i></h3>
              <article> <span>&#9733;</span> <span>&#9733;</span> <span>&#9733;</span> <span>&#9733;</span>
                <span>&#9733;</span> </article>
              <p>A lasagna é uma das comidas típicas da Itália mais antigas. Ela tradicionalmente é feita com molho de
                carne moída (ragú), porém existem diversas outras versões deliciosas.
              </p>
            </article>

          </div>
        </div>
        <div class="dishesContent italiano">
          <img src="./img/foods/pastelNata.png" alt="dish"></img>
          <div>
            <article>
              <h3><i>Lasagna</i></h3>
              <article> <span>&#9733;</span> <span>&#9733;</span> <span>&#9733;</span> <span>&#9733;</span>
                <span>&#9733;</span> </article>
              <p>A lasagna é uma das comidas típicas da Itália mais antigas. Ela tradicionalmente é feita com molho de
                carne moída (ragú), porém existem diversas outras versões deliciosas.
              </p>
            </article>

          </div>
        </div>
        <div class="dishesContent italiano">
          <img src="./img/foods/pastelNata.png" alt="dish"></img>
          <div>
            <article>
              <h3><i>Lasagna</i></h3>
              <article> <span>&#9733;</span> <span>&#9733;</span> <span>&#9733;</span> <span>&#9733;</span>
                <span>&#9733;</span> </article>
              <p>A lasagna é uma das comidas típicas da Itália mais antigas. Ela tradicionalmente é feita com molho de
                carne moída (ragú), porém existem diversas outras versões deliciosas.
              </p>
            </article>

          </div>
        </div>
        <!--
       <div class="dishesContent italiano">
        <img src="./img/foods/pastelNata.png" alt="dish"></img>
        <div>
          <article>
            <h3><i>Lasagna</i></h3>
              <article>               <span>&#9733;</span>               <span>&#9733;</span>               <span>&#9733;</span>               <span>&#9733;</span>               <span>&#9733;</span>           </article>
            <p>A lasagna é uma das comidas típicas da Itália mais antigas. Ela tradicionalmente é feita com molho de carne moída (ragú), porém existem diversas outras versões deliciosas.
            </p>
          </article>
        
        </div>
      </div> -->

      </article>
    </div>
  </div>

  <div class="containerDiscover">
    <img src="./img/back/location.png" alt="">
    <article>
      <h4>Descubra</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic adipisci quae mollitia ipsum quod eius, non porro
        saepe a, eaque corporis quidem quos enim qui atque quaerat alias praesentium ullam.
      </p>
    </article>
  </div>

  <div class="containerAvaliations">
    <h3>O que as pessoas pensam de nós</h3>
    <div class="contentAvaliations">
      <article class="boxContentAvaliations hideImage">
        <img src="img/details/meat3.png" alt="starsFundo">

        <aside> <span>João Paulo</span>
          <article>
            <span>&#9733;</span>
            <span>&#9733;</span>
            <span>&#9733;</span>
            <span>&#9733;</span>
            <span>&#9733;</span>
          </article>
        </aside>
        <p class="textAvaliations">
          Adorei a comida, principalmente a porra, tava realmente bem recheada.
        </p>
      </article>
      <article class="boxContentAvaliations hideImage">
        <img src="img/details/meat3.png" alt="starsFundo">

        <aside> <span>José Arantes</span>
          <article>
            <span>&#9733;</span>
            <span>&#9733;</span>
            <span>&#9733;</span>
            <span>&#9733;</span>
            <span>&#9733;</span>
          </article>
        </aside>
        <p class="textAvaliations">
          Gostei da comida, bom tempero, suculenta, simplesmente sensacional.
        </p>
      </article>

      <article class="boxContentAvaliations">

        <div class="containerModalAvaliation">
          <form action="">
            <svg onclick="closeModal()" id="closeBtn" xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem"
              fill="#FFD700" class="bi bi-x-lg" viewBox="0 0 16 16">
              <path
                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
            </svg>
            <article class="boxInputAvaliation">
              <label for="nome">Digite seu nome:</label>
              <input required type="text" name="nome" id="nome" value="" />
            </article>
            <article class="boxInputAvaliation">
              <label for="comentario">Deixe seu comentário:</label>
              <textarea name="comentario" id="comentario" rows="4" cols="22"></textarea>
            </article>
            <article class="boxModalStars">
              <span class="contentStarsModal" dado-de-avalicao="1">&#9734;</span>
              <span class="contentStarsModal" dado-de-avalicao="2">&#9734;</span>
              <span class="contentStarsModal" dado-de-avalicao="3">&#9734;</span>
              <span class="contentStarsModal" dado-de-avalicao="4">&#9734;</span>
              <span class="contentStarsModal" dado-de-avalicao="5">&#9734;</span>
            </article>
            <p id="avaliationConfirmation">Clique nas estrelas para nos avaliar! <span id="selectedAvaliation"></span>
            </p>
            <button id="btnAvaliation" disabled type="submit">Enviar avaliação</button>
          </form>
        </div>
        <aside> <span>Avalie-nos também!</span>
        </aside>
        <div>
          <svg onclick="openModal()" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-plus"
            viewBox="0 0 16 16">
            <path
              d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
          </svg>
        </div>
      </article>
    </div>
  </div>


  <div class="containerContact" id="idForm">

    <?php if (isset($c) && $rs) { ?>
      <div id="containerDados">
        <h3>Olá
          <?= $c->getNome(); ?>, sua <br> reserva foi feita:
        </h3>

        <br>
        <article class="boxDados">
          <p>Sua mesa é:
            <?= $c->getMesa(); ?>
          </p>
          <p>A data escolhida foi:
            <?= $c->getData(); ?>
          </p>
          <p>Os pratos escolhidos foram:
            <?= $c->getDescricao(); ?>
          </p>
          <article>
      </div>
    <?php } else { ?>
      <form action="" id="form" method="POST">
        <h3>Reserve uma mesa!</h3>

        <br>

        <!-- <article class="boxInput">
      <label for="inputMesa">Insira sua mesa:</label>
      <input required type="text" name="inputMesa" id="inputMesa" placeholder="Mesa 1"  />
    </article>-->


        <article class="boxInput">
          <label for="inputName">Insira seu nome:</label>
          <input required type="text" name="inputName" id="inputName" placeholder="Nome" />
        </article>

        <article class="boxInput">
          <label for="inputPhoneNumber">Insira o seu telefone:</label>
          <input required type="text" name="inputPhoneNumber" id="inputPhoneNumber" placeholder="00 9 0000-0000" />
        </article>

        <article class="boxInput">
          <label for="inputDate">Insira a data desejada:</label>
          <input required type="date" name="inputDate" id="inputDate" />
        </article>

        <article class="boxInput">
          <label for="textComents">Insira os pratos servidos na ocasião:</label>
          <br>
          <textarea required name="textComents" id="textComents" rows="4" cols="20"
            placeholder="2 feijodadas e 1 caldo verde..."></textarea>
        </article>

        <button onclick="revealDados()">Confirmar Reserva</button>
      </form>






    <?php } ?>
    <div class="containerContactContent">
      <h3>Contate-nos</h3>
      <br>
      <aside>Escolha a forma mais conveniente:</aside>
      <br>
      <article class="boxContact">
        <h4>Contatos</h4>
        <br>
        <span>@patroCook</span>
        <br>
        <br>
        <span>(00) 0 0000 - 0000</span>
        <br>
        <br>
        <span>patrocookoficial@gmail.com</span>
      </article>
      <br>
      <article class="boxContact">
        <h4>yd</h4>
        <span>Ter - Dom</span>
        <br>
        <br>
        <span>9:00 - 20:00</span>
      </article>
      <button>Ligue agora</button>
    </div>
  </div>

  <div class="horizontalDivisor">&nbsp;</div>

  <footer>
    <div class="containerFlexFooter">
      <img src="./img/details/logo.svg" alt="logo">
      <div class="containerContentFooter">
        <article class="boxContentFooter">
          <h4>Sobre nós</h4>
          <aside>Home</aside>
          <aside>Reserva</aside>
          <aside>Cardápio</aside>
        </article>
        <article class="boxContentFooter">
          <h4>Serviços</h4>
          <aside>Delivery</aside>
          <aside>Eventos</aside>
        </article>
        <article class="boxContentFooter">
          <h4>Horários</h4>
          <aside>Seg - Dom :</aside>
          <aside>9:00-21:00</aside>
        </article>
      </div>
      <div class="containerSocialMedia">
        <img src="img/details/instagram.svg" alt="instagram">
        <img src="img/details/facebook.svg" alt="facebook">
      </div>
    </div>

  </footer>

  <aside> <i>Desenvolvido por Geraldo Bruno</i></aside>

  <script src="js/index.js"></script>
  <script src="js/dishes.js"></script>
  <script   src="https://code.jquery.com/jquery-3.7.1.min.js"  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="  crossorigin="anonymous"></script>
</body>

</html>