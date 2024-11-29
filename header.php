
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
<link rel="stylesheet" href="<?php echo themeDirectory(); ?>css/map.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" href="<?php echo themeDirectory(); ?>css/slick-custom.css" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<?php 
wp_head(); 
$themeDirectory = themeDirectory();
$homeDirectory = homeDirectory();
?>
</head>

<body <?php body_class('containerAll'); ?> style="background-color: rgba(255, 255, 255, 1)">
    <header class="siteHeader">
      <div class="headerContent">

        <div class="headerButtonSection">
          <a href="<?= homeDirectory(); ?>/" class="headerIconContainer">
            <img class="headerIcon" src="<?= themeDirectory(); ?>images/topIcon.svg">
          </a>
          <div class="sideTopButtons">
            <button  class="headphoneButton">
              <div class="headphoneImage"></div>
            </button>
            <button class="burgerIcon">
              <!--div class="burgerImage"></div-->
              <input type="checkbox" id="toggle">
              <label class="checkbox" for="toggle">
                <div class="trace"></div>
                <div class="trace"></div>
                <div class="trace"></div>
              </label>
            </button>
          </div>
          
        </div>

        
        <div class="topMenu">
          <!-- nosotros-->
          <div class="itemMenuContainer"> 
            <div class="itemMenu" >
              <span class="itemMenuText"> Nosotros </span>
              <img class="itemMenuArrow" src="<?= themeDirectory(); ?>images/arrowdown.svg">
            </div>
            <div class="dropdownMenu">
              <a class="menuSubitem darkGradient" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');" href="<?= homeDirectory(); ?>/philosophy">
                <h2 class="menuSubitemTitle">FILOSOFÍA</h2>
              </a>
              <a class="menuSubitem darkGradient" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');" href="<?= homeDirectory(); ?>/requests">
                <h2 class="menuSubitemTitle">SOLICITUDES</h2>
              </a>
              <a class="menuSubitem darkGradient" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');" href="<?= homeDirectory(); ?>/credit-page">
                <h2 class="menuSubitemTitle">CREDITO DE LIBRANZA</h2>
              </a>
              <a class="menuSubitem darkGradient" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');" href="<?= homeDirectory(); ?>/">
                <h2 class="menuSubitemTitle">NUESTRAS POLÍTICAS</h2>
              </a>
            </div>
          </div>

          <!-- Crédito de libranza-->
          <div class="itemMenuContainer"> 
            <div class="itemMenu">
              <span class="itemMenuText"> Crédito de libranza </span>
              <img class="itemMenuArrow" src="<?= themeDirectory(); ?>images/arrowdown.svg">
            </div>
            <div class="dropdownMenu">
              <a class="menuSubitem darkGradient" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');"href="<?= homeDirectory(); ?>/">
                <h2 class="menuSubitemTitle">FILOSOFÍA</h2>
              </a>
              <a class="menuSubitem darkGradient" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');"href="<?= homeDirectory(); ?>/">
                <h2 class="menuSubitemTitle">VALORES</h2>
              </a>
              <a class="menuSubitem darkGradient" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');"href="<?= homeDirectory(); ?>/">
                <h2 class="menuSubitemTitle">¿DONDE NOS ENCONTRAMOS?</h2>
              </a>
              <a class="menuSubitem darkGradient" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');"href="<?= homeDirectory(); ?>/">
                <h2 class="menuSubitemTitle">NUESTRAS POLÍTICAS</h2>
              </a>
            </div>
          </div>

          <!-- Solicitudes-->
          <div class="itemMenuContainer"> 
            <div class="itemMenu">
              <span class="itemMenuText"> Solicitudes </span>
              <img class="itemMenuArrow" src="<?= themeDirectory(); ?>images/arrowdown.svg">
            </div>
            <div class="dropdownMenu">
              <a class="menuSubitem darkGradient" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');"href="<?= homeDirectory(); ?>/">
                <h2 class="menuSubitemTitle">FILOSOFÍA</h2>
              </a>
              <a class="menuSubitem darkGradient" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');"href="<?= homeDirectory(); ?>/">
                <h2 class="menuSubitemTitle">VALORES</h2>
              </a>
              <a class="menuSubitem darkGradient" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');"href="<?= homeDirectory(); ?>/">
                <h2 class="menuSubitemTitle">¿DONDE NOS ENCONTRAMOS?</h2>
              </a>
              <a class="menuSubitem darkGradient" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');"href="<?= homeDirectory(); ?>/">
                <h2 class="menuSubitemTitle">NUESTRAS POLÍTICAS</h2>
              </a>
            </div>
          </div>


        </div>

        
        

      </div>
      <div class="menuMobile">

        <div class="menuItemContainer">
          <div class="menuItem">
            <div class="menuCategory ">
              <h2 class="menuCategoryTitle bottomBorderBlue">Nosotros</h2>
              <img class="mobileMenuArrow" src="<?= themeDirectory(); ?>images/arrowdown.svg">
            </div>
            <div class="menuSubitemsContainer">
              <a class="menuSubitem darkGradient" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');" href="<?= homeDirectory(); ?>/philosophy">
                <h2 class="menuSubitemTitle">FILOSOFÍA</h2>
              </a>
              <a class="menuSubitem darkGradient" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');" href="<?= homeDirectory(); ?>/requests">
                <h2 class="menuSubitemTitle">SOLICITUDES</h2>
              </a>
              <a class="menuSubitem darkGradient" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');" href="<?= homeDirectory(); ?>/credit-page">
                <h2 class="menuSubitemTitle">CREDITO DE LIBRANZA</h2>
              </a>
              <a class="menuSubitem darkGradient" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');"href="<?= homeDirectory(); ?>/">
                <h2 class="menuSubitemTitle">NUESTRAS POLÍTICAS</h2>
              </a>
            </div>
          </div>

          <div class="menuItem">
            <div class="menuCategory ">
              <h2 class="menuCategoryTitle bottomBorderBlue">Crédito de libranza</h2>
              <img class="mobileMenuArrow" src="<?= themeDirectory(); ?>images/arrowdown.svg">
            </div>
            <div class="menuSubitemsContainer">
            <a class="menuSubitem darkGradient" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');"href="<?= homeDirectory(); ?>/">
                <h2 class="menuSubitemTitle">FILOSOFÍA</h2>
              </a>
              <a class="menuSubitem darkGradient" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');"href="<?= homeDirectory(); ?>/">
                <h2 class="menuSubitemTitle">VALORES</h2>
              </a>
              <a class="menuSubitem darkGradient" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');"href="<?= homeDirectory(); ?>/">
                <h2 class="menuSubitemTitle">¿DONDE NOS ENCONTRAMOS?</h2>
              </a>
              <a class="menuSubitem darkGradient" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');"href="<?= homeDirectory(); ?>/">
                <h2 class="menuSubitemTitle">NUESTRAS POLÍTICAS</h2>
              </a>
             </div>
          </div>

          <div class="menuItem">
            <div class="menuCategory ">
              <h2 class="menuCategoryTitle bottomBorderBlue">Solicitudes</h2>
              <img class="mobileMenuArrow" src="<?= themeDirectory(); ?>images/arrowdown.svg">
              
            </div>
            <div class="menuSubitemsContainer">
            <a class="menuSubitem darkGradient" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');"href="<?= homeDirectory(); ?>/">
                <h2 class="menuSubitemTitle">FILOSOFÍA</h2>
              </a>
              <a class="menuSubitem darkGradient" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');"href="<?= homeDirectory(); ?>/">
                <h2 class="menuSubitemTitle">VALORES</h2>
              </a>
              <a class="menuSubitem darkGradient" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');"href="<?= homeDirectory(); ?>/">
                <h2 class="menuSubitemTitle">¿DONDE NOS ENCONTRAMOS?</h2>
              </a>
              <a class="menuSubitem darkGradient" style="background-image: url('<?= $themeDirectory; ?>trashimages/hero1.jpg');"href="<?= homeDirectory(); ?>/">
                <h2 class="menuSubitemTitle">NUESTRAS POLÍTICAS</h2>
              </a>
            </div>
          </div>
          
        </div>

      </div>
   </header>   