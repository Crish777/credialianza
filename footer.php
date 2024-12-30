<?php 
	$themeDirectory = themeDirectory();
?>

<footer class="siteFooter">
  <div class="footerContent">

    <div class="footerButtonSection">
      <a href="/" class="footerIconContainer">
        <img class="footerIcon" src="<?= themeDirectory(); ?>images/topIcon.svg">
      </a>

      <div class="footerButtonContainer">
        <a href="#" class="footerButton"
          style="background-image: url('<?= $themeDirectory; ?>images/faceIcon.svg'); background-size: 40%;"></a>
        <a href="#" class="footerButton"
          style="background-image: url('<?= $themeDirectory; ?>images/instaIcon.svg'); "></a>
        <a href="#" class="footerButton"
          style="background-image: url('<?= $themeDirectory; ?>images/linkIcon.svg'); background-size: 50%;"></a>
      </div>
    </div>

    <div class="footerLinksContainer">
      <div class="footerLinks">
        <a href="#" class="footerLink">Nosotros</a>
        <a href="#" class="footerLink">Crédito de libranza</a>
        <a href="#" class="footerLink">Solicitudes</a>
      </div>

      <div class="footerButtonContainerMobile">
        <a href="#" class="footerButton"
          style="background-image: url('<?= $themeDirectory; ?>images/faceIcon.svg'); background-size: 40%;"></a>
        <a href="#" class="footerButton"
          style="background-image: url('<?= $themeDirectory; ?>images/instaIcon.svg'); "></a>
        <a href="#" class="footerButton"
          style="background-image: url('<?= $themeDirectory; ?>images/linkIcon.svg'); background-size: 50%;"></a>
      </div>

      <p class="footerLinkParagraph">©2024 CREDIALIANZA / Políticas de privacidad / Términos y condiciones / Ver todas
        nuestras políticas</p>

    </div>

  </div>
</footer>


<?php wp_footer(); ?>
<script>
  var themeDirectory = '<?= themeDirectory(); ?>';
</script>
<script type="text/javascript" src="<?php echo themeDirectory();?>js/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script type="text/javascript" src="<?= themeDirectory(); ?>js/slick.min.js"></script>
<!-- <script>
(g => {
  var h, a, k, p = "The Google Maps JavaScript API",
    c = "google",
    l = "importLibrary",
    q = "__ib__",
    m = document,
    b = window;
  b = b[c] || (b[c] = {});
  var d = b.maps || (b.maps = {}),
    r = new Set,
    e = new URLSearchParams,
    u = () => h || (h = new Promise(async (f, n) => {
      await (a = m.createElement("script"));
      e.set("libraries", [...r] + "");
      for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
      e.set("callback", c + ".maps." + q);
      a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
      d[q] = f;
      a.onerror = () => h = n(Error(p + " could not load."));
      a.nonce = m.querySelector("script[nonce]")?.nonce || "";
      m.head.append(a)
    }));
  d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f,
    ...n))
})({
  key: "AIzaSyBv6pGLUJhPsv3FELprpnEPH-2pZqExsR8",
  v: "weekly",
  // Use the 'v' parameter to indicate the version to use (weekly, beta, alpha, etc.).
  // Add other bootstrap parameters as needed, using camel case.
});
</script> -->
<script
  src="https://maps.googleapis.com/maps/api/js?v=3.exp&language=es&region=CO&key=******">
</script>
<!--script src="<?php echo themeDirectory();?>js/aos.js"></script -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init();
</script>
</body>

</html>