<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\InterestCont;
use app\models\InterestContSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UploadForm;

/**
 * InterestcontController implements the CRUD actions for InterestCont model.
 */
class InterestcontController extends Controller
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

    /**
     * Lists all InterestCont models.
     * @return mixed
    
    public function actionIndex()
    {
        $searchModel = new DistrictemailSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Districtemail model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Districtemail model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new InterestCont();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->Interestcont_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Districtemail model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate1($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->InterestCont_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Districtemail model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Districtemail model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Districtemail the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = InterestCont::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
	
	 public function actionIndex()
    {
    	$this->view->title = 'Admin - Interest Contact Email';
    	$this->layout = 'admin';
    	$model=InterestCont::find(['active'=>1])->all();
    	return $this->render('interestcont_list',['model'=>$model]);
    }
	
	 public function actionAdd()
    {
    	$this->view->title = 'Admin - New Email';
    	$this->layout = 'admin';
    
    	$model = new InterestCont();
    	
    
    	if($model->load(Yii::$app->request->post())){
    
    		$model->save();
    
    		return $this->redirect(Yii::$app->request->baseUrl.'/admin/interestcont');
    	}else{
    		return $this->render('new_email',['model' => $model]);
    	}
    }
	
	
	 public function actionUpdateemail($id)
    {
    	$this->view->title = 'Admin - Update Email';
    	$this->layout = 'admin';
    	
    	$model = $this->findModel($id);
    	$model->interestcont_email=html_entity_decode($model->interestcont_email);
    	$model->interestcont_name=html_entity_decode($model->interestcont_name);
    	
    	if($model->load(Yii::$app->request->post()))
    	{
    		$model->interestcont_email=htmlentities($model->interestcont_email);
    		$model->interestcont_name=htmlentities($model->interestcont_name);
    		$model->save();
    		return $this->redirect(Yii::$app->request->baseUrl.'/admin/interestcont');
    	}
    		
    	 else {
    		return $this->render('update_email', ['model' => $model,]);
    		
    	}
    }
	
	public function actionDeleteemail($id)
    {
    	InterestCont::findOne($id)->delete();
    	return $this->redirect(Yii::$app->request->baseUrl.'/admin/interestcont');
    }
}
