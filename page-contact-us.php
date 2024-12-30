<?php 
/**
 * Template Name: Contact Us Page
 *
 */

   get_header(); 
	$themeDirectory = themeDirectory();
?>



<main class="siteMain">

  <div class="heroContainer darkGradient"
    style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');">
    <div class="heroText">
      <h2 class="heroTitle">
        CONTÁCTANOS
      </h2>

    </div>
  </div>

  <div class="pannelMap">


    <div class="controllersMapMobile">
      <div class="listView controllerView active">Lista</div>
      <div class="mapView controllerView">Mapa</div>
    </div>
    <div class="innerPanelMap">
      <div class="listContainer">
        <h2 class="blueTitle">
          Nuestras </br>
          <strong>sedes</strong>
        </h2>
        <div class="mapList">
          <div class="mapItem">
            <div class="cityName">
              <h2 class="cityNameTitle">Sede principal</h2>
              <img class="cityNameIcon" src="<?= themeDirectory(); ?>images/mappointerIcon.svg">
            </div>
            <ul class="addressContainer">
              <li class="address" id="address-1" onclick="launchStore(1)">Calle 113 No. 7-45. Oficina 503</li>
              <li class="address" id="address-2" onclick="launchStore(2)">Calle 45 No. 90-32. BIS </li>
              <li class="address" id="address-3" onclick="launchStore(3)">Carrera 7 No. 32-16</li>
              <li class="address" id="address-4" onclick="launchStore(4)">Carrera 37 calle 3 No. 05-25</li>
            </ul>
          </div>

          <div class="mapItem">
            <div class="cityName">
              <h2 class="cityNameTitle">Bogota</h2>
              <img class="cityNameIcon" src="<?= themeDirectory(); ?>images/mappointerIcon.svg">
            </div>
            <ul class="addressContainer">
              <li class="address" id="address-5" onclick="launchStore(5)">Calle 113 No. 7-45. Oficina 503</li>
              <li class="address" id="address-6" onclick="launchStore(6)">Calle 45 No. 90-32. BIS </li>
              <li class="address" id="address-7" onclick="launchStore(7)">Carrera 7 No. 32-16</li>
            </ul>
          </div>

        </div>

      </div>
      <div class="mapContainer mapPortion" id="mapContainer">

        <div class="marker" data-id="0" data-lat="4.6648223" data-lng="-74.05148650000001">
          <div class="markerContent">
            <div class="markerText singleContent">
              <h2 class="markerTitle">Calle 49 #50-21</h2>
              <h3 class="markSubtitle">Oficina 1006</h3>
              <h4 class="markName">Ed. El Café</h4>
            </div>
            <a class="btnStoreGoogleMaps" href="https://maps.app.goo.gl/LX2eGnfP72WKuyGz7" target="_blank">Ver en Google
              Maps</a>
            <style>
            .btnStoreGoogleMaps {
              display: inline-block;
              margin-top: 10px;
              padding: 10px 20px;
              background-color: #ff6347;
              color: white;
              text-decoration: none;
              border-radius: 5px;
            }

            .btnStoreGoogleMaps:hover {
              background-color: #e5533d;
            }
            </style>
          </div>
        </div>

        <div class="marker" data-id="1" data-lat="4.6938576" data-lng="-74.04788819999999">
          <div class="markerContent">
            <h3 class="markerTitle subtitle orange boldTitle">
              Calle 109
            </h3>
            <h4 class="markerText singleContent">
              <p><strong>Calle 109 # 17-83</strong></p>
              <p><em>Lunes a Sábado:</em></p>
              <p>10 am a 8 pm</p>
              <p><em>Domingo y Festivos:</em></p>
              <p>10:30 am a 6:30 pm</p>
            </h4>
            <a class="btnStoreGoogleMaps" href="https://maps.app.goo.gl/gnZzq5kJTtUAhf327" target="_blank">Ver en Google
              Maps</a>
            <style>
            .btnStoreGoogleMaps {
              display: inline-block;
              margin-top: 10px;
              padding: 10px 20px;
              background-color: #ff6347;
              color: white;
              text-decoration: none;
              border-radius: 5px;
            }

            .btnStoreGoogleMaps:hover {
              background-color: #e5533d;
            }
            </style>
          </div>
        </div>

        <div class="marker" data-id="2" data-lat="4.695723399999999" data-lng="-74.03103090000002">
          <div class="markerContent">
            <h3 class="markerTitle subtitle orange boldTitle">
              Usaquén
            </h3>
            <h4 class="markerText singleContent">
              <p><strong>Carrera 6A # 119-21</strong></p>
              <p><em>Lunes a Sábado:</em></p>
              <p>10 am a 7 pm</p>
              <p><em>Domingo y Festivos:</em></p>
              <p>10 am a 6 pm</p>
            </h4>
            <a class="btnStoreGoogleMaps" href="https://maps.app.goo.gl/rP5BEB8iPDsBL1sg6" target="_blank">Ver en Google
              Maps</a>
            <style>
            .btnStoreGoogleMaps {
              display: inline-block;
              margin-top: 10px;
              padding: 10px 20px;
              background-color: #ff6347;
              color: white;
              text-decoration: none;
              border-radius: 5px;
            }

            .btnStoreGoogleMaps:hover {
              background-color: #e5533d;
            }
            </style>
          </div>
        </div>

        <div class="marker" data-id="3" data-lat="4.690731" data-lng="-74.03667000000002">
          <div class="markerContent">
            <h3 class="markerTitle subtitle orange boldTitle">
              C.C. Santa Ana
            </h3>
            <h4 class="markerText singleContent">
              <p><strong>Avenida 9 &#8211; NQS con calle 110, local 201-204</strong></p>
              <p><em>Lunes a Sábado:</em></p>
              <p>10 am a 8 pm</p>
              <p><em>Domingo y Festivos:</em></p>
              <p>10 am a 7 pm</p>
            </h4>
            <a class="btnStoreGoogleMaps" href="https://maps.app.goo.gl/4hZ7MV7kuBCN3Dri7" target="_blank">Ver en Google
              Maps</a>
            <style>
            .btnStoreGoogleMaps {
              display: inline-block;
              margin-top: 10px;
              padding: 10px 20px;
              background-color: #ff6347;
              color: white;
              text-decoration: none;
              border-radius: 5px;
            }

            .btnStoreGoogleMaps:hover {
              background-color: #e5533d;
            }
            </style>
          </div>
        </div>

        <div class="marker" data-id="4" data-lat="4.733214274550032" data-lng="-74.06663449814755">
          <div class="markerContent">
            <h3 class="markerTitle subtitle orange boldTitle">
              C.C. Parque La Colina
            </h3>
            <h4 class="markerText singleContent">
              <p><strong>C.C Parque La Colina, Tercer piso al lado de Tugó</strong></p>
              <p><em>Lunes a Sábado:</em></p>
              <p>10 am a 9 pm</p>
              <p><em>Domingo y Festivos:</em></p>
              <p>10 am a 8 pm</p>
              <p>&nbsp;</p>
            </h4>
            <a class="btnStoreGoogleMaps" href="https://g.co/kgs/o3zLv3A" target="_blank">Ver en Google Maps</a>
            <style>
            .btnStoreGoogleMaps {
              display: inline-block;
              margin-top: 10px;
              padding: 10px 20px;
              background-color: #ff6347;
              color: white;
              text-decoration: none;
              border-radius: 5px;
            }

            .btnStoreGoogleMaps:hover {
              background-color: #e5533d;
            }
            </style>
          </div>
        </div>

        <div class="marker" data-id="5" data-lat="4.648261151616263" data-lng="-74.10240194921266">
          <div class="markerContent">
            <h3 class="markerTitle subtitle orange boldTitle">
              C.C Gran Estación costado Esfera
            </h3>
            <h4 class="markerText singleContent">
              <p><strong>Avenida Calle 26 #62-47, 223</strong></p>
              <p>Lunes y martes:</p>
              <p>10 am a 8 pm</p>
              <p>Miércoles a sábado:</p>
              <p>10 am a 9 pm</p>
              <p>Domingos y festivos:</p>
              <p>11 am a 8 pm</p>
            </h4>
            <a class="btnStoreGoogleMaps" href="https://maps.app.goo.gl/hRXtM63K33jvmPTa6" target="_blank">Ver en Google
              Maps</a>
            <style>
            .btnStoreGoogleMaps {
              display: inline-block;
              margin-top: 10px;
              padding: 10px 20px;
              background-color: #ff6347;
              color: white;
              text-decoration: none;
              border-radius: 5px;
            }

            .btnStoreGoogleMaps:hover {
              background-color: #e5533d;
            }
            </style>
          </div>
        </div>

        <div class="marker" data-id="6" data-lat="4.6947085" data-lng="-74.086368">
          <div class="markerContent">
            <h3 class="markerTitle subtitle orange boldTitle">
              Cachivaches CC Titán Plaza
            </h3>
            <h4 class="markerText singleContent">
              <p><strong>Av. Boyacá #80-94</strong><strong>, Local 224</strong></p>
              <p><em>Lunes a jueves: </em></p>
              <p>10 am a 8:30</p>
              <p><em>Viernes a sábado:</em></p>
              <p>10am a 9pm</p>
              <p><em>Domingos y festivos:</em></p>
              <p>10am a 8pm</p>
            </h4>
            <a class="btnStoreGoogleMaps" href="https://maps.app.goo.gl/STKKWceigJcaPfe89" target="_blank">Ver en Google
              Maps</a>
            <style>
            .btnStoreGoogleMaps {
              display: inline-block;
              margin-top: 10px;
              padding: 10px 20px;
              background-color: #ff6347;
              color: white;
              text-decoration: none;
              border-radius: 5px;
            }

            .btnStoreGoogleMaps:hover {
              background-color: #e5533d;
            }
            </style>
          </div>
        </div>

        <div class="marker" data-id="7" data-lat="6.3255133" data-lng="-75.5582642">
          <div class="markerContent">
            <h3 class="markerTitle subtitle orange boldTitle">
              C.C. Parque Fabricato, Bello
            </h3>
            <h4 class="markerText singleContent">
              <p><strong>Cra. 50 #38a-185, Rincon Santos, Bello, Antioquia Local 3288</strong></p>
              <p><em>Lunes a Jueves:</em></p>
              <p>10 am a 8 pm</p>
              <p><em>Viernes y Sábado:</em></p>
              <p>10 am a 9 pm</p>
              <p><em>Domingo y Festivos:</em></p>
              <p>11 am a 8 pm</p>
            </h4>
            <a class="btnStoreGoogleMaps" href="https://maps.app.goo.gl/3Br63ip9ewk8waEGA" target="_blank">Ver en Google
              Maps</a>
            <style>
            .btnStoreGoogleMaps {
              display: inline-block;
              margin-top: 10px;
              padding: 10px 20px;
              background-color: #ff6347;
              color: white;
              text-decoration: none;
              border-radius: 5px;
            }

            .btnStoreGoogleMaps:hover {
              background-color: #e5533d;
            }
            </style>
          </div>
        </div>


      </div>
    </div>
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