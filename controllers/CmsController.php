<?php

namespace app\controllers;

use Yii;

use app\models\Cms;
use app\models\Product;


class CmsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
	
	public function actionDownload(){
	$this->view->title = 'Download';
	$this->layout = 'cms';
	return $this->render('download');
	}
	
	public function actionCareer(){
	$this->view->title = 'Career';
	$this->layout = 'cms';
	return $this->render('career');
	}
	
	public function actionProduct(){
	$this->view->title = 'Product';
	$model=Product::findAll(['active'=>1]);
	$this->layout = 'cms';
	return $this->render('product',['model'=>$model]);
	}
	
}