<?php

namespace app\controllers;

use Yii;

use app\models\Feedback;
use app\models\FeedbackSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FeedbackController implements the CRUD actions for Feedback model.
 */
class FeedbackController extends Controller
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

     
    
    public function actionIndex()
    {
    	$this->view->title = 'Feedback';
    	$this->layout = 'contact';
    	$model = new Feedback();
    
    	if ($model->load(Yii::$app->request->post()) ) {
    		if($model->save()){
    			
    			$this->Mailsend($model->message);
    			$message="success";
    			return $this->redirect(Yii::$app->homeUrl.'feedback?status=success');
    		}else{
    			$message="fail";
    			return $this->redirect(Yii::$app->homeUrl.'feedback?status=fail');
    		}
    		
    	} else {
    		$message='';
    		return $this->render('feedback');
    			
    	}
    
    }
    
    private function Mailsend($message){
    	
    	$to='vishal.jaiswal@indware.com';
    	
    	
    	$subject = "TMX TMT Feedback Form Message";
    	$txt = $message;
    	$headers = "From: info@indware.com" . "\r\n" .
    			   "CC: anupam.b@indware.com";
    	
    	
    	mail($to,$subject,$txt,$headers);
    }
}