<?php 
/**
 * Template Name: Requests Page
 *
 */

   get_header(); 
	$themeDirectory = themeDirectory();
?>

<main class="siteMain">

  <div class="heromask">
    <div class="heroContainer darkGradientHero" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');">
      <div class="heroText textBottom">
        <h2 class="heroTitle">
          SOLICITUDES 
        </h2>
        <p class="heroParagraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
          ut labore et dolore magna aliqua. 
        </p>
  
      </div>
    </div>
    <div class="heroMaskBottom">
      <a class="maskItem" href="<?= homeDirectory(); ?>/">Solicita tu crédito</a>
      <a class="maskItem" href="<?= homeDirectory(); ?>/">Extracto actual</a>
      <a class="maskItem" href="<?= homeDirectory(); ?>/">Paz y salvo</a>
      <a class="maskItem" href="<?= homeDirectory(); ?>/">Certificado de deuda</a>
    </div>
  </div>


  <div class="dualContainer">
    <div class="dualTextConatiner">
      <h2 class="blueTitle" data-aos="fade-left"  data-aos-duration="500">
        Te ayudamos a </br>
        <strong>cumplir tus sueños</strong>
      </h2>

      <h3 class="blueSubtitle" data-aos="fade-left"  data-aos-duration="500">Cumplirlos es muy sencillo  </h3>

      <p class="dualParagraph" data-aos="fade-left"  data-aos-duration="500">
        Si estás interesado en adquirir un crédito de libranza con nosotros, déjanos tus datos y uno de nuestros 
        representantes se comunicará contigo en breve.
      </p>
    </div>
    <div class="dualForm">
        <div class="formSection">
          <div class="formItem dual">
            <h2 class="formItemTitle">Nombres</h2>
            <input type="text" class="formItemInput">
          </div>
        </div>
        <div class="formSection">
          <div class="formItem dual">
            <h2 class="formItemTitle">Celular</h2>
            <input type="text" class="formItemInput">
          </div>
        </div>
      <div class="formSection">
          <div class="formItem dual">
            <h2 class="formItemTitle">Email</h2>
            <input type="text" class="formItemInput">
          </div>
      </div>
      <div class="formSection">
          <div class="formItem dual">
            <h2 class="formItemTitle">¿Cuál es tu entidad pensional?</h2>
            <input type="text" class="formItemInput">
          </div>
      </div>
      <div class="agreementContainer">
        <label class="agreementCheckbox">
          <input type="checkbox" />
          <span></span>
        </label>
        <p class="agreedmentText">Acepto la política de privacidad y los términos y condiciones. Acepto la política de privacidad y los términos y condiciones.</p>
      </div>
      <button class="blueButton">
        Enviar
        <img src="<?= themeDirectory(); ?>images/arrowbutton.svg" class="buttonArrow">
      </button>
    </div>
    
  </div>


  <div class="pannelContainer form " style="background-image: url('<?= $themeDirectory; ?>trashimages/pannel2.png');"  data-aos="fade-up"  data-aos-duration="700">
    <div class="pannelTitleContainer">
      <h2 class="pannelTitle">Extracto</br>
        <strong>Actual</strong> 
      </h2>
    </div>

    <p class="pannelParagraph">
    Llena todos los datos solicitados en el siguiente</br> 
    formulario para iniciar tu trámite de solicitud:
    </p>

    <form class="formContainer large">
      <h3 class="pannelSubtitle">
        Diligenciar <strong>Formulario</strong>
      </h3>
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

      <div class="agreementContainer">
        <label class="agreementCheckbox">
          <input type="checkbox" />
          <span></span>
        </label>
        <p class="agreedmentText">Acepto la política de privacidad y los términos y condiciones. Acepto la política de privacidad y los términos y condiciones.</p>
      </div>

      <h3 class="pannelSubtitle">
        Diligenciar <strong>Formulario</strong>
      </h3>

      <div class="formInputContainer">
        <div class="formInput" data-aos="fade-right" data-aos-duration="500">
          <h4 class="formInputTitle">Desprendible pago de pensión</h4>
          <div class="formInputIconContainer">
            <label class="formInputLabel">
              <div class="formInputIcon"></div>
              <input type="file" class="formInputFile" accept="application/pdf" />
            </label>
          </div>
          <div class="fileInfo">
            <div class="fileIcon"></div>
            <p class="fileName"></p>
            <div class="removeFile"></div>
          </div>
        </div>

        <div class="formInput" data-aos="fade-left" data-aos-duration="500">
          <h4 class="formInputTitle">Desprendible pago de pensión</h4>
          <div class="formInputIconContainer">
            <label class="formInputLabel">
              <div class="formInputIcon"></div>
              <input type="file" class="formInputFile" accept="application/pdf" />
            </label>
          </div>
          <div class="fileInfo">
            <div class="fileIcon"></div>
            <p class="fileName"></p>
            <div class="removeFile"></div>
          </div>
        </div>
      </div>

      <button class="blueButton">
        Enviar 
        <img src="<?= themeDirectory(); ?>images/arrowbutton.svg" class="buttonArrow"> 
      </button>
    </form>
  </div>

  <div class="pannelContainer form" data-aos="fade-up"  data-aos-duration="700">
      <h2 class="blueTitle centered carouselSlick">
        Paz y</br>
          <strong>
            Salvo
          </strong>
      </h2>

    <p class="pannelParagraph black">
    Llena todos los datos solicitados en el siguiente</br> 
    formulario para iniciar tu trámite de solicitud:
    </p>

    <form class="formContainer large opaque">
      <h3 class="pannelSubtitle">
        Diligenciar <strong>Formulario</strong>
      </h3>
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

      <div class="agreementContainer">
        <label class="agreementCheckbox">
          <input type="checkbox" />
          <span></span>
        </label>
        <p class="agreedmentText">Acepto la política de privacidad y los términos y condiciones. Acepto la política de privacidad y los términos y condiciones.</p>
      </div>

      <h3 class="pannelSubtitle">
        Diligenciar <strong>Formulario</strong>
      </h3>

      <div class="formInputContainer">

        <div class="formInput" data-aos="fade-right" data-aos-duration="500">
          <h4 class="formInputTitle">Fotocopia de la cédula ampliada al 150%</h4>
          <div class="formInputIconContainer">
            <label class="formInputLabel">
              <div class="formInputIcon"></div>
              <input type="file" class="formInputFile" accept="application/pdf" />
            </label>
          </div>
          <div class="fileInfo">
            <div class="fileIcon"></div>
            <p class="fileName"></p>
            <div class="removeFile"></div>
          </div>
        </div>

      </div>

      <button class="blueButton">
        Enviar
        <img src="<?= themeDirectory(); ?>images/arrowbutton.svg" class="buttonArrow">
      </button>
    </form>
  </div>

  <div class="dualContainer">
    <div class="dualTextConatiner" >
      <h2 class="blueTitle" data-aos="fade-left"  data-aos-duration="500">
        Certificado de </br>
        <strong>deuda</strong>
      </h2>

      <p class="dualParagraph" data-aos="fade-left"  data-aos-duration="500">
      Solicite su certificado de deuda para pago anticipado. Diligencie y radique los formatos de certificado de deuda para 
      pago anticipado y de origen de fondos en la oficina del asesor comercial de su ciudad.
      </br></br>
      La expedición del Certificado de Saldo tendrá un costo de $60.000 (* tarifa vigente a partir del 1 de junio de 2023) 
      y una vigencia de dos días (2) hábiles a partir de su expedición. Si se vence y no ha pagado, deberá solicitar nuevo 
      certificado con actualización del saldo adeudado.
      </br></br>
      <strong>CREDIALIANZA</strong> le expedirá el Certificado de Saldo de la deuda a los 30 días hábiles siguientes de la 
      fecha de radicación completa de la solicitud y pago del valor del certificado, para ser entregado de manera personal 
      a través de la oficina de su asesor comercial, dentro del cronograma de entrega a disposición en las oficinas del 
      asesor comercial de su ciudad.
      Credialianza maneja una única línea de crédito de libranza para libre inversión (consumo y ordinario).
      </p>
    </div>
    <div style="background-image: url('<?= $themeDirectory; ?>trashimages/dual1.jpg');" class="dualImage" data-aos="fade-up"  data-aos-duration="700"></div>
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