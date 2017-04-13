<?php

namespace app\controllers;

use Yii;

use app\models\Quickcon;
use app\models\QuickconSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\InterestCont;

/**
 * Quickcontact implements the CRUD actions for Quickcon model.
 */
class QuickcontactController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

     
    /*
    public function actionIndex()
    {
    	$this->view->title = 'Contact';
    	$this->layout = 'contact';
    	$model = new Contact();
    
    	if ($model->load(Yii::$app->request->post()) ) {
    		if($model->save()){
    			
    			$this->Mailsend($model->message);
    			$message="success";
    			return $this->redirect(Yii::$app->homeUrl.'contact?status=success');
    		}else{
    			$message="fail";
    			return $this->redirect(Yii::$app->homeUrl.'contact?status=fail');
    		}
    		
    	} else {
    		$message='';
    		return $this->render('contact');
    			
    	}
    
    }
    */
    private function Mailsend($message){
    	
    	//$to = $interestcontemail->interestcont_email;
    	$to='vishal.jaiswal@indware.com';
    	
    	
    	$subject = "TMX TMT Contact Message";
    	$txt = $message;
    	$headers = "From: info@indware.com" . "\r\n" .
    			   "CC: anupam.b@indware.com";
    	
    	
    	mail($to,$subject,$txt,$headers);
    }
}
