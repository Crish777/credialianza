<?php 
/**
 * Template Name: Credit Page
 *
 */

   get_header(); 
	$themeDirectory = themeDirectory();
?>

<main class="siteMain">

  <div class="heroContainer darkGradient"
    style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');">
    <div class="heroText textBottom">
      <h2 class="heroTitle">
        CRÉDITO DE </br>
        <strong>LIBRANZA</strong>
      </h2>
      <p class="heroParagraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
        ut labore et dolore magna aliqua.
      </p>

    </div>
  </div>

  <div class="dualContainer">
    <div class="dualTextConatiner">
      <h2 class="blueTitle" data-aos="fade-left" data-aos-duration="500">
        Producto <strong>base</strong>
      </h2>

      <h3 class="blueSubtitle" data-aos="fade-left" data-aos-duration="500">Crédito de libranza para libre inversión
      </h3>

      <p class="dualParagraph" data-aos="fade-left" data-aos-duration="500">
        Credialianza maneja una única línea de crédito de libranza para libre inversión (consumo y ordinario).
        </br></br>
        Los clientes de Credialianza tienen acceso al servicio de crédito de libranza con el compromiso de ser
        cubiertos por cuotas fijas mensuales que directamente son descontadas por nómina de su salario o pensión.
        </br></br>
        Credialianza presta servicios de crédito bajo la modalidad de libranza a pensionados y activos de las
        entidades con las cuales tiene convenio para descuento por nómina.

      </p>
    </div>
    <div style="background-image: url('<?= $themeDirectory; ?>trashimages/dual1.jpg');" class="dualImage"
      data-aos="fade-up" data-aos-duration="700"></div>
  </div>

  <section class="siteSection creditStructure">
    <div class="structureInfo">
      <h2 class="blueTitle centered" data-aos="fade-up" data-aos-duration="500">
        ESTRUCTURA DE<br /> <strong>CRÉDITO</strong>
      </h2>
      <p class="siteParagraph text-center" data-aos="fade-up" data-aos-duration="500">
        <strong>El descuento no puede superar el 50% del neto de la pensión o salario</strong>, una vez sean realizados
        los descuentos de
        ley (Ley 1527 de 2012 y demás normas concordantes).
      </p>
    </div>

    <div class="structureCards">
      <div class="structureCard" data-aos="fade-up" data-aos-duration="500">
        <div class="iconStructureCard bg-ct"
          style="background-image: url(<?= $themeDirectory; ?>trashimages/iconCard.svg);"></div>
        <h3 class="structureSubtitleCard">Tasa <strong>de interés</strong></h3>
        <p class="textStructureCard siteParagraph">
          Las tasas de interés cobradas se ajustan mensualmente de acuerdo con la certificación de tasas de interés de
          la Superintendencia Financiera de Colombia para la modalidad de crédito consumo y ordinario. La tasa es
          publicada en la página web de CREDIALIANZA www.credialianza.com
        </p>
      </div>
      <div class="structureCard" data-aos="fade-up" data-aos-duration="600">
        <div class="iconStructureCard bg-ct"
          style="background-image: url('<?= $themeDirectory; ?>trashimages/iconCard.svg');"></div>
        <h3 class="structureSubtitleCard">Tasa <strong>de interés</strong></h3>
        <p class="textStructureCard siteParagraph">
          Las tasas de interés cobradas se ajustan mensualmente de acuerdo con la certificación de tasas de interés de
          la Superintendencia Financiera de Colombia para la modalidad de crédito consumo y ordinario. La tasa es
          publicada en la página web de CREDIALIANZA www.credialianza.com
        </p>
      </div>
      <div class="structureCard" data-aos="fade-up" data-aos-duration="700">
        <div class="iconStructureCard bg-ct"
          style="background-image: url(<?= $themeDirectory; ?>trashimages/iconCard.svg);"></div>
        <h3 class="structureSubtitleCard">Tasa <strong>de interés</strong></h3>
        <p class="textStructureCard siteParagraph">
          Las tasas de interés cobradas se ajustan mensualmente de acuerdo con la certificación de tasas de interés de
          la Superintendencia Financiera de Colombia para la modalidad de crédito consumo y ordinario. La tasa es
          publicada en la página web de CREDIALIANZA www.credialianza.com
        </p>
      </div>
    </div>
  </section>

  <div class="pannelContainer " data-aos="fade-up" data-aos-duration="700">
    <div class="imagePannerContainer" style="background-image: url('<?= $themeDirectory; ?>trashimages/pannel1.jpg');">
    </div>
    <div class="pannelTitleContainer">
      <h2 class="pannelTitle shadow">NUESTROS</br>
        <strong>BENEFICIOS</strong>
      </h2>
    </div>

    <div class="panelItemContainer">

      <div class="pannelItem">
        <img src="<?= themeDirectory(); ?>images/operator.svg" class="pannelItemIcon">
        <h3 class="pannelItemTitle">
          Asesoría </br>
          <strong>
            Personalizada
          </strong>
        </h3>
        <p class="pannelItemParagraph">
          Estamos ubicados en las principales ciudades del país, en donde nuestros asesores están
          dispuestos a atender sus requerimientos y necesidades de manera personalizada.
        </p>
      </div>


      <div class="pannelItem">
        <img src="<?= themeDirectory(); ?>images/operator.svg" class="pannelItemIcon">
        <h3 class="pannelItemTitle">
          Asesoría </br>
          <strong>
            Personalizada
          </strong>
        </h3>
        <p class="pannelItemParagraph">
          Ofrecemos condiciones favorables de crédito en el mercado, siempre con una tasa fija.
          Buscamos generar relaciones duraderas con nuestro clientes.
        </p>
      </div>


      <div class="pannelItem">
        <img src="<?= themeDirectory(); ?>images/operator.svg" class="pannelItemIcon" data-aos="reveal-image"
          data-aos-duration="1500" data-aos-delay="500">
        <h3 class="pannelItemTitle">
          Asesoría </br>
          <strong>
            Personalizada
          </strong>
        </h3>
        <p class="pannelItemParagraph">
          Buscamos facilitar la experiencia de nuestros clientes simplificando los requisitos para
          obtener un crédito.
        </p>
      </div>

      <div class="pannelItem">
        <img src="<?= themeDirectory(); ?>images/operator.svg" class="pannelItemIcon">
        <h3 class="pannelItemTitle">
          Asesoría </br>
          <strong>
            Personalizada
          </strong>
        </h3>
        <p class="pannelItemParagraph">
          Sabemos que nuestros clientes requieren de repuesta inmediata, nos esforzamos para lograr
          que nuestros clientes obtengan créditos son condiciones favorables, en el menor tiempo posible.
        </p>
      </div>


    </div>

    <!-- <button class="blueButton">
      Nuestros servicios
      <img src="<?= themeDirectory(); ?>images/arrowbutton.svg" class="buttonArrow">
    </button> -->

  </div>

  <!-- <div class="pannelContainer " style="background-image: url('<?= $themeDirectory; ?>trashimages/pannel1.jpg');"  data-aos="fade-up"  data-aos-duration="700">
    <div class="pannelTitleContainer">
      <h2 class="pannelTitle shadow">NUESTROS</br>
        <strong>SERVICIOS</strong> 
      </h2>
    </div>
    
    <div class="panelItemContainer">

      <div class="pannelItem">
        <img src="<?= themeDirectory(); ?>images/operator.svg" class="pannelItemIcon">
        <h3 class="pannelItemTitle">
          Asesoría </br>
          <strong>
            Personalizada
          </strong>
        </h3>
        <p class="pannelItemParagraph">
          Estamos ubicados en las principales ciudades del país, en donde nuestros asesores están 
          dispuestos a atender sus requerimientos y necesidades de manera personalizada.
        </p>
      </div>


      <div class="pannelItem">
        <img src="<?= themeDirectory(); ?>images/operator.svg" class="pannelItemIcon">
        <h3 class="pannelItemTitle">
          Asesoría </br>
          <strong>
            Personalizada
          </strong>
        </h3>
        <p class="pannelItemParagraph">
          Ofrecemos condiciones favorables de crédito en el mercado, siempre con una tasa fija. 
          Buscamos generar relaciones duraderas con nuestro clientes.
        </p>
      </div>


      <div class="pannelItem">
        <img src="<?= themeDirectory(); ?>images/operator.svg" class="pannelItemIcon" data-aos="reveal-image" data-aos-duration="1500" data-aos-delay="500">
        <h3 class="pannelItemTitle">
          Asesoría </br>
          <strong>
            Personalizada
          </strong>
        </h3>
        <p class="pannelItemParagraph">
          Buscamos facilitar la experiencia de nuestros clientes simplificando los requisitos para 
          obtener un crédito.
        </p>
      </div>

      <div class="pannelItem">
        <img src="<?= themeDirectory(); ?>images/operator.svg" class="pannelItemIcon">
        <h3 class="pannelItemTitle">
          Asesoría </br>
          <strong>
            Personalizada
          </strong>
        </h3>
        <p class="pannelItemParagraph">
        Sabemos que nuestros clientes requieren de repuesta inmediata, nos esforzamos para lograr 
        que nuestros clientes obtengan créditos son condiciones favorables, en el menor tiempo posible.
        </p>
      </div>


    </div>

    <button class="blueButton">
      Nuestros servicios
      <img src="<?= themeDirectory(); ?>images/arrowbutton.svg" class="buttonArrow">
    </button>

  </div> -->

  <div class="dualContainer inversed graySection">
    <div class="dualTextConatiner">
      <ul class="dualList">
        <li data-aos="fade-left" data-aos-duration="4000">No se tiene que preocupar por hacer el pago de su cuota. Es su
          entidad pagadora la encargada de realizar el descuento de su pensión para el pago de las cuotas del crédito
          adquirido.</li>
        <li data-aos="fade-left" data-aos-duration="4000">Facilidad para renovar su crédito. Una vez cuente con las
          condiciones requeridas, avanzando con sus pagos, podemos tramitar con facilidad la renovación de la deuda.
        </li>
        <li data-aos="fade-left" data-aos-duration="4000">Documentación mínima y tiempos de respuesta ágiles.</li>
        <li data-aos="fade-left" data-aos-duration="4000">Acceso a montos hasta $130.000.000.</li>
        <li data-aos="fade-left" data-aos-duration="4000">Tasas competitivas.</li>
        <li data-aos="fade-left" data-aos-duration="4000">Cuotas y tasas fijas durante la vigencia del crédito.</li>
        <li data-aos="fade-left" data-aos-duration="4000">Facilidad de plazos hasta 144 meses.</li>
        <li data-aos="fade-left" data-aos-duration="4000">Podrá elegir el uso que le quiera dar al crédito.</li>
        <li data-aos="fade-left" data-aos-duration="4000">Facilidad para el pago de la deuda.</li>
        <li data-aos="fade-left" data-aos-duration="4000">Sin aportes ni afiliaciones.</li>
        <li data-aos="fade-left" data-aos-duration="4000">Atención personalizada a través de asesores comerciales
          capacitados.</li>
        <li data-aos="fade-left" data-aos-duration="4000">Flexibilidad en el estudio de Data Crédito.</li>
      </ul>
    </div>


    <div style="background-image: url('<?= $themeDirectory; ?>trashimages/dual1.jpg');" class="dualImage"
      data-aos="fade-up" data-aos-duration="700"></div>
  </div>

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