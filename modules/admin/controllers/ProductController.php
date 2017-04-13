<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\Product;
use app\models\ProductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UploadForm;
use yii\web\UploadedFile;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
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
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex1()
    {
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Product model.
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
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Product();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->product_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate1($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->product_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Product model.
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
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
	
	public function actionIndex()
    {
    	$this->view->title = 'Admin - Product';
    	$this->layout = 'admin';
    	$model=Product::findAll(['active'=>'1']);
    	return $this->render('product_list',['model'=>$model]);
    }
    
    
    public function actionNewproduct()
    {
    	$this->view->title = 'Admin - Add Product';
    	$this->layout = 'admin';
    	$model = new Product();
		$imgmodel = new UploadForm();
    	
    	if($model->load(Yii::$app->request->post())){
    		$model->product_short_desc=htmlentities($model->product_short_desc);
    		$model->product_long_desc=htmlentities($model->product_long_desc);
			$uploadedfile = UploadedFile::getInstance($imgmodel, 'resource');
    		if($uploadedfile){
    			 
    			$imgmodel->imageFile=$uploadedfile;
    			$filename=$imgmodel->productimgUpload();
    			$model->filename=$filename;
    		}
    		$model->save();
    		 
    		return $this->redirect(Yii::$app->request->baseUrl.'/admin/product');
    	}else{
    		return $this->render('new_product',['model' => $model,]);
    	}
    	
    }
    
    public function actionUpdate($id)
    {
    	$this->view->title = 'Admin - Update Product';
    	$this->layout = 'admin';
    	
    	$model = $this->findModel($id);
    	$model->product_short_desc=html_entity_decode($model->product_short_desc);
    	$model->product_long_desc=html_entity_decode($model->product_long_desc);
    	
    	if($model->load(Yii::$app->request->post()))
    	{
    		$model->product_short_desc=htmlentities($model->product_short_desc);
    		$model->product_long_desc=htmlentities($model->product_long_desc);
			
    		$model->save();
    		return $this->redirect(Yii::$app->request->baseUrl.'/admin/product');
    	}
    		
    	 else {
    		return $this->render('update_product', ['model' => $model,]);
    		
    	}
    }
    
    public function actionProductdlete($id)
    {
    	Product::findOne($id)->delete();
    	return $this->redirect(Yii::$app->request->baseUrl.'/admin/product');
    }
	
	
}
