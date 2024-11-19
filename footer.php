<?php 
	$themeDirectory = themeDirectory();
?>

<footer class="siteFooter">
  <div class="footerContent">

    <div class="footerButtonSection">
      <a href="/" class="footerIconContainer">
        <img class="headerIcon" src="<?= themeDirectory(); ?>images/topIcon.svg">
      </a>

      <div class="footerButtonContainer">
        <a href="#" class="footerButton"  style="background-image: url('<?= $themeDirectory; ?>images/faceIcon.svg'); background-size: 40%;"></a>
        <a href="#" class="footerButton"  style="background-image: url('<?= $themeDirectory; ?>images/instaIcon.svg'); "></a>
        <a href="#" class="footerButton"  style="background-image: url('<?= $themeDirectory; ?>images/linkIcon.svg'); background-size: 50%;"></a>
      </div>
    </div>
    
    <div class="footerLinksContainer">
      <div class="footerLinks">
        <a href="#" class="footerLink">Nosotros</a>
        <a href="#" class="footerLink">Crédito de libranza</a>
        <a href="#" class="footerLink">Solicitudes</a>
      </div>

      <p class="footerLinkParagraph">©2024 CREDIALIANZA  / Políticas de privacidad / Términos y condiciones / Ver todas nuestras políticas</p>

    </div>

    
  </div>
</footer>


<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo themeDirectory();?>js/jquery-3.7.1.min.js"></script>
<script type="text/javascript" src="<?php echo themeDirectory();?>js/script.js"></script>
<script type="text/javascript"  src="<?= themeDirectory(); ?>js/slick.min.js"></script>
<!--script src="<?php echo themeDirectory();?>js/aos.js"></script -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>
