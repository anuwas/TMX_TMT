<?php

namespace app\controllers;

use Yii;

use app\models\Tmtvendor;
use app\models\TmtvendorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TmtvendorController implements the CRUD actions for Tmtvendor model.
 */
class TmtvendorController extends Controller
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
    	$this->view->title = 'Vendor';
    	$this->layout = 'contact';
    	$model = new Tmtvendor();
    
    	if ($model->load(Yii::$app->request->post()) ) {
    		if($model->save()){
    			
    			$this->Mailsend($model->comment);
    			$message="success";
    			
    			return $this->redirect(Yii::$app->homeUrl.'tmtvendor?status=success');
    		}else{
    			$message="fail";
    			return $this->redirect(Yii::$app->homeUrl.'tmtvendor?status=fail');
    		}
    		
    	} else {
    		$message='';
    		return $this->render('tmtvendor');
    			
    	}
    
    }
    
 
    
    private function Mailsend($message){
    	
    	$to='vishal.jaiswal@indware.com';
    	//$to='perfectpurchase2016@gmail.com';
    	
    	$subject = "TMX TMT Vendor Form Message";
    	$txt = $message;
    	$headers = "From: info@indware.com" . "\r\n" .
    			   "CC: anupam.b@indware.com";
    	
    	
    	mail($to,$subject,$txt,$headers);
    }
}
