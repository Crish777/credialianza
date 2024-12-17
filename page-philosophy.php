<?php 
/**
 * Template Name: Philosophy Page
 *
 */

  get_header(); 
	$themeDirectory = themeDirectory();
  $homeDirectory = homeDirectory();
?>

<main class="siteMain">

  <div class="heroContainer darkGradient" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');">
    <div class="heroText textBottom">
      <h2 class="heroTitle">
        FILOSOFÍA
      </h2>
      <p class="heroParagraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
        ut labore et dolore magna aliqua. 
      </p>

    </div>
  </div>

  <div class="dualContainer">
    <div class="dualTextConatiner">
      <h2 class="blueTitle" data-aos="fade-left"  data-aos-duration="500">
        Trabajando 15 años   </br>
        <strong>para cumplir tus sueños </strong>
      </h2>

      <h3 class="blueSubtitle" data-aos="fade-left"  data-aos-duration="500">Siempre es un buen momento para ti </h3>

      <p class="dualParagraph" data-aos="fade-left"  data-aos-duration="500">
        Credialianza S.A.S es una empresa con amplia experiencia y credibilidad en el mercado del crédito de 
        libranzas. Ofrecemos atención personalizada en diferentes ciudades del país. La rapidez para diligenciar 
        el estudio de crédito y realizar el desembolso, y la importancia de responder de manera constante a las 
        necesidades de nuestros clientes son nuestros principales objetivos. </br></br>


        Nuestra filosofía consiste en crear una relación duradera con nuestros clientes al ofrecer 
        excelentes condiciones en nuestros créditos, a través de una red de asesores a nivel nacional, 
        disponibles en todo momento con el único propósito de prestar un servicio al cliente con calidad.
      </p>
    </div>
    <div style="background-image: url('<?= $themeDirectory; ?>trashimages/dual1.jpg');" class="dualImage" data-aos="fade-up"  data-aos-duration="700"></div>
  </div>

  <div class="pillPannelContainer">

    <div class="pillPannel" data-aos="fade-right"  data-aos-duration="500">
      <div class="pillimage" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');"></div>
      <div class="pillText">
        <h2 class="pillTitle">MISIÓN</h2>
        <p class="pillParagraph">Sabemos que nuestros clientes requieren de repuesta inmediata, nos esforzamos 
          para lograr que nuestros clientes obtengan créditos son condiciones favorables, en el menor tiempo 
          posible. 
        </p>
      </div>
    </div>

    <div class="pillPannel" data-aos="fade-left"  data-aos-duration="500">
      <div class="pillimage" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');"></div>
      <div class="pillText">
        <h2 class="pillTitle"><strong>VISIÓN</strong></h2>
        <p class="pillParagraph">Sabemos que nuestros clientes requieren de repuesta inmediata, nos esforzamos 
          para lograr que nuestros clientes obtengan créditos son condiciones favorables, en el menor tiempo 
          posible. 
        </p>
      </div>
    </div>

  </div>

  <div class="vualuesPannel">
    <h2 class="blueTitle centered">
      Nuestros </br>
      <strong>Valores</strong>
    </h2>

    <div class="valuesContainer">
      
      <div class="valueItem" >
        <h2 class="valueTitle" data-aos="fade-up"  data-aos-duration="500">Responsabilidad Social</h2>
        <p class="valuePharagraph" data-aos="fade-up"  data-aos-duration="500">
        Más que un apoyo financiero, buscamos proyectarnos ante nuestros clientes como una empresa con la 
        que puede contar en todo momento.
        </p>
      </div>

      <div class="valueItem">
        <h2 class="valueTitle" data-aos="fade-up"  data-aos-duration="500">Transparencia </br> <strong>y Honestidad</strong> </h2>
        <p class="valuePharagraph" data-aos="fade-up"  data-aos-duration="500">
        Para nosotros es muy importante mantener nuestra reputación, y ser reconocidos como una empresa 
        honesta que responde con transparencia a las necesidades de nuestros clientes.
        </p>
      </div>

      <div class="valueItem">
        <h2 class="valueTitle" data-aos="fade-up"  data-aos-duration="500">Máxima calidad </br> <strong>como meta</strong> </h2>
        <p class="valuePharagraph" data-aos="fade-up"  data-aos-duration="500">
          Buscamos ser altamente competitivos y optimizar constantemente nuestros 
          procesos con el único objetivo de generar confianza y ofrecer el mejor servicio a nuestros clientes.
        </p>
      </div>

      <div class="valueItem">
        <h2 class="valueTitle" data-aos="fade-up"  data-aos-duration="500">Adaptabilidad y </br>
        <strong>Legalidad</strong></h2>
        <p class="valuePharagraph" data-aos="fade-up"  data-aos-duration="500">
          Buscamos atender ágilmente a las necesidades de nuestros clientes 
          adaptándonos a los cambios que surgen en el mercado, siempre dentro del marco de la ética y la legalidad.</p>
      </div>
      
    </div>

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


  <div class="pannelContainer form" style="background-image: url('<?= $themeDirectory; ?>trashimages/pannel3.jpg');"  data-aos="fade-up"  data-aos-duration="700">
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

            <strong>Agrega aquí tu mensaje y pronto nos comunicaremos </br>  contigo  </strong>
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