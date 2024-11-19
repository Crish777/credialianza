
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link href="<?= themeDirectory(); ?>css/slick.css" rel="stylesheet" />
<link rel="stylesheet" href="<?= themeDirectory()?>css/aos.css">
<link rel="stylesheet" type="text/css" href="<?= themeDirectory(); ?>css/slick-theme.css"/>
<link rel="stylesheet" href="<?php echo themeDirectory(); ?>css/fonts.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" href="<?php echo themeDirectory(); ?>css/slick-custom.css" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<?php 
wp_head(); 
$themeDirectory = themeDirectory();
?>
</head>

<body <?php body_class('containerAll'); ?> style="background-color: rgba(255, 255, 255, 1)">
    <header class="siteHeader">
      <div class="headerContent">

        <div class="headerButtonSection">
          <a href="/" class="headerIconContainer">
            <img class="headerIcon" src="<?= themeDirectory(); ?>images/topIcon.svg">
          </a>
          <div class="sideTopButtons">
            <button  class="headphoneButton">
              <div class="headphoneImage"></div>
            </button>
            <button class="burgerIcon">
              <div class="burgerImage"></div>
            </button>
          </div>
          
        </div>

        
        <div class="topMenu">
          <!-- nosotros-->
          <div class="itemMenuContainer"> 
            <a class="itemMenu" href="#">
                <span class="itemMenuText"> Nosotros </span>
              <img class="itemMenuArrow" src="<?= themeDirectory(); ?>images/arrowdown.svg">
            </a>
            <div class="dropdownMenu">
              <a class="menuSubitem" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');" href="#">FILOSOFÍA</a>
              <a class="menuSubitem" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');" href="#">VALORES</a>
              <a class="menuSubitem" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');" href="#">¿DONDE NOS ENCONTRAMOS?</a>
              <a class="menuSubitem" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');" href="#">NUESTRAS POLÍTICAS</a>
            </div>
          </div>

          <!-- Crédito de libranza-->
          <div class="itemMenuContainer"> 
            <a class="itemMenu" href="#">
                <span class="itemMenuText"> Crédito de libranza </span>
              <img class="itemMenuArrow" src="<?= themeDirectory(); ?>images/arrowdown.svg">
            </a>
            <div class="dropdownMenu">
              <a class="menuSubitem" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');" href="#">FILOSOFÍA</a>
              <a class="menuSubitem" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');" href="#">VALORES</a>
              <a class="menuSubitem" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');" href="#">¿DONDE NOS ENCONTRAMOS?</a>
              <a class="menuSubitem" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');" href="#">NUESTRAS POLÍTICAS</a>
            </div>
          </div>

          <!-- Solicitudes-->
          <div class="itemMenuContainer"> 
            <a class="itemMenu" href="#">
                <span class="itemMenuText"> Solicitudes </span>
              <img class="itemMenuArrow" src="<?= themeDirectory(); ?>images/arrowdown.svg">
            </a>
            <div class="dropdownMenu">
              <a class="menuSubitem" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');" href="#">FILOSOFÍA</a>
              <a class="menuSubitem" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');" href="#">VALORES</a>
              <a class="menuSubitem" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');" href="#">¿DONDE NOS ENCONTRAMOS?</a>
              <a class="menuSubitem" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');" href="#">NUESTRAS POLÍTICAS</a>
            </div>
          </div>


        </div>

        
        

      </div>
      <div class="menuMobile">

        <div class="menuItemContainer">
          <div class="menuItem">
            <div class="menuCategory">
              <img class="mobileMenuArrow" src="<?= themeDirectory(); ?>images/arrowdown.svg">
              Nosotros
              
            </div>
            <div class="menuSubitemsContainer">
              <div class="menuSubitem" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');">FILOSOFÍA</div>
              <div class="menuSubitem" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');">VALORES</div>
              <div class="menuSubitem" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');">¿DONDE NOS ENCONTRAMOS?</div>
              <div class="menuSubitem" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');">NUESTRAS POLÍTICAS</div>
            </div>
          </div>

          <div class="menuItem">
            <div class="menuCategory">
              <img class="mobileMenuArrow" src="<?= themeDirectory(); ?>images/arrowdown.svg">
              Crédito de libranza
              
            </div>
            <div class="menuSubitemsContainer">
              <div class="menuSubitem" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');">FILOSOFÍA</div>
              <div class="menuSubitem" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');">VALORES</div>
              <div class="menuSubitem" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');">¿DONDE NOS ENCONTRAMOS?</div>
              <div class="menuSubitem" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');">NUESTRAS POLÍTICAS</div>
            </div>
          </div>

          <div class="menuItem">
            <div class="menuCategory">
              <img class="mobileMenuArrow" src="<?= themeDirectory(); ?>images/arrowdown.svg">
              Solicitudes
            </div>
            <div class="menuSubitemsContainer">
              <div class="menuSubitem" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');">FILOSOFÍA</div>
              <div class="menuSubitem" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');">VALORES</div>
              <div class="menuSubitem" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');">¿DONDE NOS ENCONTRAMOS?</div>
              <div class="menuSubitem" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');">NUESTRAS POLÍTICAS</div>
            </div>
          </div>
          
        </div>

      </div>
   </header>   