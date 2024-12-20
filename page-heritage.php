<?php 
/**
 * Template Name: Heritage
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
        PATRIMONIO
        <br />
        <span class="noStroke">AUTÓNOMO</span>
      </h2>
      <p class="heroParagraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
        ut labore et dolore magna aliqua.
      </p>

    </div>
  </div>


  <?php
class Entidad {
    public string $image;
    public string $name;

    public function __construct(string $image, string $name) {
        $this->image = $image;
        $this->name = $name;
    }
}

$entidades = [
    new Entidad(themeDirectory().'trashimages/Icon1.png', 'CAGEN'),
    new Entidad(themeDirectory().'trashimages/Icon2.png', 'CREMIL'),
    new Entidad(themeDirectory().'trashimages/Icon3.png', 'CASUR'),
    new Entidad(themeDirectory().'trashimages/Icon4.png', 'COLFONDOS'),
    new Entidad(themeDirectory().'trashimages/Icon1.png', 'CAGEN'),
    new Entidad(themeDirectory().'trashimages/Icon2.png', 'CREMIL'),
    new Entidad(themeDirectory().'trashimages/Icon3.png', 'CASUR'),
    new Entidad(themeDirectory().'trashimages/Icon4.png', 'COLFONDOS'),
    new Entidad(themeDirectory().'trashimages/Icon1.png', 'CAGEN'),
    new Entidad(themeDirectory().'trashimages/Icon2.png', 'CREMIL'),
    new Entidad(themeDirectory().'trashimages/Icon3.png', 'CASUR'),
    new Entidad(themeDirectory().'trashimages/Icon4.png', 'COLFONDOS'),
    new Entidad(themeDirectory().'trashimages/Icon1.png', 'CAGEN'),
    new Entidad(themeDirectory().'trashimages/Icon2.png', 'CREMIL'),
    new Entidad(themeDirectory().'trashimages/Icon3.png', 'CASUR'),
    new Entidad(themeDirectory().'trashimages/Icon4.png', 'COLFONDOS'),
];

?>

  <div class="pannelContainer py-0" data-aos="fade-up" data-aos-duration="700">


    <p class="pannelParagraph black max-w-5xl">
      A través del <strong>PATRIMONIO AUTÓNOMO CREDIALIANZA</strong> con la Fiduciaria <strong>FIDUCOOMEVA</strong> se aprobaron importantes cupos de
      inversión, que han fortalecido a la compañía con proyecciones a futuro, reconociendo las buenas prácticas y
      políticas de riesgo adoptadas por Credialianza.
    </p>

    <div class="pannelLogoContainer threeColumns">

      <?php foreach ($entidades as $entidad): ?>
      <div class="pannelLogoItem">
        <img src="<?= $entidad->image; ?>" class="pannelLogoIcon">
        <h4 class="footerPannelLogo"><?= $entidad->name; ?></h4>
      </div>
      <?php endforeach; ?>

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