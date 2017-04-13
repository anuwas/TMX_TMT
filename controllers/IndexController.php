<?php

namespace app\controllers;

use Yii;
use app\models\Slider;
use app\models\Cms;
use app\models\ClientLogo;
use app\models\Product;


class IndexController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$this->view->title = 'PERFECT TMX TMT';
    	$this->layout = 'index';
		$slider=Slider::findAll(['active'=>1]);
		$clientlogo=ClientLogo::findAll(['active'=>1]);
		$product=Product::findAll(['active'=>1]);
		$welcome=Cms::findOne(['page_name'=>'Welcome']);
		$marketing_network=Cms::findOne(['page_name'=>'marketing_network']);
	
	
	    return $this->render('index',[
		'slider'=>$slider,
		'welcome'=>$welcome,
		'clientlogo'=>$clientlogo,
		'product'=>$product,
		'marketing_network'=>$marketing_network,
		]);
    }
    
}