<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use app\models\SiteUser;
/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
	
	
    public function actionIndex()
    {
    	$this->view->title = 'Admin - Dashboard';
    	$this->layout = 'admin';
		$model=SiteUser::find(['active'=>1])->all();
    	return $this->render('dashboard',['model'=>$model]);
    }
    public function actionDashboard()
    {
    	$this->view->title = 'Admin - Dashboard';
    	$this->layout = 'admin';
		$model=SiteUser::find(['active'=>1])->all();
    	return $this->render('dashboard',['model'=>$model]);
    }
}
