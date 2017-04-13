<?php

namespace app\controllers;

use Yii;

use app\models\Contact;
use app\models\ContactSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ContactController implements the CRUD actions for Contact model.
 */
class ContactController extends Controller
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
    
    private function Mailsend($message){
    	
    	//$to = $districtemail->district_email;
    	$to='vishal.jaiswal@indware.com';
    	
    	
    	$subject = "TMX TMT Contact Message";
    	$txt = $message;
    	$headers = "From: info@indware.com" . "\r\n" .
    			   "CC: anupam.b@indware.com";
    	
    	
    	mail($to,$subject,$txt,$headers);
    }
    
    public function actionSendcontact(){
    	if (Yii::$app->request->isPost)
    	{
    		$model=new Contact();
    		$data = Yii::$app->request->post();
    		$model->contact_name=$data['Your_Name'];
    		$model->phone=$data['Your_Phone'];
    		$model->email=$data['Your_Email'];
    		$model->message=$data['contact_message'];
    		$model->save();
    	}
    }
}
