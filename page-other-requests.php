<?php 
/**
 * Template Name: Other requests
 *
 */

   get_header(); 
	$themeDirectory = themeDirectory();
?>

<main class="siteMain">

  <div class="heroContainer darkGradient"
    style="background-image: url('<?= $themeDirectory; ?>trashimages/about-1.jpg');">
    <div class="heroText textBottom">
      <h2 class="heroTitle">
        OTRAS
        <br />
        <span class="noStroke">SOLICITUDES</span>
      </h2>
      <p class="heroParagraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
        ut labore et dolore magna aliqua.
      </p>

    </div>
  </div>


  <div class="dualContainer">
    <div class="dualTextConatiner">
      <h2 class="blueTitle" data-aos="fade-left" data-aos-duration="500">
        Extracto actual y <strong>paz y salvo</strong>
      </h2>

      <p class="dualParagraph" data-aos="fade-left" data-aos-duration="500">
        Para la solicitud de tu extracto actual y paz y salvos debes enviar la solicitud al siguiente correo:
        <a href="mailto:atencionalcliente@credialianza.com" target="_blank">atencionalcliente@credialianza.com</a>
      </p>

      <div class="dualCard" data-aos="fade-left" data-aos-duration="500">
        <header class="headerDualCard">
          <h4 class="titleDualCard">GENERACIÓN DE DUPLICADOS</h4>
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

    </div>
    <div style="background-image: url('<?= $themeDirectory; ?>trashimages/dual1.jpg');" class="dualImage"
      data-aos="fade-up" data-aos-duration="700"></div>
  </div>

  <div class="dualContainer inversed">
    <div class="dualTextConatiner">
      <h2 class="blueTitle" data-aos="fade-left" data-aos-duration="500">
        Certificado de <strong>deuda</strong>
      </h2>

      <p class="dualParagraph" data-aos="fade-left" data-aos-duration="500">
        Solicite su certificado de deuda para pago anticipado. Diligencie y radique los formatos de certificado de deuda
        para pago anticipado y de origen de fondos en la oficina del asesor comercial de su ciudad.
        <br />
        <br />
        <strong>CREDIALIANZA</strong> le expedirá el Certificado de Saldo de la deuda a los 30 días hábiles siguientes
        de la fecha de
        radicación completa de la solicitud y pago del valor del certificado, para ser entregado de manera personal a
        través de la oficina de su asesor comercial, dentro del cronograma de entrega a disposición en las oficinas del
        asesor comercial de su ciudad.
      </p>

      <div class="dualCard" data-aos="fade-left" data-aos-duration="500">
        <header class="headerDualCard">
          <h4 class="titleDualCard">GENERACIÓN DE DUPLICADOS</h4>
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

    </div>
    <div style="background-image: url('<?= $themeDirectory; ?>trashimages/dual1.jpg');" class="dualImage"
      data-aos="fade-up" data-aos-duration="700"></div>
  </div>


  <div class="carouselContainer">
    <div class="carouselContainerAbsolute">

      <h2 class="blueTitle centered carouselSlick">
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