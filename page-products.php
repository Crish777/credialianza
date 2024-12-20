<?php 
/**
 * Template Name: Products
 *
 */

  get_header(); 
	$themeDirectory = themeDirectory();
  $homeDirectory = homeDirectory();
?>

<main class="siteMain">

  <div class="heroContainer darkGradient"
    style="background-image: url('<?= $themeDirectory; ?>trashimages/about-1.jpg');">
    <div class="heroText textBottom">
      <h2 class="heroTitle">
        PRODUCTOS
      </h2>
      <p class="heroParagraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
        ut labore et dolore magna aliqua.
      </p>

    </div>
  </div>


  <section class="siteSection stickyAsideNav narrowerNav">
    <aside class="interactiveAsideUl">
      <ul class="interactiveUl">
        <li class="interactiveUlItem active">Pensionados</li>
        <li class="interactiveUlItem">Empleados públicos </li>
        <li class="interactiveUlItem">Fuerzas armadas</li>
      </ul>

    </aside>
    <div class="slickArticleSide">

      <article class="siwtchContentSide" data-index="0">
        <div class="dualContainer inversed">
          <div class="dualTextConatiner">
            <h2 class="blueTitle" data-aos="fade-left" data-aos-duration="500">
              Empleados <strong>Públicos</strong>
            </h2>

            <p class="dualParagraph" data-aos="fade-left" data-aos-duration="500">
              Obtén un crédito de forma inmediata, segura y confiable. Tenemos convenios con muchas instituciones
              gubernamentales a nivel nacional que te permiten acceder a un producto financiero para cada necesidad que
              tengas.
            </p>

            <div class="dualCard">
              <header class="headerDualCard">
                <h4 class="titleDualCard">BENEFICIOS</h4>
              </header>
              <ul class="contentDualCard">
                <li class="dualCardItem">
                  <p class="dualCardItemText"><strong>Edad: </strong>Hasta 57 años para mujeres y hasta 62 años para
                    hombres</p>
                </li>
                <li class="dualCardItem">
                  <p class="dualCardItemText"><strong>Plazos otorgados: </strong>Hasta 144 meses</p>
                </li>
                <li class="dualCardItem">
                  <p class="dualCardItemText"><strong>Montos: </strong>Desde 1 millón hasta $140 millones</p>
                </li>
              </ul>
            </div>

            <button class="blueButton">
              Solicita tu crédito
              <img src="<?= themeDirectory(); ?>images/arrowbutton.svg" class="buttonArrow">
            </button>

          </div>
          <div style="background-image: url('<?= $themeDirectory; ?>trashimages/dual1.jpg');" class="dualImage"
            data-aos="fade-up" data-aos-duration="700"></div>
        </div>
      </article>
      <article class="siwtchContentSide" data-index="1">
        <h2 class="blueTitle">
          Continuidad de </br>
          <strong>Negocio </strong>
        </h2>

        <p class="dualParagraph">
          Se creó el plan de continuidad de negocio (PCN) con el objetivo de Garantizar que, ante una situación de
          crisis
          o interrupción, Credialianza pueda mantener sus servicios esenciales y volver a la normalidad en el menor
          tiempo
          posible. </br></br>
          Los componentes más destacados en el PCN se presentan los siguientes:
        </p>

        <ol>
          <li>
            <h3><strong>Análisis de impacto en el negocio (BIA)</strong></h3>
            <p>Se cuenta con una evaluación de los procesos críticos y su impacto en caso de interrupciones.</p>
          </li>
          <li>
            <h3><strong>Planes de continuidad de negocio (PCM)</strong></h3>
            <p>Se desarrollaron los respectivos procedimientos para mitigar el impacto y recuperar operaciones.</p>
          </li>
          <li>
            <h3><strong>Simulacros y pruebas</strong></h3>
            <p>A pesar de que no se realización simulacros para evaluar la efectividad de los planes de continuidad,
              estos
              se esperan sean realizados durante el siguiente año.</p>
          </li>
          <li>
            <h3><strong>Capacitaciones</strong></h3>
            <p>Se llevó a cabo proceso de formación para los empleados sobre su rol en caso de activación del plan de
              continuidad.</p>
          </li>
        </ol>
      </article>
      <article class="siwtchContentSide" data-index="2">
        <h2 class="blueTitle">
          Continuidad de </br>
          <strong>Negocio </strong>
        </h2>

        <p class="dualParagraph">
          Se creó el plan de continuidad de negocio (PCN) con el objetivo de Garantizar que, ante una situación de
          crisis
          o interrupción, Credialianza pueda mantener sus servicios esenciales y volver a la normalidad en el menor
          tiempo
          posible. </br></br>
          Los componentes más destacados en el PCN se presentan los siguientes:
        </p>

        <ol>
          <li>
            <h3><strong>Análisis de impacto en el negocio (BIA)</strong></h3>
            <p>Se cuenta con una evaluación de los procesos críticos y su impacto en caso de interrupciones.</p>
          </li>
          <li>
            <h3><strong>Planes de continuidad de negocio (PCM)</strong></h3>
            <p>Se desarrollaron los respectivos procedimientos para mitigar el impacto y recuperar operaciones.</p>
          </li>
          <li>
            <h3><strong>Simulacros y pruebas</strong></h3>
            <p>A pesar de que no se realización simulacros para evaluar la efectividad de los planes de continuidad,
              estos
              se esperan sean realizados durante el siguiente año.</p>
          </li>
          <li>
            <h3><strong>Capacitaciones</strong></h3>
            <p>Se llevó a cabo proceso de formación para los empleados sobre su rol en caso de activación del plan de
              continuidad.</p>
          </li>
        </ol>
      </article>
    </div>

  </section>

  <div class="carouselContainer lessMargin">
    <div class="carouselContainerAbsolute">

      <h2 class="blueTitle centered">
        Nuestros </br>
        <strong>Aliados</strong>
      </h2>
      <div class="carousel">
        <div class="carouselGroup">
          <div class="carouselCard">
            <img src="<?= themeDirectory(); ?>trashimages/logo1.png" class="carouselItem">
          </div>

          <div class="carouselCard">
            <img src="<?= themeDirectory(); ?>trashimages/logo2.jpg" class="carouselItem">
          </div>

          <div class="carouselCard">
            <img src="<?= themeDirectory(); ?>trashimages/logo3.png" class="carouselItem">
          </div>

          <div class="carouselCard">
            <img src="<?= themeDirectory(); ?>trashimages/logo4.png" class="carouselItem">
          </div>
        </div>
        <!-- Add `aria-hidden` to hide the duplicated carouselCards from screen readers. -->
        <div aria-hidden class="carouselGroup">
          <div class="carouselCard">
            <img src="<?= themeDirectory(); ?>trashimages/logo1.png" class="carouselItem">
          </div>

          <div class="carouselCard">
            <img src="<?= themeDirectory(); ?>trashimages/logo2.jpg" class="carouselItem">
          </div>

          <div class="carouselCard">
            <img src="<?= themeDirectory(); ?>trashimages/logo3.png" class="carouselItem">
          </div>

          <div class="carouselCard">
            <img src="<?= themeDirectory(); ?>trashimages/logo4.png" class="carouselItem">
          </div>
        </div>
      </div>

    </div>


  </div>


  <div class="pannelContainer form" style="background-image: url('<?= $themeDirectory; ?>trashimages/pannel3.jpg');"
    data-aos="fade-up" data-aos-duration="700">
    <h2 class="formHollowTitle">
      CONTÁCTANOS
    </h2>
    <p class="pannelParagraph">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </br>
      eiusmod tempor incididunt ut labore et dolore magna aliqua.
    </p>

    <form class="formContainer">
      <div class="formSection">
        <div class="formItem">
          <h2 class="formItemTitle">Nombres</h2>
          <input type="text" class="formItemInput">
        </div>
        <div class="formItem">
          <h2 class="formItemTitle">Apellidos</h2>
          <input type="text" class="formItemInput">
        </div>
      </div>

      <div class="formSection">
        <div class="formItem">
          <h2 class="formItemTitle">Email</h2>
          <input type="text" class="formItemInput">
        </div>
        <div class="formItem">
          <h2 class="formItemTitle">Celular</h2>
          <input type="text" class="formItemInput">
        </div>
      </div>

      <div class="formSection">
        <div class="formItem comments">
          <h2 class="formItemTitle">
            Comentarios </br>

            <strong>Agrega aquí tu mensaje y pronto nos comunicaremos </br> contigo </strong>
          </h2>
          <input type="text" class="formItemInput">
        </div>
      </div>

      <button class="blueButton">
        Enviar
        <img src="<?= themeDirectory(); ?>images/arrowbutton.svg" class="buttonArrow">
      </button>
    </form>

    <div class="formBottom">
      <div class="formBottomSection">
        <h2 class="formBottomTitle">Dirección:</h2>
        <p class="formBottomParagraph">
          Calle 113 No. 7-45. Oficina 503 </br>
          Torre B, Ed. Teleport Businness Park
        </p>
      </div>
      <span class="verticalLine"> </span>


      <div class="formBottomSection">
        <h2 class="formBottomTitle">Teléfono:</h2>
        <p class="formBottomParagraph">
          +60 (1) 7940110
        </p>
      </div>
      <span class="verticalLine"> </span>


      <div class="formBottomSection">
        <h2 class="formBottomTitle">Celular:</h2>
        <p class="formBottomParagraph">
          01 8000 196015
        </p>
      </div>
      <span class="verticalLine"> </span>

      <div class="formBottomSection">
        <h2 class="formBottomTitle">Email:</h2>
        <p class="formBottomParagraph">
          atencionalcliente@credialianza.com
        </p>
      </div>
    </div>
  </div>

</main>


<?php 

   get_footer(); 
?>