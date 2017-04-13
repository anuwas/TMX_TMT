<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppCmsAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
            'assets/css/animate.css',
    	    'assets/css/bootstrap.min.css',
    		'assets/css/custom.css',
    		'assets/css/default-theme.css',
    		'assets/css/elastic.css',
    		'assets/css/extralayers.css',
    		'assets/css/themes/flaticon.css',
    		'assets/css/font-awesome.min.css',
    		'assets/css/linea-icon.css',
    		'assets/css/magnific-popup.css',
    		'assets/css/owl.carousel.css',
			'assets/css/owl.theme.css',
			'assets/css/settings.css',
			'assets/css/shortcodes.css',
			'assets/css/style.css',
			
    ];
    public $js = [
    		'assets/js/bootstrap.min.js',
    		'assets/js/breakpoint.js',
    		'assets/js/imagesloaded.js',
    		'assets/js/jquery.ajaxchimp.min.js',
    		'assets/js/jquery.bootstrap.newsbox.js',
    		'assets/js/jquery.bootstrap.newsbox.min.js',
    		'assets/js/jquery.countTo.js',
    		'assets/js/jquery.easing.1.3.js',
    		'assets/js/jquery.easypiechart.min.js',
    		'assets/js/jquery.eislideshow.js',
    		'assets/js/jquery.flexslider-min.js',
    		/*'assets/js/jquery.gmap.min.js',*/
    		'assets/js/jquery.isotope.js',
    		'assets/js/jquery.magnific-popup.min.js',
    		'assets/js/jquery.nav.js',
			'assets/js/jquery.sticky.min.js',
			'assets/js/jquery.themepunch.revolution.min.js',
			'assets/js/jquery.themepunch.tools.min.js',
			'assets/js/menuzord.js',
			'assets/js/modernizr.js',
			'assets/js/owl.carousel.min.js',
			'assets/js/scripts.js',
			'assets/js/smooth.js',
			'assets/js/touchspin.js',
			'assets/js/typist.js',
			'assets/js/visible.js',
			'assets/js/wow.min.js',
    		
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}