<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\AppIndexAsset;

AppIndexAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

<link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Abel|Source+Sans+Pro:400,300,300italic,400italic,600,600italic,700,700italic,900,900italic,200italic,200' rel='stylesheet' type='text/css'>
<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" rel="stylesheet">
<link rel="shortcut icon" href="<?php echo Yii::getAlias('@web').'/web/assets/admin/'?>icon/favicon.ico" type="image/x-icon"/>
<script src="<?php echo Yii::getAlias('@web').'/web/assets/js/jquery-1.10.2.min.js';?>"></script>
</head>
<body>
<?php $this->beginBody() ?>

<!--  preloader start -->
<div id="tb-preloader">
  <div class="tb-preloader-wave"></div>
</div>
<!-- preloader end -->

<div class="wrapper">
  
<!--=========== BEGIN HEADER SECTION ================-->
<div class="header-bg">
    <div class="top-bar gray-bg- visible-md visible-lg">
      <div class="container">
        <div class="row">
          <div class="col-md-9 pull-right">
            <ul class="top-link">
              <li><i class="fa fa-phone" aria-hidden="true"></i> 00 9750 5253 484</li>
              <li><i class="fa fa-envelope" aria-hidden="true"></i> perfecttmx@gmail.com</li>
              <li><a href="<?php echo Yii::$app->homeUrl.'gallery'?>"">Gallery</a></li>
               <?php 
		$session = Yii::$app->session;
		if(!isset($session['loggedUser'])){ ?>
              <li><a class="btn btn-extra-small btn-dark-solid" href="<?php echo Yii::$app->homeUrl.'siteuser/login'?>">Login</a></li>
              <?php }else if($session['loggedUser']==''){ ?>
               <li><a class="btn btn-extra-small btn-dark-solid" href="<?php echo Yii::$app->homeUrl.'siteuser/login'?>">Login</a></li>
               <?php } else { ?>
               <li>WELCOME <a href="javascript:void(0)"><?php echo $session['loggedUser']['siteuser_name'];?></a>&nbsp;|&nbsp;<a class="btn btn-extra-small btn-dark-solid" href="<?php echo Yii::$app->homeUrl.'siteuser/logout'?>">Logout</a></li>
               <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--top bar--> 
    
    <!--header start-->
    <header class="l-header">
      <div class="l-navbar l-navbar_compact l-navbar_t-light js-navbar-sticky">
        <div class="container header-container">
          <nav class="menuzord js-primary-navigation" role="navigation" aria-label="Primary Navigation"> 
            <!--logo start--> 
            <a href="<?php echo Yii::$app->homeUrl ;?>" class="logo-brand"> <img class="retina" src="<?php echo Yii::getAlias('@web').'/web/assets/'?>img/logo.png" alt="Perfect TMX TMT"> </a> 
            <!--logo end--> 
            <!--menu start-->
             <?=Yii::$app->view->renderFile('@app/views/menu/menu.php'); ?>
            <!--menu end--> 
          </nav>
        </div>
      </div>
    </header>
    <!--header end--> 
  </div>

<?= $content ?>

<footer id="footer" class="dark">
    <!-- Start footer top area -->
   <?=Yii::$app->view->renderFile('@app/views/menu/footer_menu.php'); ?>
</footer>
</div>
<?php $this->endBody() ?>

<script type="text/javascript">
        jQuery(document).ready(function() {

            jQuery('.tp-banner').show().revolution(
            {
                dottedOverlay:"none",
                delay:8000,
                // startwidth:1170,
                startheight:530,
                hideThumbs:200,

                thumbWidth:100,
                thumbHeight:50,
                thumbAmount:5,

                navigationType:"bullet",
                navigationArrows:"solo",
                navigationStyle:"preview4",

                touchenabled:"on",
                onHoverStop:"on",

                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,

                parallax:"mouse",
                parallaxBgFreeze:"on",
                parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

                keyboardNavigation:"off",

                navigationHAlign:"center",
                navigationVAlign:"bottom",
                navigationHOffset:0,
                navigationVOffset:20,

                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:20,
                soloArrowLeftVOffset:0,

                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:20,
                soloArrowRightVOffset:0,

                shadow:0,
                fullWidth:"on",
                // autoHeight:"on",
                fullScreen:"off",

                spinner:"spinner4",

                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,

                shuffle:"off",

                autoHeight:"off",
                forceFullWidth:"off",

                hideThumbsOnMobile:"off",
                hideNavDelayOnMobile:1500,
                hideBulletsOnMobile:"off",
                hideArrowsOnMobile:"off",
                hideThumbsUnderResolution:0,

                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                startWithSlide:0,
                videoJsPath:"slider-revolution/videojs/",
                fullScreenOffsetContainer: ""
            });

    }); //ready
    </script>
</body>
</html>
<?php $this->endPage() ?>
